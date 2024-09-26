<?php
namespace Peaumm\Donjon\Monsters;

use Jugid\Staurie\Game\Monster;

class Zombies extends Monster {
    
    public function name() : string {
        return 'Zombies';
    }

    public function description(): string { 
        return 'Une odeur pestilentielle vous submerge, et bientôt la source de cette puanteur se révèle : un zombie se traîne vers vous';
    }

    public function health_points(): int { 
        return 12;
    }

    public function defense(): int { 
        return 3;
    }

    public function magickadefense(): int { 
        return 1;
    }

    public function attack(): int { 
        return 3;
    }

    public function dodge(): int { 
        return 1;
    }

    public function magickaattack(): int { 
        return 1;
    }

    public function skills(): array { 
        return [
            'Bite' => 3,
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
                $target->applyStatusEffect('putrefaction');
                echo "La Chair de {$target->name()} commence à se putrefier !\n";
            }
        }
    }

}


