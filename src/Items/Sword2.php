<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;
use Peaumm\Donjon\Game\AttackRand;
class Sword2 extends Item_Equippable {

  public function name() : string { 
    return 'Epée_Core';
  }

  public function description(): string {
    return 'The old reliable';
   }
  
  public function body_part(): string {
    return 'hand';
   }
  
  public function statistics(): array { 
    return [
      'ATK'=> 8,
      'ATKMAGK'=>1
    ];
  }
}
