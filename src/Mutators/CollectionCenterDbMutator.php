<?php
namespace CodeandoMexico\Sismomx\Core\Mutators;

use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\CollectionCenterDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\CollectionCenterDto;

/**
 * Class CollectionCenterDbMutator
 * @package CodeandoMexico\Sismomx\Core\Mutators
 * @Injectable(scope="prototype")
 */
class CollectionCenterDbMutator implements \JsonSerializable
{
    /**
     * @var CollectionCenterDto
     */
    protected $dto;

    /**
     * CollectionCenterDbMutator constructor.
     * @param CollectionCenterDto $dto
     */
    public function __construct(CollectionCenterDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            CollectionCenterDictionary::ENCODED_KEY => $this->dto->encodedKey,
            CollectionCenterDictionary::URGENCY_LEVEL => $this->dto->urgencyLevel,
            CollectionCenterDictionary::LOCATION => $this->dto->location,
            CollectionCenterDictionary::REQUIREMENTS_DETAILS => $this->dto->requirementsDetails,
            CollectionCenterDictionary::ADDRESS => $this->dto->address,
            CollectionCenterDictionary::ZONE => $this->dto->zone,
            CollectionCenterDictionary::MAP => $this->dto->map,
            CollectionCenterDictionary::MORE_INFORMATION => $this->dto->moreInformation,
            CollectionCenterDictionary::CONTACT => $this->dto->contact,
            CollectionCenterDictionary::UPDATED_AT => $this->dto->updatedAt,
            CollectionCenterDictionary::CREATED_AT => $this->dto->createdAt,
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
