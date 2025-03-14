<?php

namespace Deg540\CleanCodeKata9\Test;

use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    /**
     * @test
     */
    public function given3ReturnFizz(): void
    {
        $fizzBuzz = new FizzBuzzKata();

        $fizzBuzz->convert();
    }
}