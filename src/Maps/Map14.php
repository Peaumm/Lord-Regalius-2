<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\AnimatedArmor;

class Map14 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,2);
    }

    public function name() : string {
        return 'Grand salon (Nord)';
    }

    public function description() : string {
        return 'Une grande table avec de nombreuses chaises. Le lieu semble souvent utilisé';
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
        return [ new AnimatedArmor()];
    }
}