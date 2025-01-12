<?php

namespace Behavioral\Strategy;
require_once __DIR__ . '/DisplayBehavior.php';

use Behavioral\Strategy\WoodenDisplay;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new MuteQuack());
        $this->setDisplayBehavior(new WoodenDisplay());
    }

    public function display(): string
    {
        return $this->displayBehavior->display();
    }
}
