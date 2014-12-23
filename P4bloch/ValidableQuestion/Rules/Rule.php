<?php

namespace P4bloch\ValidableQuestion\Rules;


interface Rule {
    public function validate($answer);
} 