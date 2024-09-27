<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor4 extends Item_Equippable {

  public function name() : string { 
    return 'Armure_Bénie';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'fullbody';
   }
  
  public function statistics(): array { 
    return [
      'DEF'=> 10,
      'DEFMAGK'=>10
    ];
  }
}