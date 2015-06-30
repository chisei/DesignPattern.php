<?php

use DesignPattern\FactoryMethod\FibonacciFactory;

class FibonacciFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnRecursion()
    {
        $factory = new FibonacciFactory();
        $actual = $factory->create('recursion');

        $this->assertInstanceOf('DesignPattern\FactoryMethod\Fibonacci\Recursion', $actual);
    }

    /**
     * @test
     */
    public function shouldReturnFastest()
    {
        $factory = new FibonacciFactory();
        $actual = $factory->create('fastest');

        $this->assertInstanceOf('DesignPattern\FactoryMethod\Fibonacci\Fastest', $actual);
    }

    
    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function shouldThrowException()
    {
        $factory = new FibonacciFactory();
        $factory->create('foo');
    }

}
