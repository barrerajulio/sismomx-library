<?php
namespace CodeandoMexico\Sismomx\Core\Builders;

use CodeandoMexico\Sismomx\Core\Abstracts\BuilderAbstract;
use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\SpecificOfferingsDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\SpecificOfferingsDto;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\SpecificOfferingsBuilderInterface;

/**
 * Class SpecificOfferingsBuilder
 * @package CodeandoMexico\Sismomx\Core\Builders
 */
class SpecificOfferingsBuilder extends BuilderAbstract implements SpecificOfferingsBuilderInterface
{
    /**
     * @var SpecificOfferingsDto
     */
    protected $builtable;

    /**
     * @inheritdoc
     */
    public function internalBuild()
    {
        $this->builtable->id = $this->values->getValue(SpecificOfferingsDictionary::ID);
        $this->builtable->moreInformation = $this->values->getValue(SpecificOfferingsDictionary::MORE_INFORMATION);
        $this->builtable->encodedKey = $this->values->getValue(SpecificOfferingsDictionary::ENCODED_KEY);
        $this->builtable->contact = $this->values->getValue(SpecificOfferingsDictionary::CONTACT);
        $this->builtable->notes = $this->values->getValue(SpecificOfferingsDictionary::NOTES);
        $this->builtable->expiresAt = $this->values->getValue(SpecificOfferingsDictionary::EXPIRES_AT);
        $this->builtable->offeringDetails = $this->values->getValue(SpecificOfferingsDictionary::OFFERING_DETAILS);
        $this->builtable->offeringFrom = $this->values->getValue(SpecificOfferingsDictionary::OFFERING_FROM);
        $this->builtable->updatedAt = $this->values->getValue(SpecificOfferingsDictionary::UPDATED_AT);
        $this->builtable->createdAt = $this->values->getValue(SpecificOfferingsDictionary::CREATED_AT);
        return $this;
    }
}
