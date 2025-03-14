<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;


final class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function trueAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }

    /**
     * @test
     */
    public function testIsMultipleOf3() {
        $example = new Example();

        $this->assertTrue($example->isMultipleOf3(9));
        $this->assertFalse($example->isMultipleOf3(4));
    }
    public function testIsMultipleOf5() {
        $example = new Example();

        $this->assertTrue($example->isMultipleOf5(20));
        $this->assertFalse($example->isMultipleOf5(9));
    }

    public function testIsFizz() {
        $example = new Example();

        $this->assertTrue($example->isFizz(9));
        $this->assertFalse($example->isFizz(4));
    }

    public function testIsBuzz() {
        $example = new Example();

        $this->assertTrue($example->isBuzz(20));
        $this->assertFalse($example->isBuzz(9));
    }

}
