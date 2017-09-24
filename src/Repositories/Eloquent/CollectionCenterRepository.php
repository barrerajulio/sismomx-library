<?php
namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\CollectionCenter;

/**
 * Class CollectionCenterRepository
 * @package CodeandoMexico\Sismomx\Core\Repositories\Eloquent
 */
class CollectionCenterRepository extends BaseRepository
{
    /**
     * Indice enviado en la consulta del API para identificar el repositorio a donde se realizara la consulta
     */
    const REQUEST_FILTER_INDEX = 'centros';

    /**
     * @var CollectionCenter
     */
    protected $model;

    /**
     * CollectionCenterRepository constructor.
     * @param CollectionCenter $model
     */
    public function __construct(CollectionCenter $model)
    {
        $this->model = $model;
    }
}
