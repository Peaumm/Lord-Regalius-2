<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Zombies;

class Map09 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,4);
    }

    public function name() : string {
        return 'Cachots';
    }

    public function description() : string {
        return "C'est sale et ca pue. Le sol humide vous dégoute un peu.. Un mélange de détritus, de sang, et de plein d'autres choses...";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [new Zombies()];
    }
}