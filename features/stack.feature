Feature: Test a stack

  Scenario: Get an empty stack
    Given an empty stack

  Scenario: Get an empty stack of size 1
    Given an empty stack of size 1
    Then the size of the stack is 1

  Scenario: Get the current position of an empty stack
    Given an empty stack
    Then the current position is 0

  Scenario: Push an element in the stack and the position must be increased in 1
    Given an empty stack
    Then the current position is 0
    When I insert the element "element"
    Then the current position is 1

  Scenario: Push an element in a stack without space
    Given an empty stack of size 0
    When I insert the element "element"
    Then I give an Stack Overflow Exception