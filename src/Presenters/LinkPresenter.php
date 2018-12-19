<?php
namespace CodeandoMexico\Sismomx\Core\Presenters;

use CodeandoMexico\Sismomx\Core\Dtos\LinkDto;

/**
 * Class LinkPresenter
 * @package CodeandoMexico\Sismomx\Core\Presenters
 * @Injectable(scope="prototype")
 */
class LinkPresenter
{
    /**
     * @var LinkDto
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
