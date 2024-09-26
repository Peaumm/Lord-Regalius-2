<?php

namespace Peaunmm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Armor extends Item_Equippable {

  public function name() : string { 
    return 'Armor';
  }

  public function description(): string {
    return 'Rusty but solid';
   }
  
  public function body_part(): string {
    return 'body';
   }
  
  public function statistics(): array { 
    return [
      'HP'=> 5,
      'defense'=> 5, 
      'magic defense'=> 3
    ];
  }
}