<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;
use Peaumm\Donjon\Game\AttackRand;
class Sword extends Item_Equippable {

  public function name() : string { 
    return 'Epée';
  }

  public function description(): string {
    return 'The old reliable';
   }
  
  public function body_part(): string {
    return 'hand';
   }
  
  public function statistics(): array { 
    return [
      'ATK'=> 6
    ];
  }
}
