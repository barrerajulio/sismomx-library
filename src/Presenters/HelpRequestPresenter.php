<?php
namespace CodeandoMexico\Sismomx\Core\Presenters;

use CodeandoMexico\Sismomx\Core\Dtos\HelpRequestDto;

/**
 * Class HelpRequestPresenter
 * @package CodeandoMexico\Sismomx\Core\Presenters
 * @Injectable(scope="prototype")
 */
class HelpRequestPresenter
{
    /**
     * @var HelpRequestDto
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
