<?php

namespace Peaumm\Donjon\Game;

use Jugid\Staurie\Container;
use Jugid\Staurie\Interface\Containerable;
use Jugid\Staurie\Interface\Describable;
use Jugid\Staurie\Interface\Fightable;
use Jugid\Staurie\Interface\Nameable;

abstract class Monster implements Containerable, Describable {

    private Container $container;

    final public function setContainer(Container $container) : void {
        $this->container = $container;
    }

    abstract function health_points() : int;
    abstract function defense() : int;
    abstract function magickadefense() : int;
    abstract function attack(): int;
    abstract function dodge(): int;
    abstract function magickaattack(): int;
    abstract function skills() : array;
}