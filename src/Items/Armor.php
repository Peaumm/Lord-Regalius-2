<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor extends Item_Equippable {

  public function name() : string { 
    return 'Armure_Rouillée';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'fullbody';
   }
  
  public function statistics(): array { 
    return [
      'PV'=> 5,
      'DEF'=> 5, 
      'DEFMAGK'=> 3
    ];
  }
}
