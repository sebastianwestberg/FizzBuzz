<?php

namespace Sebastianwestberg\Fizzbuzz\ConditionalStatement;

interface ConditionalStatementInterface
{
    /**
     * @param $input Input to build a dynamic condition
     * @return boolean
     */
    public function matches($input);

    /**
     * @return string Message when the condition is met
     */
    public function whenTrue();
}