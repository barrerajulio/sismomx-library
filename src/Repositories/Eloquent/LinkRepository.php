<?php

namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\Link;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class LinkRepository
{
    /**
     * Indice enviado en la consulta del API para identificar el repositorio a donde se realizara la consulta
     */
    const REQUEST_FILTER_INDEX = 'otros';

    /**
     * @var Link
     */
    protected $model;

    /**
     * LinkRepository constructor.
     * @param Link $model
     */
    public function __construct(Link $model)
    {
        $this->model = $model;
    }
}
