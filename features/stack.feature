Feature: Test a stack

  Scenario: Get an empty stack
    Given an empty stack

  Scenario: Get an empty stack of size 1
    Given an empty stack of size 1
    Then the size of the stack is 1