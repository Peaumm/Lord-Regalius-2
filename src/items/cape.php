<?php

namespace Peaunmm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Cape extends Item_Equippable {

  public function name() : string { 
    return 'Cape';
  }

  public function description(): string {
    return 'Essential accessory';
   }
  
  public function body_part(): string {
    return 'back';
   }
  
  public function statistics(): array { 
    return [
      'speed'=> 3
    ];
  }
}