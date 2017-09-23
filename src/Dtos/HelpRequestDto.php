<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

/**
 * Class HelpRequestDto
 * @package CodeandoMexico\Sismomx\Core\Dtos
 */
class HelpRequestDto
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
}
