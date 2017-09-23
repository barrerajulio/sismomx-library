<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

/**
 * Class ShelterDto
 * @package CodeandoMexico\Sismomx\Core\Dtos
 */
class ShelterDto
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
    public $moreInfo;

    /**
     * @var string
     */
    public $updatedAt;
}
