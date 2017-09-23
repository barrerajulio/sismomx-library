<?php
namespace CodeandoMexico\Sismomx\Core\Interfaces\Capabilities;

/**
 * Interface BuilderInterface
 * @package CodeandoMexico\Sismomx\Core\Interfaces\Capabilities
 */
interface BuilderInterface extends ValueableInterface
{
    /**
     * @return self
     */
    public function build();

    /**
     * @return BuiltableInterface
     */
    public function getBuiltable();
}
