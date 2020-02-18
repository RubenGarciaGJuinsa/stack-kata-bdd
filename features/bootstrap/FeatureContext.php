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
     */
    public function anEmptyStack($size = 10)
    {
        $this->stack = new Stack($size);
    }

    /**
     * @Then /^the size of the stack is (\d+)$/
     */
    public function theSizeOfTheStackIs($expectedSize)
    {
        TestCase::assertEquals($expectedSize, $this->stack->getSize());
    }
}
