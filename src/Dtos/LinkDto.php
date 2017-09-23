<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

/**
 * Sheet `OTROS ENLACES`
 *
 * Class LinkDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=1613200397
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable()
 */
class LinkDto
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
    public $description;

    /**
     * @var string
     */
    public $url;
}
