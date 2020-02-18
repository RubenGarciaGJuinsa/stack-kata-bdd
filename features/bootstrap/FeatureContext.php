<?php

use Behat\Behat\Context\Context;
use Kata\Stack;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $stack;

    /**
     * @Given /^an empty stack$/
     */
    public function anEmptyStack()
    {
        $this->stack = new Stack();
    }
}
