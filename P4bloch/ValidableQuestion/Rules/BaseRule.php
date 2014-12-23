<?php

namespace P4bloch\ValidableQuestion\Rules;


abstract class BaseRule implements Rule {

    public $error;

    public function throwError($message) {
        throw new \RuntimeException($message);
    }
} 