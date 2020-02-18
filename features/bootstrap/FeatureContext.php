<?php

use Behat\Behat\Context\Context;
use Kata\Stack;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected ?Stack $stack;

    /**
     * @Given /^an empty stack$/
     * @Given /^an empty stack of size (\d+)$/
     * @param int $stackSize
     */
    public function anEmptyStack($stackSize = 10)
    {
        $this->stack = new Stack($stackSize);
    }

    /**
     * @Then /^the size of the stack is (\d+)$/
     */
    public function theSizeOfTheStackIs($expectedSize)
    {
        TestCase::assertEquals($expectedSize, $this->stack->getSize());
    }

    /**
     * @Then /^the current position is (\d+)$/
     */
    public function theCurrentPositionIs($expectedPosition)
    {
        TestCase::assertEquals($expectedPosition, $this->stack->getPosition());
    }

    /**
     * @When /^I insert the element "([^"]*)"$/
     * @Then /^I insert the element "([^"]*)" and expect an exception with message "([^"]*)"$/
     */
    public function iInsertTheElement($element, $expectedExceptionMessage = '')
    {
        try {
            $this->stack->push($element);
        } catch (Exception $e) {
            if (empty($e)) {
                throw $e;
            }
            TestCase::assertEquals($expectedExceptionMessage, $e->getMessage());
        }
    }

    /**
     * @Then /^I pull the element "([^"]*)"$/
     */
    public function iPullTheElement($arg1)
    {
        TestCase::assertEquals($arg1, $this->stack->pull());
    }
}
