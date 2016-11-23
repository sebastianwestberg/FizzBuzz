<?php

namespace Sebastianwestberg\Fizzbuzz;

use Sebastianwestberg\Fizzbuzz\ConditionalStatement\ConditionalStatementInterface;

class Fizzbuzz
{
    /**
     * @var $conditionalStatements[]
     */
    private $conditionalStatements;

    /**
     * Fizzbuzz constructor.
     */
    public function __construct()
    {
        $this->conditions = [];
    }

    /**
     * Generates a range of numbers and runs getResult on each one.
     *
     * @param $min
     * @param $max
     * @return array
     */
    public function generate($min, $max)
    {
        $list = [];
        for ($i = $min; $i <= $max; $i++) {
            $list[] = ['#'.$i, $this->getResult($i)];
        }

        return $list;
    }

    /**
     * @param \Sebastianwestberg\Fizzbuzz\ConditionalStatement\ConditionalStatementInterface $conditionalStatement
     */
    public function addConditionalStatement(ConditionalStatementInterface $conditionalStatement)
    {
        $this->conditionalStatements[] = $conditionalStatement;
    }

    /**
     * @param $number Current number to use with condition
     * @return mixed String generated when condition is met, or current iterations number otherwise.
     */
    private function getResult($number)
    {
        foreach ($this->conditionalStatements as $conditionalStatement) {
            /** @var ConditionalStatementInterface $conditionalStatement */
            if ($conditionalStatement->matches(intval($number))) {
                return $conditionalStatement->whenTrue();
            }
        }

        return $number;
    }
}