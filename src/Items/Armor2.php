<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor2 extends Item_Equippable {

  public function name() : string { 
    return 'Armure_Hal';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'fullbody';
   }
  
  public function statistics(): array { 
    return [
      'PV'=> 8,
      'DEF'=> 3, 
      'DEFMAGK'=> 5
    ];
  }
}