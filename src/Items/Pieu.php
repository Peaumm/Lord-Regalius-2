<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Pieu extends Item_Equippable {

  public function name() : string { 
    return 'Pieu_Thé';
  }

  public function description(): string {
    return 'The old reliable';
   }
  
  public function body_part(): string {
    return 'hand';
   }
  
  public function statistics(): array { 
    return [
      'ATK'=>9,
      'ATKMAGK'=> 20
    ];
  }
}
