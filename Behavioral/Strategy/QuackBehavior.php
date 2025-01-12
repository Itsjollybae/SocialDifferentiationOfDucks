<?php

namespace Behavioral\Strategy;

interface QuackBehavior
{
    public function quack(): string;
}

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return "Quack!";
    }
}

class Squeak implements QuackBehavior
{
    public function quack(): string
    {
        return "Squeak!";
    }
}

class MuteQuack implements QuackBehavior
{
    public function quack(): string
    {
        return "<< Silence >>";
    }
}
