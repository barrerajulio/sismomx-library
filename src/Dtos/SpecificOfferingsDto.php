<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

/**
 * Class SpecificOfferingsDto
 * @package CodeandoMexico\Sismomx\Core\Dtos
 */
class SpecificOfferingsDto
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
}
