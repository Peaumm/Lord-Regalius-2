<?php

namespace Peaumm\Donjon\Components\Combat\CoreFunctions;

use Jugid\Staurie\Component\Console\AbstractConsoleFunction;

class AttackFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('combat.attack', [
            'monster'=>$args[0], 
        ]);
    }

    public function name() : string {
        return 'attack';
    }

    public function description() : string {
        return 'Attack the enemy selected';
    }

    public function getArgs() : int|array {
        return 1;
    }
}