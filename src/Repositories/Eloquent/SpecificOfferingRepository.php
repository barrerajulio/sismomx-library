<?php
namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\SpecificOffering;

/**
 * Class SpecificOfferingRepository
 * @package CodeandoMexico\Sismomx\Core\Repositories\Eloquent
 */
class SpecificOfferingRepository extends BaseRepository
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
