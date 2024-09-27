<?php

namespace Peaumm\Donjon\Game;

use Jugid\Staurie\Game\Item;
use Peaumm\Donjon\Items\Armor;
use Peaumm\Donjon\Items\Armor2;
use Peaumm\Donjon\Items\Armor3;
use Peaumm\Donjon\Items\Armor4;
use Peaumm\Donjon\Items\Armor5;
use Peaumm\Donjon\Items\Sword;
use Peaumm\Donjon\Items\Sword2;
use Peaumm\Donjon\Items\Sword3;
use Peaumm\Donjon\Items\Cape;
use Peaumm\Donjon\Items\Cape2;
use Peaumm\Donjon\Items\Cape3;
use Peaumm\Donjon\Items\Cape4;
use Peaumm\Donjon\Items\Pieu;

class ItemsRand {

  public function items() : array {
    $tab = [
      new Armor(),
      new Armor2(),
      new Armor3(),
      new Armor4(),
      new Armor5(),
      new Sword(),
      new Sword2(),
      new Sword3(),
      new Cape(),
      new Cape2(),
      new Cape3(),
      new Cape4(),
      new Pieu
    ];

    if(1 === 1) {
      return [$tab[rand(0, count($tab)-1)]];
    }

    return [];
  }

  }