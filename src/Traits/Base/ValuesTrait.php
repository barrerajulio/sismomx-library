<?php
namespace CodeandoMexico\Sismomx\Core\Traits\Base;

use CodeandoMexico\Sismomx\Core\Base\Values;

/**
 * Trait ValuesTrait
 * @package CodeandoMexico\Sismomx\Core\Traits
 */
trait ValuesTrait
{
    /**
     * @var Values
     */
    public $values;

    /**
     * @Inject
     * @param Values $values
     */
    public function setValues(Values $values)
    {
        $this->values = $values;
    }
}
