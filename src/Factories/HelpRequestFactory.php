<?php
namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Abstracts\Factories\FactoryAbstract;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\HelpRequestBuilderInterface;

/**
 * Class HelpRequestFactory
 * @package CodeandoMexico\Sismomx\Core\Factories
 * @Injectable(scope="prototype")
 */
class HelpRequestFactory extends FactoryAbstract
{
    /**
     * HelpRequestFactory constructor.
     * @Inject
     * @param HelpRequestBuilderInterface $builder
     */
    public function __construct(HelpRequestBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
}
