<?php
namespace CodeandoMexico\Sismomx\Core\Dtos;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;
use CodeandoMexico\Sismomx\Core\Presenters\LinkPresenter;

/**
 * Sheet `OTROS ENLACES`
 *
 * Class LinkDto
 * @link https://docs.google.com/spreadsheets/d/1e21rEEz89y5hnN4GoqfPVNJ8hQRGOYWMfTjigAuWT8k/edit#gid=1613200397
 * @package CodeandoMexico\Sismomx\Core\Dtos
 * @Injectable()
 */
class LinkDto implements BuiltableInterface
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

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var LinkPresenter
     */
    public $presenter;

    /**
     * LinkDto constructor.
     * @Inject
     * @param LinkPresenter $presenter
     */
    public function __construct(LinkPresenter $presenter)
    {
        $presenter->dto = $this;
        $this->presenter = $presenter;
    }
}
