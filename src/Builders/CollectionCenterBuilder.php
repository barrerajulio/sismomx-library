<?php
namespace CodeandoMexico\Sismomx\Core\Builders;

use CodeandoMexico\Sismomx\Core\Abstracts\Builders\BuilderAbstract;
use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\CollectionCenterDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\CollectionCenterDto;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\CollectionCenterBuilderInterface;

/**
 * Class CollectionCenterBuilder
 * @package CodeandoMexico\Sismomx\Core\Builders
 * @Injectable(scope="prototype")
 */
class CollectionCenterBuilder extends BuilderAbstract implements CollectionCenterBuilderInterface
{
    /**
     * @var CollectionCenterDto
     */
    protected $builtable;

    /**
     * CollectionCenterBuilder constructor.
     * @Inject
     * @param CollectionCenterDto $dto
     */
    public function __construct(CollectionCenterDto $dto)
    {
        $this->builtable = $dto;
    }

    /**
     * @inheritdoc
     */
    public function internalBuild()
    {
        $this->builtable->id = $this->values->getValue(CollectionCenterDictionary::ID);
        $this->builtable->map = $this->values->getValue(CollectionCenterDictionary::MAP);
        $this->builtable->encodedKey = $this->values->getValue(CollectionCenterDictionary::ENCODED_KEY);
        $this->builtable->address = $this->values->getValue(CollectionCenterDictionary::ADDRESS);
        $this->builtable->contact = $this->values->getValue(CollectionCenterDictionary::CONTACT);
        $this->builtable->location = $this->values->getValue(CollectionCenterDictionary::LOCATION);
        $this->builtable->moreInformation = $this->values->getValue(CollectionCenterDictionary::MORE_INFORMATION);
        $this->builtable->requirementsDetails = $this->values->getValue(
            CollectionCenterDictionary::REQUIREMENTS_DETAILS
        );
        $this->builtable->urgencyLevel = $this->values->getValue(CollectionCenterDictionary::URGENCY_LEVEL);
        $this->builtable->zone = $this->values->getValue(CollectionCenterDictionary::ZONE);
        $this->builtable->updatedAt = $this->values->getValue(CollectionCenterDictionary::UPDATED_AT);
        $this->builtable->createdAt = $this->values->getValue(CollectionCenterDictionary::CREATED_AT);
        return $this;
    }
}
