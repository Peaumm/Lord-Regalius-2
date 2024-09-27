<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map23 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,3);
    }

    public function name() : string {
        return 'Escaliers';
    }

    public function description() : string {
        return "Il y a de la lumière en haut de l'escalier";
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
        return [];
    }
}