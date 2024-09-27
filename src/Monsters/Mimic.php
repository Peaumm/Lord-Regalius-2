<?php
namespace Peaumm\Donjon\Monsters;

use Jugid\Staurie\Game\Monster;

/* 
Mimique : 50PV / 6DEF+MGK / 12ATK / 1 ESQ
- Plaie Béante 
*/
class Mimic extends Monster {
    
    public function name() : string {
        return 'Mimic';
    }

    public function description(): string { 
        return "Dans un bruit sourd, le coffre s'ouvre, révélant la véritable nature de la Mimic, un monstre affamé dont les crocs vous menacent.";
    }

    public function health_points(): int { 
        return 50;
    }

    public function defense(): int { 
        return 6;
    }

    public function magickadefense(): int { 
        return 6;
    }

    public function attack(): int { 
        return 12;
    }

    public function dodge(): int { 
        return 1;
    }

    public function magickaattack(): int { 
        return 12;
    }

    public function skills(): array { 
        return [
            'Gaping wound' => 12,
        ];
    }

    public function inflictDamage(): void {
        $this->attack();
    }

    public function useSkill(string $skill, Monster $target): void {
        if ($skill === 'Gaping wound') {
            echo "{$this->name()} referme ses crocs avec une rapidité fulgurante sur {$target->name()}, laissant une plaie béante!\n";
            $damage = $this->skills()['Gaping wound'];
            $target->$this->inflictDamage($damage);
        }
    }

}