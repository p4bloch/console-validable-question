<?php

namespace P4bloch\ValidableQuestion\Rules;


class NumericRule extends BaseRule {

    public function validate($answer) {
        if (!is_numeric($answer)) {
            $this->throwError('A numeric value is required.');
        }
    }
}