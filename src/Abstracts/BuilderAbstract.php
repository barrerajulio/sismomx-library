<?php
namespace CodeandoMexico\Sismomx\Core\Abstracts;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuilderInterface;
use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\BuiltableInterface;
use CodeandoMexico\Sismomx\Core\Traits\Base\ValuesTrait;

/**
 * Class CollectionCenterBuilderAbstract
 * @package CodeandoMexico\Sismomx\Core\Abstracts
 */
abstract class BuilderAbstract implements BuilderInterface
{
    use ValuesTrait;

    /**
     * @var BuiltableInterface
     */
    protected $builtable;

    /**
     * @inheritdoc
     */
    public function build()
    {
        $this->internalBuild();
    }

    /**
     * @return self
     */
    abstract public function internalBuild();

    /**
     * @return BuiltableInterface
     */
    public function getBuiltable()
    {
        return $this->builtable;
    }
}
