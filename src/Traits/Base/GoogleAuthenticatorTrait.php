<?php
namespace CodeandoMexico\Sismomx\Core\Traits\Base;

use CodeandoMexico\Sismomx\Core\Base\GoogleAuthenticator;

/**
 * Trait GoogleAuthenticatorTrait
 * @package CodeandoMexico\Sismomx\Core\Traits\Base
 */
trait GoogleAuthenticatorTrait
{
    /**
     * @var GoogleAuthenticator
     */
    public $googleAuthenticator;

    /**
     * @Inject
     * @param GoogleAuthenticator $googleAuthenticator
     */
    public function setGoogleAuthenticator($googleAuthenticator)
    {
        $this->googleAuthenticator = $googleAuthenticator;
    }
}
