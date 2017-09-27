<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;
use CodeandoMexico\Sismomx\Core\Presenters\HelpRequestPresenter;

/**
 * Sheet `URGENCIAS Y SOLICITUDES POR ZON`
 *
 * Class HelpRequestDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=1110984471
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable(scope="prototype")
 */
class HelpRequestDto implements BuiltableInterface
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
    public $urgencyLevel;

    /**
     * @var string
     */
    public $brigadeRequired;

    /**
     * @var string
     */
    public $mostImportantRequired;

    /**
     * @var string
     */
    public $admitted;

    /**
     * @var string
     */
    public $notRequired;

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
    public $source;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var HelpRequestPresenter
     */
    public $presenter;

    /**
     * HelpRequestDto constructor.
     * @Inject
     * @param HelpRequestPresenter $presenter
     */
    public function __construct(HelpRequestPresenter $presenter)
    {
        $presenter->dto = $this;
        $this->presenter = $presenter;
    }
}
