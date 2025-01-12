<?php

namespace Behavioral\Strategy;

interface DisplayBehavior
{
    public function display(): string;
}

class RealisticDisplay implements DisplayBehavior
{
    public function display(): string
    {
        return "Looks like a real duck.";
    }
}

class CartoonishDisplay implements DisplayBehavior
{
    public function display(): string
    {
        return "Looks like a rubber duck toy.";
    }
}

class WoodenDisplay implements DisplayBehavior
{
    public function display(): string
    {
        return "Looks like a wooden decoy.";
    }
}
