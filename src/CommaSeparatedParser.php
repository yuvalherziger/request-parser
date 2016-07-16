<?php

namespace MPScholten\RequestParser;

class CommaSeparated extends AbstractValueParser
{
    /**
     * CommaSeparated constructor.
     * @param callable $exceptionFactory
     * @param string $name
     * @param string $value
     * @param AbstractValueParser|BooleanParser|DateTimeParser|FloatParser|IntParser|JsonParser|StringParser|YesNoBooleanParser $type
     */
    public function __construct(callable $exceptionFactory, $name, $value, $type)
    {
        parent::__construct($exceptionFactory, $name, $value);
        if ($type instanceof StringParser) {

        }
    }

    protected function parse($value)
    {
        if (strtoupper($value) === 'TRUE' || $value === '1') {
            return true;
        }
        if (strtoupper($value) === 'FALSE' || $value === '0') {
            return false;
        }
        return null;
    }

    /**
     * @param boolean $defaultValue
     * @return boolean
     */
    public function defaultsTo($defaultValue)
    {
        return parent::defaultsTo($defaultValue);
    }

    /**
     * @throws \Exception
     * @return boolean
     */
    public function required()
    {
        return parent::required();
    }
}
