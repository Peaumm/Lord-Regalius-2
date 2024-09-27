<?php
namespace Peaumm\Donjon\Monsters;

use Peaumm\Donjon\Game\Monster;

/* 
Armure Vivante : 40PV / 6DEF+MGK / 8ATK+MGK / 1 ESQ
- Coup d'Epée
Si le joueur attaque une Armure Vivante avec une arme dotée de magie ou un sort, il ignore DEF+MGK de l'Armure
*/
class AnimatedArmor extends Monster {
    
    public function name() : string {
        return 'AnimatedArmor';
    }

    public function description(): string { 
        return "L’armure-enchantée s’éveille dans un grincement de métal, son épée massive traînant sur le sol avant de se relever avec une menace silencieuse.";
    }

    public function health_points(): int { 
        return 40;
    }

    public function defense(): int { 
        return 6;
    }

    public function magickadefense(): int { 
        return 6;
    }

    public function attack(): int { 
        return 8;
    }

    public function dodge(): int { 
        return 1;
    }

    public function magickaattack(): int { 
        return 8;
    }

    public function skills(): array { 
        return [
            'Sword stroke' => 12,
        ];
    }

    public function inflictDamage(): void {
        $this->attack();
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Sword stroke') {
            echo "{$this->name()} déploie son épée dans un coup fulgurant, la lame transperçant {$target->name()} avec une précision mortelle!\n";
            $damage = $this->skills()['Sword stroke'];
            $target->$this->inflictDamage($damage);
        }
    }

}