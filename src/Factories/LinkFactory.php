<?php
namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Abstracts\Factories\FactoryAbstract;
use CodeandoMexico\Sismomx\Core\Interfaces\Builders\LinkBuilderInterface;

/**
 * Class LinkFactory
 * @package CodeandoMexico\Sismomx\Core\Factories
 * @Injectable(scope="prototype")
 */
class LinkFactory extends FactoryAbstract
{
    /**
     * LinkFactory constructor.
     * @Inject
     * @param LinkBuilderInterface $builder
     */
    public function __construct(LinkBuilderInterface $builder)
    {
        $this->builder = $builder;
    }
}
