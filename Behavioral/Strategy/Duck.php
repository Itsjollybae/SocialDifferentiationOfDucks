<?php

namespace Behavioral\Strategy;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;
    protected DisplayBehavior $displayBehavior;

    public function __construct(
        FlyBehavior $flyBehavior,
        QuackBehavior $quackBehavior,
        DisplayBehavior $displayBehavior
    ) {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
        $this->displayBehavior = $displayBehavior;
    }

    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    public function display(): string
    {
        return $this->displayBehavior->display();
    }

    public function swim(): string
    {
        return "All ducks float, even decoys!";
    }

    public function setFlyBehavior(FlyBehavior $fb): void
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb): void
    {
        $this->quackBehavior = $qb;
    }

    public function setDisplayBehavior(DisplayBehavior $db): void
    {
        $this->displayBehavior = $db;
    }
}
