<?php

namespace MPScholten\RequestParser;

class StringParser extends AbstractValueParser
{
    protected function parse($value)
    {
        return (string) $value;
    }

    /**
     * @param string $defaultValue
     * @return string
     */
    public function defaultsTo($defaultValue)
    {
        return parent::defaultsTo($defaultValue);
    }

    /**
     * @throws \Exception
     * @return string
     */
    public function required()
    {
        return parent::required();
    }

    /**
     * @param string $defaultValue
     * @return string
     */
    public function defaultsToIfEmpty($defaultValue)
    {
        if ($this->value === '') {
            return $defaultValue;
        }
        
        return $this->defaultsTo($defaultValue);
    }
}
