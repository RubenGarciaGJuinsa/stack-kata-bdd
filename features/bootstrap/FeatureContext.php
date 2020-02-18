<?php

use Behat\Behat\Context\Context;
use Kata\Stack;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected ?Stack $stack;

    /**
     * @Given /^an empty stack$/
     */
    public function anEmptyStack()
    {
        $this->stack = new Stack();
    }

    /**
     * @Given /^an empty stack of size (\d+)$/
     */
    public function anEmptyStackOfSize($arg1)
    {
        $this->stack = new Stack($arg1);
    }

    /**
     * @Then /^the size of the stack is (\d+)$/
     */
    public function theSizeOfTheStackIs($expectedSize)
    {
        \PHPUnit\Framework\TestCase::assertEquals($expectedSize, $this->stack->getSize());
    }
}
