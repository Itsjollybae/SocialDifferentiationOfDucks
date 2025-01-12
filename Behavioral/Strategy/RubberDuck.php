<?php

namespace Behavioral\Strategy;
require_once __DIR__ . '/DisplayBehavior.php';

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Squeak());
        $this->setDisplayBehavior(new CartoonishDisplay());
    }

    public function display(): string
    {
        return $this->displayBehavior->display();
    }
}
