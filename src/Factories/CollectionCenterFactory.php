<?php
namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Abstracts\Factories\FactoryAbstract;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\CollectionCenterBuilderInterface;

/**
 * Class CollectionCenterFactory
 * @package CodeandoMexico\Sismomx\Core\Factories
 * @Injectable(scope="prototype")
 */
class CollectionCenterFactory extends FactoryAbstract
{
    /**
     * CollectionCenterFactory constructor.
     * @Inject
     * @param CollectionCenterBuilderInterface $builder
     */
    public function __construct(CollectionCenterBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
}
