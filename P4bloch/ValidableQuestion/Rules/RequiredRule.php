<?php

namespace P4bloch\ValidableQuestion\Rules;


class RequiredRule extends BaseRule {

    public function validate($answer) {
        if (!$answer){
            $this->throwError('This is required.');
        }
    }
}