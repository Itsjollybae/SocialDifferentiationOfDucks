<?php

require_once 'Behavioral/Strategy/Duck.php';
require_once 'Behavioral/Strategy/MallardDuck.php';
require_once 'Behavioral/Strategy/RedheadDuck.php';
require_once 'Behavioral/Strategy/RubberDuck.php';
require_once 'Behavioral/Strategy/DecoyDuck.php';
require_once 'Behavioral/Strategy/FlyBehavior.php';
require_once 'Behavioral/Strategy/QuackBehavior.php';

use Behavioral\Strategy\{Duck, MallardDuck, RedheadDuck, RubberDuck, DecoyDuck, FlyBehavior, QuackBehavior};

echo "Testing Ducks:\n";

$mallardDuck = new MallardDuck();
$redheadDuck = new RedheadDuck();
$rubberDuck = new RubberDuck();
$decoyDuck = new DecoyDuck();

echo "Mallard Duck:\n";
echo $mallardDuck->performQuack() . "\n";   // Quack!
echo $mallardDuck->performFly() . "\n";     // I'm flying!
echo $mallardDuck->display() . "\n";        // Displaying duck
echo $mallardDuck->swim() . "\n";           // All ducks float!

echo "\nRedhead Duck:\n";
echo $redheadDuck->performQuack() . "\n";   // Quack!
echo $redheadDuck->performFly() . "\n";     // I'm flying!
echo $redheadDuck->display() . "\n";        // Displaying duck
echo $redheadDuck->swim() . "\n";           // All ducks float!

echo "\nRubber Duck:\n";
echo $rubberDuck->performQuack() . "\n";    // Squeak!
echo $rubberDuck->performFly() . "\n";      // I can't fly.
echo $rubberDuck->display() . "\n";         // Displaying duck
echo $rubberDuck->swim() . "\n";            // All ducks float!

echo "\nDecoy Duck:\n";
echo $decoyDuck->display() . "\n";          // I'm a decoy duck
echo $decoyDuck->swim() . "\n";             // All ducks float!
