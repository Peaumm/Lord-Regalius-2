<?php
namespace Peaumm\Donjon\Monsters;

use Peaumm\Donjon\Game\Monster;

/* 
Diablotin : 25PV / 5 DEF / 3DEFMGK / 5 ATK / 8ATKMGK / 1 ESQ
- Langue de feu ( dot de feu ???)
*/
class Imps extends Monster {
    
    public function name() : string {
        return 'Imps';
    }

    public function description(): string { 
        return "Un rire sardonique fend l’air tandis que des flammes tourbillonnent autour d’un diablotin, sa silhouette incandescente et ses yeux brûlants ne laissant présager que le chaos";
    }

    public function health_points(): int { 
        return 25;
    }

    public function defense(): int { 
        return 5;
    }

    public function magickadefense(): int { 
        return 3;
    }

    public function attack(): int { 
        return 5;
    }

    public function dodge(): int { 
        return 1;
    }

    public function magickaattack(): int { 
        return 8;
    }

    public function skills(): array { 
        return [
            'Fire tongue' => 5,
        ];
    }

    public function inflictDamage(): void {
        $this->attack();
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Fire tongue') {
            echo "{$this->name()} projette une langue de feu destructrice sur {$target->name()}, laissant derrière elle une odeur de chair brûlée!\n";
            $damage = $this->skills()['Fire tongue'];
            $target->$this->inflictDamage($damage);
        }
    }

}