<?php

namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\SpecificOffering;

/**
 * User: @fabianjuarezmx
 * Date: 9/24/17
 */
class SpecificOfferingRepository
{
    /**
     * Indice enviado en la consulta del API para identificar el repositorio a donde se realizara la consulta
     */
    const REQUEST_FILTER_INDEX = 'ofrecimientos';

    /**
     * @var SpecificOffering
     */
    protected $model;

    /**
     * SpecificOfferingRepository constructor.
     * @param SpecificOffering $model
     */
    public function __construct(SpecificOffering $model)
    {
        $this->model = $model;
    }
}
