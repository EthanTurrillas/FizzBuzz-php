<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{
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

    function isFizzBuzz($n) {
        return $this->isFizz($n) && $this->isBuzz($n);
    }

    function FizzBuzz($n){
        if($this->isFizzBuzz($n)){
            return "FizzBuzz";
        }
        elseif ($this->isFizz($n)){
            return "Fizz";
        }
        elseif ($this->isBuzz($n)){
            return "Buzz";
        }
        else{
            return $n;
        }
    }

}