<?php
namespace CodeandoMexico\Sismomx\Core\Traits\Base;

/**
 * Trait GoogleClientTrait
 * @package CodeandoMexico\Sismomx\Core\Traits\Base
 * @Injectable()
 */
trait GoogleClientTrait
{
    /**
     * @var \Google_Client
     */
    public $googleClient;

    /**
     * @Inject
     * @param \Google_Client $client
     */
    public function setGoogleClient(\Google_Client $client)
    {
        $this->googleClient = $client;
    }
}
