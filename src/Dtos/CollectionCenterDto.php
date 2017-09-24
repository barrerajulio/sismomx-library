<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;

/**
 * Sheet `CENTROS DE ACOPIO`
 *
 * Class CollectionCenterDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=578362632
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable(scope="prototype")
 */
class CollectionCenterDto implements BuiltableInterface
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
    public $location;

    /**
     * @var string
     */
    public $requirementsDetails;

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
    public $contact;

    /**
     * @var \DateTime
     */
    public $updatedAt;

    /**
     * @var \DateTime
     */
    public $createdAt;
}
