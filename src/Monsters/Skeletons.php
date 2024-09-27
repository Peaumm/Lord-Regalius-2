<?php
namespace Peaumm\Donjon\Monsters;

use Peaumm\Donjon\Game\Monster;

/* 
- Coup d'épée */
class Zombies extends Monster {
    
    public function name() : string {
        return 'Skeletons';
    }

    public function description(): string { 
        return "Le silence est brisé par le grincement d'une lame traînant sur le sol, et un squelette apparaît, son épée levée prêt à frapper";
    }

    public function health_points(): int { 
        return 12;
    }

    public function defense(): int { 
        return 4;
    }

    public function magickadefense(): int { 
        return 1;
    }

    public function attack(): int { 
        return 4;
    }

    public function dodge(): int { 
        return 1;
    }

    public function magickaattack(): int { 
        return 0;
    }

    public function skills(): array { 
        return [
            'Sword stroke' => 4,
        ];
    }

    public function inflictDamage(): void {
        $this->attack();
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Sword stroke') {
            echo "{$this->name()} atteint sa cible avec une force implacable {$target->name()}!\n";
            $damage = $this->skills()['Sword stroke'];
            $target->$this->inflictDamage($damage);
        }
    }

}