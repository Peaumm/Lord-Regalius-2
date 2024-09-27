<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Zombies;

class Map16 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,4);
    }

    public function name() : string {
        return 'Cachots (Entrée)';
    }

    public function description() : string {
        return "L'entrée des cachots emplit vos narines de son odeur nauséabonde. Qu'est-ce que vous foutez là ?";
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