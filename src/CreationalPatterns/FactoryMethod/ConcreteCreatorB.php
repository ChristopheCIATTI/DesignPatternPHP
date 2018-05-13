<?php

/*
 * overrides the factory method to return an instance of a ConcreteProduct.
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ConcreteCreatorB extends AbstractCreator
{
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\FactoryMethod\AbstractCreator::factoryMethod()
     */
    public function factoryMethod()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ConcreteCreatorB $product
         */
        $this->product = new ConcreteProductB();
        return $this->product;
    }
    
}
