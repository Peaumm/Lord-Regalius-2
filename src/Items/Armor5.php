<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor5 extends Item_Equippable {

  public function name() : string { 
    return 'Costume_Regalia';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'fullbody';
   }
  
  public function statistics(): array { 
    return [
      'PV'=> 20,
      'DEF'=> 9,
      'DEFMAGK'=>9
    ];
  }
}