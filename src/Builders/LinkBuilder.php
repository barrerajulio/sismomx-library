<?php
namespace CodeandoMexico\Sismomx\Core\Builders;

use CodeandoMexico\Sismomx\Core\Abstracts\BuilderAbstract;
use CodeandoMexico\Sismomx\Core\Dictionaries\GoogleSheetsApiV4\LinkDictionary;
use CodeandoMexico\Sismomx\Core\Dtos\LinkDto;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\LinkBuilderInterface;

/**
 * Class LinkBuilder
 * @package CodeandoMexico\Sismomx\Core\Builders
 * @Injectable(scope="prototype")
 */
class LinkBuilder extends BuilderAbstract implements LinkBuilderInterface
{
    /**
     * @var LinkDto
     */
    protected $builtable;

    /**
     * @inheritdoc
     */
    public function internalBuild()
    {
        $this->builtable->id = $this->values->getValue(LinkDictionary::ID);
        $this->builtable->description = $this->values->getValue(LinkDictionary::DESCRIPTION);
        $this->builtable->url = $this->values->getValue(LinkDictionary::URL);
        $this->builtable->encodedKey = $this->values->getValue(LinkDictionary::ENCODED_KEY);
        $this->builtable->createdAt = $this->values->getValue(LinkDictionary::CREATED_AT);
        return $this;
    }
}
