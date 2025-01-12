<?php

namespace Behavioral\Strategy;

interface FlyBehavior
{
    public function fly(): string;
}

class FlyWithWings implements FlyBehavior
{
    public function fly(): string
    {
        return "I can fly!";
    }
}

class FlyNoWay implements FlyBehavior
{
    public function fly(): string
    {
        return "I can't fly.";
    }
}
