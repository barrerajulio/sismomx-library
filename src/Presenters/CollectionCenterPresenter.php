<?php
/**
 * Created by PhpStorm.
 * User: conlanacapital
 * Date: 26/09/17
 * Time: 23:04
 */

namespace CodeandoMexico\Sismomx\Core\Presenters;

use CodeandoMexico\Sismomx\Core\Dtos\CollectionCenterDto;

/**
 * Class CollectionCenterPresenter
 * @package CodeandoMexico\Sismomx\Core\Presenters
 * @Injectable(scope="prototype")
 */
class CollectionCenterPresenter
{
    /**
     * @var CollectionCenterDto
     */
    public $dto;

    /**
     * @return bool
     */
    public function isValidRecord()
    {
        return true;
    }
}
