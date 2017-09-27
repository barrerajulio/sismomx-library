<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;
use CodeandoMexico\Sismomx\Core\Presenters\ShelterPresenter;

/**
 * Sheet `ALBERGUES`
 *
 * Class ShelterDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=2108877446
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable(scope="prototype")
 */
class ShelterDto implements BuiltableInterface
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $encodedKey;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $receiving;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $map;

    /**
     * @var string
     */
    public $moreInformation;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var ShelterPresenter
     */
    public $presenter;

    /**
     * ShelterDto constructor.
     * @Inject
     * @param ShelterPresenter $presenter
     */
    public function __construct(ShelterPresenter $presenter)
    {
        $presenter->dto = $this;
        $this->presenter = $presenter;
    }
}
