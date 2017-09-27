<?php
namespace CodeandoMexico\Sismomx\Core\Presenters;

use CodeandoMexico\Sismomx\Core\Dtos\SpecificOfferingsDto;

/**
 * Class SpecificOfferingsPresenter
 * @package CodeandoMexico\Sismomx\Core\Presenters
 */
class SpecificOfferingsPresenter
{
    /**
     * @var SpecificOfferingsDto
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
