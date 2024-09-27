<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;


class Map24 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,4);
    }

    public function name() : string {
        return 'Salle du Trône';
    }

    public function description() : string {
        return 'Lorsque vous entrez dans la salle du trône, vous trouvez le seigneur Regalius en pleine invocation de ses servants.';
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