<?php

namespace DesignPattern\FactoryMethod;

class Fibonacci
{
    public function fib($num)
    {
        if ($num === 0 || $num === 1) {
            return $num;
        }

        return $this->fib($num-2) + $this->fib($num-1);
    }
}
