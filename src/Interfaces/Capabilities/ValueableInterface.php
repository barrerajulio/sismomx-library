<?php
namespace CodeandoMexico\Sismomx\Core\Interfaces\Capabilities;

use CodeandoMexico\Sismomx\Core\Base\Values;

/**
 * Interface ValueableInterface
 * @package CodeandoMexico\Sismomx\Core\Interfaces\Capabilities
 */
interface ValueableInterface
{
    /**
     * @param Values $values
     * @return mixed
     */
    public function setValues(Values $values);
}
