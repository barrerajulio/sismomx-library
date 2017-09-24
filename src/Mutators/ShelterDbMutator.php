<?php
namespace CodeandoMexico\Sismomx\Core\Mutators;

use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\ShelterDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\ShelterDto;

/**
 * Class ShelterDbMutator
 * @package CodeandoMexico\Sismomx\Core\Mutators
 * @Injectable(scope="prototype")
 */
class ShelterDbMutator implements \JsonSerializable
{
    /**
     * @var ShelterDto
     */
    protected $dto;

    /**
     * ShelterDbMutator constructor.
     * @param ShelterDto $dto
     */
    public function __construct(ShelterDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $payload = [
            ShelterDictionary::ENCODED_KEY => $this->dto->encodedKey,
            ShelterDictionary::LOCATION => $this->dto->location,
            ShelterDictionary::RECEIVING  => $this->dto->receiving,
            ShelterDictionary::ADDRESS => $this->dto->address,
            ShelterDictionary::ZONE => $this->dto->zone,
            ShelterDictionary::MAP => $this->dto->map,
            ShelterDictionary::MORE_INFORMATION => $this->dto->moreInformation,
            ShelterDictionary::UPDATED_AT => $this->dto->updatedAt,
            ShelterDictionary::CREATED_AT => $this->dto->createdAt,
        ];
        if (empty(ShelterDictionary::CREATED_AT) === true) {
            $payload[ShelterDictionary::CREATED_AT] = date('Y-m-d H:i:s');
        }
        if (empty($payload[ShelterDictionary::ENCODED_KEY]) === true) {
            $payload[ShelterDictionary::ENCODED_KEY] = hash('sha256',json_encode($payload));
        }
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
