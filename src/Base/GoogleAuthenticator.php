<?php
namespace CodeandoMexico\Sismomx\Core\Base;

use CodeandoMexico\Sismomx\Core\Traits\Base\GoogleClientTrait;

/**
 * Class GoogleAuthenticator
 * @package CodeandoMexico\Sismomx\Core\Base
 * @Injectable(scope="prototype")
 */
class GoogleAuthenticator
{
    use GoogleClientTrait;

    /**
     * @var string
     */
    protected $secretPath;
    /**
     * @var string
     */
    protected $credentialsPath;

    /**
     * @var string
     */
    public $accessType = 'offline';

    /**
     * @var array
     */
    public $scopes = [
        \Google_Service_Sheets::SPREADSHEETS_READONLY
    ];

    /**
     * GoogleAuthenticator constructor.
     * @param string $secretPath
     * @param string $credentialsPath
     */
    public function __construct($secretPath, $credentialsPath)
    {
        $this->setSecretPath($secretPath);
        $this->setCredentialsPath($credentialsPath);
    }

    /**
     * @param string $appName
     * @return \Google_Client
     */
    public function auth($appName)
    {
        $this->configure($appName);
        return $this->googleClient;
    }

    /**
     * @param string $appName
     */
    public function configure($appName)
    {
        $this->googleClient->setAuthConfig($this->secretPath);
        $this->googleClient->setApplicationName($appName);
        $this->googleClient->setAccessType($this->accessType);
        $this->googleClient->setScopes($this->scopes);
        $this->googleClient->setAccessToken($this->getAccessToken());
    }

    /**
     * @param string $secretPath
     */
    public function setSecretPath($secretPath)
    {
        $this->secretPath = $secretPath;
    }

    /**
     * @param string $credentialsPath
     */
    public function setCredentialsPath($credentialsPath)
    {
        $this->credentialsPath = $this->expandHomeDirectory($credentialsPath);
    }

    /**
     * @return string
     */
    protected function expandHomeDirectory($path) {
        $homeDirectory = getenv('HOME');
        if (empty($homeDirectory) === true) {
            $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
        }
        return str_replace('~', realpath($homeDirectory), $path);
    }

    /**
     * @return array|mixed
     */
    protected function getAccessToken()
    {
        if (file_exists($this->credentialsPath) === true) {
            return json_decode(file_get_contents($this->credentialsPath), true);
        }
        $authUrl = $this->googleClient->createAuthUrl();
        printf('Open link in your browser:\n%s\n', $authUrl);
        print 'Ingresa código de verificación: ';
        $authCode = trim(fgets(STDIN));
        $accessToken = $this->googleClient->fetchAccessTokenWithAuthCode($authCode);
        $this->storeAccessToken($accessToken);
        return $accessToken;
    }

    /**
     * @param array $accessToken
     * @return bool|int
     */
    protected function storeAccessToken(array $accessToken)
    {
        if(file_exists(dirname($this->credentialsPath)) === false) {
            mkdir(dirname($this->credentialsPath), 0700, true);
        }
        return file_put_contents($this->credentialsPath, json_encode($accessToken));
    }
}
