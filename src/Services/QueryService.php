<?php

namespace CodeandoMexico\Sismomx\Core\Services;

use CodeandoMexico\Sismomx\Core\Repositories\Eloquent\BaseRepository;
use CodeandoMexico\Sismomx\Core\Repositories\Eloquent\CollectionCenterRepository;
use CodeandoMexico\Sismomx\Core\Repositories\Eloquent\HelpRequestRepository;
use CodeandoMexico\Sismomx\Core\Repositories\Eloquent\LinkRepository;
use CodeandoMexico\Sismomx\Core\Repositories\Eloquent\ShelterRepository;
use Exception;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class QueryService
{
    /**
     * Repositorios disponibles para consulta de datos
     * @var array
     */
    protected $repositories = [
        CollectionCenterRepository::REQUEST_FILTER_INDEX => CollectionCenterRepository::class,
        HelpRequestRepository::REQUEST_FILTER_INDEX => HelpRequestRepository::class,
        ShelterRepository::REQUEST_FILTER_INDEX => ShelterRepository::class,
        LinkRepository::REQUEST_FILTER_INDEX => LinkRepository::class
    ];

    public function run(array $requestData)
    {
        // todo validar request, si no cumple estructura indicada no se deberia continuar

        if (empty($requestData)) {
            return [];
        }

        $data = [];
        foreach ($requestData as $categoryFilter => $params) {
            $repositoryPath = $this->getRepository($categoryFilter);
            /** @var BaseRepository $repository */
            $repository = app($repositoryPath);
            $conditions = (array_key_exists('conditions', $params)) ? $params['conditions']: [];
            $fields = (array_key_exists('fields', $params)) ? $params['fields']: [];
            $orderBy = (array_key_exists('orderBy', $params)) ? $params['orderBy']: [];
            $limit = (array_key_exists('limit', $params)) ? $params['limit']: BaseRepository::DEFAULT_LIMIT;
            $result = $repository->findByAttributesRaw($conditions, $fields, $orderBy, $limit);
            $data[$repository::REQUEST_FILTER_INDEX] = $result->toArray();
        }

        return $data;
    }

    /**
     * @param $categoryFilter
     * @return mixed
     * @throws Exception
     */
    private function getRepository($categoryFilter)
    {
        if (!array_key_exists($categoryFilter, $this->repositories)) {
            $msg = "No existe repositorio de consultas para la categoria " . $categoryFilter;
            throw new Exception($msg);
        }

        return $this->repositories[$categoryFilter];
    }
}