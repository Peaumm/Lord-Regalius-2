<?php

namespace Peaumm\Donjon\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Sword3 extends Item_Equippable {

  public function name() : string { 
    return 'Epée_Nétration';
  }

  public function description(): string {
    return 'The old reliable';
   }
  
  public function body_part(): string {
    return 'body';
   }
  
  public function statistics(): array { 
    return [
      'ATK'=> 12
    ];
  }
}