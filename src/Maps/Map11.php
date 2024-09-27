<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Imps;

class Map11 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,2);
    }

    public function name() : string {
        return 'Cuisine';
    }

    public function description() : string {
        return "Il semble que quelqu'un manque à l'appel...";
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
        return [new Imps()];
    }
}