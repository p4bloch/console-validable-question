<?php

namespace P4bloch\ValidableQuestion\Rules;


class RuleFactory {

    public static function makeFromString($rule) {
        if ($rule == 'required') return new RequiredRule();
        if ($rule == 'numeric') return new NumericRule();
        if ($rule == 'email') return new EmailRule();
    }
} 