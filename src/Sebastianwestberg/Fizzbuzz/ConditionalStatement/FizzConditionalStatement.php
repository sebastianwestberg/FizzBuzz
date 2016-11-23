<?php

namespace Sebastianwestberg\Fizzbuzz\ConditionalStatement;

class FizzConditionalStatement implements ConditionalStatementInterface
{
    public function matches($input)
    {
        return $input % 3 === 0;
    }

    public function whenTrue()
    {
        return 'Fizz';
    }
}