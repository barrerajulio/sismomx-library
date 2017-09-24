<?php
namespace CodeandoMexico\Sismomx\Core\Builders;

use CodeandoMexico\Sismomx\Core\Abstracts\Builders\BuilderAbstract;
use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\ShelterDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\ShelterDto;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\ShelterBuilderInterface;
use CodeandoMexico\Sismomx\Core\Traits\Base\DatesHelper;

/**
 * Class ShelterBuilder
 * @package CodeandoMexico\Sismomx\Core\Builders
 * @Injectable(scope="prototype")
 */
class ShelterBuilder extends BuilderAbstract implements ShelterBuilderInterface
{
    use DatesHelper;
    /**
     * @var ShelterDto
     */
    protected $builtable;

    /**
     * ShelterBuilder constructor.
     * @Inject
     * @param ShelterDto $dto
     */
    public function __construct(ShelterDto $dto)
    {
        $this->builtable = $dto;
    }

    /**
     * @inheritdoc
     */
    public function internalBuild()
    {
        $this->builtable->id = $this->values->getValue(ShelterDictionary::ID);
        $this->builtable->zone = $this->values->getValue(ShelterDictionary::ZONE);
        $this->builtable->address = $this->values->getValue(ShelterDictionary::ADDRESS);
        $this->builtable->moreInformation = $this->values->getValue(ShelterDictionary::MORE_INFORMATION);
        $this->builtable->location = $this->values->getValue(ShelterDictionary::LOCATION);
        $this->builtable->map = $this->values->getValue(ShelterDictionary::MAP);
        $this->builtable->receiving = $this->values->getValue(ShelterDictionary::RECEIVING);
        $this->builtable->updatedAt = $this->stringToDate(
            $this->values->getValue(ShelterDictionary::UPDATED_AT),
            'Y/d/m H:i'
        );
        $this->builtable->createdAt = $this->stringToDate(
            $this->values->getValue(ShelterDictionary::UPDATED_AT),
            'Y-m-d H:i:s',
            'now'
        );
        $this->builtable->encodedKey = hash('sha256',json_encode($this->values->getValues()));
        return $this;
    }
}
