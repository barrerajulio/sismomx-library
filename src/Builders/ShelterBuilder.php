<?php
namespace CodeandoMexico\Sismomx\Core\Builders;

use CodeandoMexico\Sismomx\Core\Abstracts\Builders\BuilderAbstract;
use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\ShelterDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\ShelterDto;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\ShelterBuilderInterface;

/**
 * Class ShelterBuilder
 * @package CodeandoMexico\Sismomx\Core\Builders
 * @Injectable(scope="prototype")
 */
class ShelterBuilder extends BuilderAbstract implements ShelterBuilderInterface
{
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
        $this->builtable->encodedKey = $this->values->getValue(ShelterDictionary::ENCODED_KEY);
        $this->builtable->address = $this->values->getValue(ShelterDictionary::ADDRESS);
        $this->builtable->moreInformation = $this->values->getValue(ShelterDictionary::MORE_INFORMATION);
        $this->builtable->location = $this->values->getValue(ShelterDictionary::LOCATION);
        $this->builtable->map = $this->values->getValue(ShelterDictionary::MAP);
        $this->builtable->receiving = $this->values->getValue(ShelterDictionary::RECEIVING);
        $this->builtable->updatedAt = $this->values->getValue(ShelterDictionary::UPDATED_AT);
        $this->builtable->createdAt = $this->values->getValue(ShelterDictionary::CREATED_AT);
        return $this;
    }
}
