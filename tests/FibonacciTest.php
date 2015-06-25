<?php

use DesignPattern\FactoryMethod\Fibonacci\Recursion as Fibonacci;

class RecursionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function fibShouldReturn0()
    {
        $target = new Fibonacci();
        $actual = $target->fib(0);

        $this->assertSame(0, $actual);
    }

    /**
     * @test
     */
    public function fibShouldReturn1When1()
    {
        $target = new Fibonacci();
        $actual = $target->fib(1);

        $this->assertSame(1, $actual);
    }

    /**
     * @test
     */
    public function fibShouldReturn1When2()
    {
        $target = new Fibonacci();
        $actual = $target->fib(2);

        $this->assertSame(1, $actual);
    }

    /**
     * @test
     */
    public function fibShouldReturn1When3()
    {
        $target = new Fibonacci();
        $actual = $target->fib(3);

        $this->assertSame(2, $actual);
    }
}
