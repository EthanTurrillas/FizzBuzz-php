<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    /**
     * @test
     */
    public function given3ReturnFizz(){
        $fizzBuzz = new FizzBuzzKata();
        $this->assertTrue($fizzBuzz->isFizz(3));
    }

    /**
     * @test
     */
    public function given5ReturnBuzz(){
        $fizzBuzz = new FizzBuzzKata();
        $this->assertTrue($fizzBuzz->isBuzz(5));
    }

    /**
     * @test
     */
    public function given15ReturnFizzBuzz(){
        $fizzBuzz = new FizzBuzzKata();
        $this->assertTrue($fizzBuzz->isFizzBuzz(15));
    }

    /**
     * @test
     */
    public function given4Return4(){
        $fizzBuzz = new FizzBuzzKata();
        $result = $fizzBuzz->FizzBuzz(4);
        $this->assertEquals(4, $result);
    }
}