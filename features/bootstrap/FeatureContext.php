<?php

use Sebastianwestberg\Fizzbuzz\Fizzbuzz;
use Behat\Gherkin\Node\TableNode;

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';

class FeatureContext implements \Behat\Behat\Context\SnippetAcceptingContext
{

    /**
     * @var \Sebastianwestberg\Fizzbuzz\Fizzbuzz
     */
    private $fizzbuzz;

    /**
     * @var array Containing the resulting rows
     */
    private $list;

    /**
     * FeatureContext constructor.
     */
    public function __construct()
    {
        $this->fizzbuzz = new Fizzbuzz();
    }

    /**
     * @Given the following conditional statements:
     * @param \Behat\Gherkin\Node\TableNode $rows
     * @throws \Exception
     */
    public function theFollowingConditionalStatements(TableNode $rows)
    {
        foreach ($rows as $row) {
            $conditionalStatement = 'Sebastianwestberg\Fizzbuzz\ConditionalStatement\\'.$row['condition'].'ConditionalStatement';

            if (!class_exists($conditionalStatement)) {
                throw new Exception($conditionalStatement.' does not exist.');
            }
            $this->fizzbuzz->addConditionalStatement(new $conditionalStatement());
        }
    }

    /**
     * @Given the input range from :mix to :max
     * @param $min Number to start from
     * @param $max Number to end at
     */
    public function theInputRangeFromTo($min, $max) {
        $this->list = $this->fizzbuzz->generate($min, $max);
    }

    /**
     * @Then it should return:
     * @param \Behat\Gherkin\Node\TableNode $table
     */
    public function itShouldReturn(TableNode $table)
    {
        array_unshift($this->list, ['#', 'message']);
        $result = new TableNode($this->list);

        assertEquals($table->getRows(), $result->getRows());
    }
}