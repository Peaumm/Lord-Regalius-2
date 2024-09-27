<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Cape3 extends Item_Equippable {

  public function name() : string { 
    return 'Cape_Uchon';
  }

  public function description(): string {
    return 'Essential accessory';
   }
  
  public function body_part(): string {
    return 'back';
   }
  
  public function statistics(): array { 
    return [
      'VIT'=> 5
    ];
  }
}