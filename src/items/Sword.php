<?php

namespace Peaunmm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Sword extends Item_Equippable {

  public function name() : string { 
    return 'Sword';
  }

  public function description(): string {
    return 'The old reliable';
   }
  
  public function body_part(): string {
    return 'hand';
   }
  
  public function statistics(): array { 
    return [
      'attack'=> rand(5,8)
    ];
  }
}
