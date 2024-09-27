<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map21 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,1);
    }

    public function name() : string {
        return 'Chambre (Est)';
    }

    public function description() : string {
        return 'Un grand lit, miteux, et de vieux meubles. Ils étaient probablement magnifiques.. il y a 500ans...';
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