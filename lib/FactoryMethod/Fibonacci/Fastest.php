<?php

namespace DesignPattern\FactoryMethod\Fibonacci;

class Fastest implements Fibonacci
{
    public function fib($num)
    {
        $sqrt5 = sqrt(5);
        $phi = (1+$sqrt5)/2;

        return (int) floor(pow($phi, $num)/$sqrt5 + (1/2));
    }
}
