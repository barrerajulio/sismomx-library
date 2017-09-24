<?php
namespace CodeandoMexico\Sismomx\Core\Mutators;

use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\SpecificOfferingsDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\SpecificOfferingsDto;

/**
 * Class SpecificOfferingsDbMutator
 * @package CodeandoMexico\Sismomx\Core\Mutators
 * @Injectable(scope="prototype")
 */
class SpecificOfferingsDbMutator implements \JsonSerializable
{
    /**
     * @var SpecificOfferingsDto
     */
    protected $dto;

    public function __construct(SpecificOfferingsDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $payload = [
            SpecificOfferingsDictionary::ENCODED_KEY => $this->dto->encodedKey,
            SpecificOfferingsDictionary::OFFERING_FROM => $this->dto->offeringFrom,
            SpecificOfferingsDictionary::OFFERING_DETAILS => $this->dto->offeringDetails,
            SpecificOfferingsDictionary::CONTACT => $this->dto->contact,
            SpecificOfferingsDictionary::NOTES => $this->dto->notes,
            SpecificOfferingsDictionary::MORE_INFORMATION => $this->dto->moreInformation,
            SpecificOfferingsDictionary::UPDATED_AT => $this->dto->updatedAt,
            SpecificOfferingsDictionary::CREATED_AT => $this->dto->createdAt,
            SpecificOfferingsDictionary::EXPIRES_AT => $this->dto->expiresAt,
        ];
        return $payload;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
