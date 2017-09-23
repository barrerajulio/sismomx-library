<?php
namespace CodeandoMexico\Sismomx\Core\Base;

use CodeandoMexico\Sismomx\Core\Interfaces\Capabilities\ValueableInterface;

/**
 * Class Values
 * @package CodeandoMexico\Sismomx\Core\Base
 */
class Values implements ValueableInterface
{
    /**
     * @inheritdoc
     */
    protected $values = [];

    /**
     * @inheritdoc
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @inheritdoc
     */
    public function setValues(array $values)
    {
        $this->values = $values;
    }

    /**
     * @inheritdoc
     */
    public function getValue($key, $defaultValue = null)
    {
        if (array_key_exists($key, $this->values) === false) {
            if ($defaultValue !== null) {
                return $defaultValue;
            }
            return null;
        }
        return $this->values[$key];
    }
}
