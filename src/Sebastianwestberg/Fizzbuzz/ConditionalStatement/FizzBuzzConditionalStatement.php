<?php

namespace Sebastianwestberg\Fizzbuzz\ConditionalStatement;

class FizzBuzzConditionalStatement implements ConditionalStatementInterface
{
    public function matches($input)
    {
        return ($input % 3 === 0 && $input % 5 === 0);
    }

    public function whenTrue()
    {
        return 'FizzBuzz';
    }
}