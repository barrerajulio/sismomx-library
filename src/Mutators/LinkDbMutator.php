<?php
namespace CodeandoMexico\Sismomx\Core\Mutators;

use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\LinkDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\LinkDto;

/**
 * Class LinkDbMutator
 * @package CodeandoMexico\Sismomx\Core\Mutators
 * @Injectable(scope="prototype")
 */
class LinkDbMutator implements \JsonSerializable
{
    /**
     * @var LinkDto
     */
    protected $dto;

    /**
     * LinkDbMutator constructor.
     * @param LinkDto $dto
     */
    public function __construct(LinkDto $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $payload = [
            LinkDictionary::ENCODED_KEY => $this->dto->encodedKey,
            LinkDictionary::DESCRIPTION => $this->dto->description,
            LinkDictionary::URL => $this->dto->url,
            LinkDictionary::CREATED_AT => $this->dto->createdAt,
        ];
        if (empty(LinkDictionary::CREATED_AT) === true) {
            $payload[LinkDictionary::CREATED_AT] = date('Y-m-d H:i:s');
        }
        if (empty($payload[LinkDictionary::ENCODED_KEY]) === true) {
            $payload[LinkDictionary::ENCODED_KEY] = hash('sha256',json_encode($payload));
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
