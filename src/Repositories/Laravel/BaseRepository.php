<?php

namespace CodeandoMexico\Sismomx\Core\Repositories\Laravel;

use Illuminate\Database\Eloquent\Model;

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
        if (empty($params)) {
            return [];
        }

        $fields = $this->requestedFields($fields);
        $queryBuilder = $this->getQueryBuilder();
        $queryBuilder->from($this->getModel()->getTable())
            ->select($fields);

        foreach ($params as $attribute => $data) {
            $operator = (isset($data['operator'])) ? $data['operator'] : '=';
            $value = $data['value'];
            $queryBuilder->where($attribute, $operator, $value);
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