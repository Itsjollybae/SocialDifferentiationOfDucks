<?php

namespace Strategy;

use Duck;
use MallardDuck;
use RedheadDuck;
use RubberDuck;
use DecoyDuck;
use TestCase;

class StrategyTest extends TestCase
{
    public function testMallardDuck()
    {
        $duck = new MallardDuck();

        $this->assertEquals("I can fly!", $duck->performFly());
        $this->assertEquals("Quack!", $duck->performQuack());
        $this->assertEquals("Looks like a real duck.", $duck->display());
    }

    public function testRedheadDuck()
    {
        $duck = new RedheadDuck();

        $this->assertEquals("I can fly!", $duck->performFly());
        $this->assertEquals("Quack!", $duck->performQuack());
        $this->assertEquals("Looks like a real duck.", $duck->display());
    }

    public function testRubberDuck()
    {
        $duck = new RubberDuck();

        $this->assertEquals("I can't fly.", $duck->performFly());
        $this->assertEquals("Squeak!", $duck->performQuack());
        $this->assertEquals("Looks like a rubber duck toy.", $duck->display());
    }

    public function testDecoyDuck()
    {
        $duck = new DecoyDuck();

        $this->assertEquals("I can't fly.", $duck->performFly());
        $this->assertEquals("<< Silence >>", $duck->performQuack());
        $this->assertEquals("Looks like a wooden decoy.", $duck->display());
    }
}
