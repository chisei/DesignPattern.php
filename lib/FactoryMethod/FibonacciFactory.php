<?php

namespace DesignPattern\FactoryMethod;

class FibonacciFactory
{
    /**
     * @param  $name
     * @return Fibonacci
     */
    public function create($name)
    {
        $className = __NAMESPACE__.'\\Fibonacci\\'.ucfirst($name);
        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Class not found.');
        }

        return new $className();
    }
}
