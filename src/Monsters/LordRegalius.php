<?php

namespace Peaumm\Donjon\Monsters;

use Peaumm\Donjon\Component\Character\Statistics;
use Jugid\Staurie\Game\Monster;

class LordRegalius extends Monster {
    
    public function name() : string {
        return 'LordRegalius';
    }

    public function description(): string { 
        return "Redoutable seigneur vampire, souverain des ombres éternelles, dont le nom seul suscite terreur et désespoir.";
    }

    public function health_points(): int { 
        return 100;
    }

    public function defense(): int { 
        return 9;
    }

    public function magickadefense(): int { 
        return 9;
    }

    public function attack(): int { 
        return 15;
    }

    public function dodge(): int { 
        return 5;
    }

    public function magickaattack(): int { 
        return 25;
    }

    public function skills(): array { 
        return [
            'Needle' => 8,
            'LifeDrain' => 10,
            'Bloodbasque' => 20,
        ];
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Bite') {
            echo "{$this->name()} utilise morsure sur {$target->name()}!\n";
            $damage = $this->skills()['Bite'];
            $target->$this->inflictDamage($damage);
        }
    }

}