<?php
namespace CodeandoMexico\Sismomx\Core\Presenters;

use CodeandoMexico\Sismomx\Core\Dtos\ShelterDto;

/**
 * Class ShelterPresenter
 * @package CodeandoMexico\Sismomx\Core\Presenters
 * @Injectable(scope="prototype")
 */
class ShelterPresenter
{
    /**
     * @var ShelterDto
     */
    public $dto;

    /**
     * @return bool
     */
    public function isValidRecord()
    {
        if (empty($this->dto->address) === true) {
            return false;
        }
        return true;
    }
}
