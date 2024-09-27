<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor3 extends Item_Equippable {

  public function name() : string { 
    return 'Armure_Rose';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'fullbody';
   }
  
  public function statistics(): array { 
    return [
      'PV'=> 10,
      'DEF'=> 7
    ];
  }
}