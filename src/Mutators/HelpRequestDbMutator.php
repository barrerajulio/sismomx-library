<?php
namespace CodeandoMexico\Sismomx\Core\Mutators;

use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\HelpRequestDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\HelpRequestDto;

/**
 * Class HelpRequestDbMutator
 * @package CodeandoMexico\Sismomx\Core\Mutators
 * @Injectable(scope="prototype")
 */
class HelpRequestDbMutator implements \JsonSerializable
{
    /**
     * @var HelpRequestDto
     */
    protected $dto;

    /**
     * HelpRequestDbMutator constructor.
     * @param HelpRequestDto $dto
     */
    public function __construct(HelpRequestDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $payload = [
            HelpRequestDictionary::ENCODED_KEY => $this->dto->encodedKey,
            HelpRequestDictionary::URGENCY_LEVEL => $this->dto->urgencyLevel,
            HelpRequestDictionary::BRIGADE_REQUIRED => $this->dto->brigadeRequired,
            HelpRequestDictionary::MOST_IMPORTANT_REQUIRED => $this->dto->mostImportantRequired,
            HelpRequestDictionary::ADMITTED => $this->dto->admitted,
            HelpRequestDictionary::NOT_REQUIRED => $this->dto->notRequired,
            HelpRequestDictionary::ADDRESS => $this->dto->address,
            HelpRequestDictionary::ZONE => $this->dto->zone,
            HelpRequestDictionary::SOURCE => $this->dto->source,
            HelpRequestDictionary::UPDATED_AT => $this->dto->updatedAt,
            HelpRequestDictionary::CREATED_AT => $this->dto->createdAt,
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
