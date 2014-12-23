<?php

namespace P4bloch\ValidableQuestion\Rules;


class EmailRule extends BaseRule {

    public function validate($answer) {
        if (!filter_var($answer, FILTER_VALIDATE_EMAIL)) {
            $this->throwError('This is not a valid e-mail address');
        }
    }
}