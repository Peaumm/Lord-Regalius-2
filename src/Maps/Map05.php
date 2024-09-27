<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map05 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,0);
    }

    public function name() : string {
        return 'Petit salon (Est)';
    }

    public function description() : string {
        return 'Vous entrez dans un petit salon, une odeur étrange hante les lieux';
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
        return [];
    }
}