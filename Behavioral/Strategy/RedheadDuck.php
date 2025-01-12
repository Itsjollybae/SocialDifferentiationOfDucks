<?php

namespace Behavioral\Strategy;
require_once __DIR__ . '/DisplayBehavior.php';

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
        $this->setDisplayBehavior(new RealisticDisplay());
    }

    public function display(): string
    {
        return $this->displayBehavior->display();
    }
}
