<?php
namespace CodeandoMexico\Sismomx\Core\Repositories\GoogleSheetsApiV4;

use CodeandoMexico\Sismomx\Core\Interfaces\Repositories\HereWeNeedRepositoryInterface;
use CodeandoMexico\Sismomx\Core\Traits\Base\GoogleAuthenticatorTrait;

/**
 * Class HereWeNeedRepositoryGoogleSheetsApiV4
 * @package CodeandoMexico\Sismomx\Core\Repositories\GoogleSheetsApiV4
 */
class HereWeNeedRepositoryGoogleSheetsApiV4 implements HereWeNeedRepositoryInterface
{
    use GoogleAuthenticatorTrait;

    /**
     * @var string
     */
    protected $secretPath;

    /**
     * @var string
     */
    protected $credentialsPath;

    /**
     * @var \Google_Service_Sheets
     */
    protected $service;

    /**
     * HereWeNeedRepositoryGoogleSheetsApiV4 constructor.
     * @param string $secretPath
     * @param string $credentialsPath
     */
    public function __construct($secretPath, $credentialsPath)
    {
        $this->secretPath = $secretPath;
        $this->credentialsPath = $credentialsPath;
    }

    /**
     * Initialize resources and setup base properties
     */
    public function init()
    {
        $this->googleAuthenticator->setCredentialsPath($this->credentialsPath);
        $this->googleAuthenticator->setSecretPath($this->secretPath);
        $this->googleAuthenticator->auth('Init');
        $this->service = new \Google_Service_Sheets($this->googleAuthenticator->googleClient);
    }

    /**
     * @inheritdoc
     */
    public function findAllByRange($styleSheetId, $range, $dimension = 'ROWS')
    {
        $response = $this->service->spreadsheets_values->get(
            $styleSheetId,
            $range,
            [
                'majorDimension' => $dimension
            ]
        );
        return $response->getValues();
    }
}
