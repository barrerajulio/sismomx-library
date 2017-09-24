<?php
namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\Shelter;

/**
 * Class ShelterRepository
 * @package CodeandoMexico\Sismomx\Core\Repositories\Eloquent
 */
class ShelterRepository extends BaseRepository
{
    /**
     * Indice enviado en la consulta del API para identificar el repositorio a donde se realizara la consulta
     */
    const REQUEST_FILTER_INDEX = 'albergues';

    /**
     * @var Shelter
     */
    protected $model;

    /**
     * ShelterRepository constructor.
     * @param Shelter $model
     */
    public function __construct(Shelter $model)
    {
        $this->model = $model;
    }
}
