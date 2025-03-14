<?php

namespace Deg540\CleanCodeKata9;

class Example
{
    /**
     * @param $value
     *
     * @return bool
     */
    function integerChecker($value): bool {
        return is_integer($value);
    }

    function isMultipleOf3($n){
        return $n % 3 === 0;
    }

    function isMultipleOf5($n){
        return $n % 5 === 0;
    }

    function isFizz($n) {
        return $this->isMultipleOf3($n);
    }

    function isBuzz($n) {
        return $this->isMultipleOf5($n);
    }
}