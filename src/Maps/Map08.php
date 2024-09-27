<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map08 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,3);
    }

    public function name() : string {
        return 'Fond des cachots';
    }

    public function description() : string {
        return 'Vous trouvez une femme enchaînée, elle semble à moitié vivante, ou a moitié morte...';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [Meuf];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}