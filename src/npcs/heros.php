<?php

namespace Peaumm\donjon\npcs;

class Heros extends Joueur {

    public function name() : string {
        return 'Heros';
    }

    public function description(): string { 
        return 'This is supposed to be you.. well not really.. but... yeah you got it';
    }

    public function health_points(): int { 
        return 30 + $EquippedArmor;
    }

    public function defense(): int { 
        return 1 + $EquippedArmor;
    }

    public function magicDefense(): int { 
        return 1 + $EquippedArmor;
    }

    public function skills(): array { 
        return [
            "Coup d'Epée" => 3 + $equippedWeapon,
        ];
    }
}