<?php
namespace CodeandoMexico\Sismomx\Core\Repositories\Eloquent;

use CodeandoMexico\Sismomx\Core\Models\Eloquent\HelpRequest;

/**
 * Class HelpRequestRepository
 * @package CodeandoMexico\Sismomx\Core\Repositories\Eloquent
 */
class HelpRequestRepository extends BaseRepository
{
    /**
     * Indice enviado en la consulta del API para identificar el repositorio a donde se realizara la consulta
     */
    const REQUEST_FILTER_INDEX = 'urgencias';

    /**
     * @var HelpRequest
     */
    protected $model;

    /**
     * HelpRequestRepository constructor.
     * @param HelpRequest $model
     */
    public function __construct(HelpRequest $model)
    {
        $this->model = $model;
    }
}
