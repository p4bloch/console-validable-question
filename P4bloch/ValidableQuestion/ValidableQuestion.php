<?php namespace P4bloch\ValidableQuestion;

use P4bloch\ValidableQuestion\Rules\Rule;
use P4bloch\ValidableQuestion\Rules\RuleFactory;
use Symfony\Component\Console\Question\Question;

class ValidableQuestion extends Question {

    private $rules;

    public function __construct($question, array $rules, $default = null) {
        parent::__construct($question, $default);

        $this->rules = $rules;
        $this->setValidator($this->validator());
    }

    private function validator() {
        $rules = $this->rules;

        return function ($answer) use ($rules) {
            foreach ($rules as $rule_str) {
                $rule = RuleFactory::makeFromString($rule_str);
                $answer = $this->validateRule($rule, $answer);
            }

            return $answer;
        };
    }

    private function validateRule(Rule $rule, $answer) {
        // Exception will be thrown if there's an error
        $rule->validate($answer);

        // Otherwise we can safely assume the answer is valid
        return $answer;
    }
}