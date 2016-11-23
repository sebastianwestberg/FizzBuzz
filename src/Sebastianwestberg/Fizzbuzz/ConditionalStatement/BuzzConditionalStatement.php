<?php

namespace Sebastianwestberg\Fizzbuzz\ConditionalStatement;

class BuzzConditionalStatement implements ConditionalStatementInterface
{
    public function matches($input)
    {
        return $input % 5 === 0;
    }

    public function whenTrue()
    {
        return 'Buzz';
    }
}