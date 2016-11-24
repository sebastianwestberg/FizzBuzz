<?php

namespace Sebastianwestberg\Fizzbuzz\Tests;

use PHPUnit\Framework\TestCase;
use Sebastianwestberg\Fizzbuzz\ConditionalStatement\BuzzConditionalStatement;
use Sebastianwestberg\Fizzbuzz\ConditionalStatement\FizzBuzzConditionalStatement;
use Sebastianwestberg\Fizzbuzz\ConditionalStatement\FizzConditionalStatement;
use Sebastianwestberg\Fizzbuzz\Fizzbuzz;

class FizzbuzzTest extends TestCase
{
    public function testGenerateListCount()
    {
        $fizzbuzz = new Fizzbuzz();
        $fizzbuzz->addConditionalStatement(new FizzBuzzConditionalStatement());

        $this->assertCount(20, $fizzbuzz->generate(1, 20));
    }

    public function testFizz()
    {
        $fizzbuzz = new Fizzbuzz();
        $fizzbuzz->addConditionalStatement(new FizzConditionalStatement());

        $this->assertEquals([
          ['#1', 1],
          ['#2', 2],
          ['#3', 'Fizz'],
          ['#4', 4],
          ['#5', 5],
          ['#6', 'Fizz'],
          ['#7', 7],
          ['#8', 8],
          ['#9', 'Fizz'],
          ['#10', 10]
        ], $fizzbuzz->generate(1, 10));
    }

    public function testFizzAndBuzz()
    {
        $fizzbuzz = new Fizzbuzz();
        $fizzbuzz->addConditionalStatement(new FizzConditionalStatement());
        $fizzbuzz->addConditionalStatement(new BuzzConditionalStatement());

        $this->assertEquals([
          ['#1', 1],
          ['#2', 2],
          ['#3', 'Fizz'],
          ['#4', 4],
          ['#5', 'Buzz'],
          ['#6', 'Fizz'],
          ['#7', 7],
          ['#8', 8],
          ['#9', 'Fizz'],
          ['#10', 'Buzz']
        ], $fizzbuzz->generate(1, 10));
    }

    public function testFizzAndBuzzAndFizzBuzz()
    {
        $fizzbuzz = new Fizzbuzz();
        $fizzbuzz->addConditionalStatement(new FizzBuzzConditionalStatement());
        $fizzbuzz->addConditionalStatement(new FizzConditionalStatement());
        $fizzbuzz->addConditionalStatement(new BuzzConditionalStatement());

        $this->assertEquals([
          ['#1', 1],
          ['#2', 2],
          ['#3', 'Fizz'],
          ['#4', 4],
          ['#5', 'Buzz'],
          ['#6', 'Fizz'],
          ['#7', 7],
          ['#8', 8],
          ['#9', 'Fizz'],
          ['#10', 'Buzz'],
          ['#11', 11],
          ['#12', 'Fizz'],
          ['#13', 13],
          ['#14', 14],
          ['#15', 'FizzBuzz']
        ], $fizzbuzz->generate(1, 15));
    }
}