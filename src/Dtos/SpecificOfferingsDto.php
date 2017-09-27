<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;
use CodeandoMexico\Sismomx\Core\Presenters\SpecificOfferingsPresenter;

/**
 * Sheet `OFRECIMIENTOS ESPECÍFICOS`
 *
 * Class SpecificOfferingsDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=136599449
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable(scope="prototype")
 */
class SpecificOfferingsDto implements BuiltableInterface
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
     * (Quién ofrece?)
     * @var string
     */
    public $offeringFrom;


    /**
     * (Ofrecen)
     * @var string
     */
    public $offeringDetails;


    /**
     * (Contacto)
     * @var string
     */
    public $contact;


    /**
     * (Detalles)
     * @var string
     */
    public $notes;


    /**
     * (Más información)
     * @var string
     */
    public $moreInformation;


    /**
     * (Fecha de actualización)
     * @var string
     */
    public $updatedAt;

    /**
     * (Caduca)
     * @var string
     */
    public $expiresAt;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var SpecificOfferingsPresenter
     */
    public $presenter;

    /**
     * SpecificOfferingsDto constructor.
     * @Inject
     * @param SpecificOfferingsPresenter $presenter
     */
    public function __construct(SpecificOfferingsPresenter $presenter)
    {
        $presenter->dto = $this;
        $this->presenter = $presenter;
    }
}
