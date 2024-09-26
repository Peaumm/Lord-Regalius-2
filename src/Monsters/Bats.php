<?php

namespace Peaumm\Donjon\Monsters;

use Peaumm\Donjon\Game\Monster;

class Bats extends Monster {
    
    public function name() : string {
        return 'Bats';
    }

    public function description(): string { 
        return 'THIS, IS, THE, ORIGINAL, GOAT';
    }

    public function health_points(): int { 
        return 8;
    }

    public function defense(): int { 
        return 1;
    }

    public function magickadefense(): int { 
        return 1;
    }

    public function attack(): int { 
        return 2;
    }

    public function dodge(): int { 
        return 3;
    }

    public function magickaattack(): int { 
        return 0;
    }

    public function skills(): array { 
        return [
            'Bite' => 2,
        ];
    }

    public function inflictDamage(): void {
        $this->attack();
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Bite') {
            echo "{$this->name()} utilise morsure sur {$target->name()}!\n";

            $damage = $this->skills()['Bite'];
            $target->$this->inflictDamage($damage);

            $chance = rand(1, 100); 
            if ($chance <= 15) {
                $target->applyStatusEffect('poison');
                echo "{$target->name()} est empoisonné!\n";
            }
        }
    }

}


