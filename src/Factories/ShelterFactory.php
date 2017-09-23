<?php
namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Abstracts\Factories\FactoryAbstract;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\ShelterBuilderInterface;

/**
 * Class ShelterFactory
 * @package CodeandoMexico\Sismomx\Core\Factories
 * @Injectable(scope="prototype")
 */
class ShelterFactory extends FactoryAbstract
{
    /**
     * ShelterFactory constructor.
     * @Inject
     * @param ShelterBuilderInterface $builder
     */
    public function __construct(ShelterBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
}
