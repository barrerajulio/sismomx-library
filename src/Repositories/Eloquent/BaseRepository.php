<?php

namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\MySqlConnection;
use Illuminate\Support\Facades\DB;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class BaseRepository
{
    /**
     * Constante para indicar el límite a aplicar en las consultas a base de datos
     */
    const DEFAULT_LIMIT = 1000;

    /**
     * Constante para indicar que no se debe aplicar limite a la consulta a base de datos
     */
    const UNLIMITED = -1;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQueryBuilder()
    {
        return $this->getModel()->newQuery()->getQuery();
    }

    /**
     * @return MySqlConnection
     */
    protected function getConnection()
    {
        /** @var MySqlConnection $connection */
        $connection = app('db')->connection();
        return $connection;
    }

    /**
     * Insertar un solo elemento usando el ORM
     * @param array $payload - arreglo clave => valor, donde clave debe corresponder con el nombre del campo en la tabla
     * @return mixed
     * @throws Exception
     */
    public function storeSingleRowFromArray(array $payload)
    {
        $model = $this->model->newInstance();
        $model->fill($payload);

        $result = $model->save();

        $msg = '';
        if (!$result) {
            $msg .= ' Error al guardar | ' . json_encode($payload);
            throw new Exception($msg);
        }

        return $model->id;
    }

    /**
     * Insertar de forma masiva, cada elemento del arreglo $payload debera representar una fila en la tabla
     * @param array $payload
     * @param null $table
     * @return mixed
     */
    public function storeManyRowsFromArray(array $payload, $table = null)
    {
        $table = (is_null($table) ? $this->getModel()->getTable() : $table);
        $result = DB::table($table)->insert($payload);
        return $result;
    }

    /**
     * @param array $params - Arreglo que servira para hacer los filtros a la consulta
     * Ejemplo:
     *      $params = [
     *          'id' => [
     *              'operator' => '>'
     *              'value' > 100
     *          ]
     *      ]
     * El arreglo anterior sera agregado a la consulta como: where(id > 100)
     *
     * @param array $fields - Campos que se desean recuperar
     * @param array $orderBy - Arreglo con datos para orden
     * Ejemplo:
     *      $oderBy = [
     *          [
     *              'column' => 'id',
     *              'direction' => 'asc'
     *          ]
     *      ]
     *
     * @param int $limit
     * @return array|static[]
     */
    public function findByAttributesRaw(array $params, $fields = [], $orderBy = [], $limit = self::DEFAULT_LIMIT)
    {
        $fields = $this->requestedFields($fields);
        $queryBuilder = $this->getQueryBuilder();
        $queryBuilder->from($this->getModel()->getTable())
            ->select($fields);

        if (!empty($params)) {
            foreach ($params as $data) {
                $attribute = $data['field'];
                $operator = (isset($data['operator'])) ? $data['operator'] : '=';
                $value = $data['value'];
                $queryBuilder->where($attribute, $operator, $value);
            }
        }

        if (!empty($orderBy)) {
            foreach ($orderBy as $item) {
                $queryBuilder->orderBy($item['column'], $item['direction']);
            }
        }

        if ($limit !== self::UNLIMITED) {
            $queryBuilder->limit($limit);
        }

        $result = $queryBuilder->get();

        return $result;
    }

    /**
     * @param $fields
     * @return array
     */
    public function requestedFields($fields)
    {
        if (is_array($fields) && !empty($fields)) {
            return $fields;
        }
        return ['*'];
    }
}