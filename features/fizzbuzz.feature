Feature: FizzBuzz
  In order to see the BDD-driven FizzBuzz example in action
  As an amazed developer
  I need to be able to test the application

Scenario: A FizzBuzz implementation
  Given the following conditional statements:
  | condition | onTrue   |
  | FizzBuzz  | FizzBuzz |
  | Fizz      | Fizz     |
  | Buzz      | Buzz     |

  And the input range from "1" to "15"
  Then it should return:
  | #   | message  |
  | #1  | 1        |
  | #2  | 2        |
  | #3  | Fizz     |
  | #4  | 4        |
  | #5  | Buzz     |
  | #6  | Fizz     |
  | #7  | 7        |
  | #8  | 8        |
  | #9  | Fizz     |
  | #10 | Buzz     |
  | #11 | 11       |
  | #12 | Fizz     |
  | #13 | 13       |
  | #14 | 14       |
  | #15 | FizzBuzz |