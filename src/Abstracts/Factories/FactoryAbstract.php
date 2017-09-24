<?php
namespace CodeandoMexico\Sismomx\Core\Abstracts\Factories;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuilderInterface;
use CodeandoMexico\Sismomx\Core\Traits\Base\ValuesTrait;

class FactoryAbstract
{
    use ValuesTrait;

    /**
     * @var BuilderInterface
     */
    protected $builder;

    /**
     * @inheritdoc
     */
    public function make()
    {
        $this->builder->setValues($this->values);
        $this->builder->build();
        return $this->builder->getBuiltable();
    }
}
