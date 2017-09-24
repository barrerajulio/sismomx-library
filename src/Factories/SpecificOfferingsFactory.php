<?php
namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Abstracts\Factories\FactoryAbstract;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\SpecificOfferingsBuilderInterface;

/**
 * Class SpecificOfferingsFactory
 * @Inject
 * @package CodeandoMexico\Sismomx\Core\Factories
 */
class SpecificOfferingsFactory extends FactoryAbstract
{
    /**
     * SpecificOfferingsFactory constructor.
     * @Inject
     * @param SpecificOfferingsBuilderInterface $builder
     */
    public function __construct(SpecificOfferingsBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
}
