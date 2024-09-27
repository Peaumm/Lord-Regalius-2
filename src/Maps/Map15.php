<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Skeletons;

class Map15 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,3);
    }

    public function name() : string {
        return 'Couloir';
    }

    public function description() : string {
        return 'Vous vous trouvez dans un long couloir';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return $this->items;
    }

    public function monsters() : array {
        return [new Skeletons()];
    }
}