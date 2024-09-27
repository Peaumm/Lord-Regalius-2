<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Container;
use Jugid\Staurie\Staurie;
use Peaumm\Donjon\AbstractItemBlueprint;
use Peaumm\Donjon\Game\ItemsRand;
use Peaumm\Donjon\Items\Armor;
use Peaumm\Donjon\Items\Cape;
use Peaumm\Donjon\Items\Sword;

require_once '../vendor/autoload.php';

$staurie = new Staurie('Lord Regalius 2');
$staurie->register([
  Console::class, 
  PrettyPrinter::class,
  Inventory::class,
  Menu::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'text'=> 'Bienvenue sur Lord Regalius 2',
  'labels'=> [
    'new_game' => 'Entrer dans le monde',
    'quit'=> 'Quitter le jeu',
  ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/Maps',
    'namespace'=>'Peaumm\Donjon\Maps',
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true,
    'x_start'=>2,
    'y_start'=>0
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'This is an introduction to test the introduction component',
        'You can use it multiline by using an array in configuration'
    ],
    'title'=>'Chapter 1 : The new game',
    'scrolling'=>false
]);

$stats = new Statistics();
$stats
  ->addDefault('PV', 35)
  ->addDefault('ATK', 9)
  ->addDefault('ATKMAGK', 0)
  ->addDefault('DEF', 6)
  ->addDefault('DEFMAGK', 4)
  ->addDefault('VIT', 6)
  ->addDefault('PRE', 10)
;

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
  'name'=>'Lui',
  'statistics' => $stats,
  'equipment' => [
      'fullbody' => new Armor(),
      'hand' => new Sword(),
      'back' => new Cape(),
  ],
  'ask_name'=>false,
  'ask_gender'=>false
]);

$staurie->run(function(Container $container) {
  $blueprints = $container->gets('blueprint');
  $itemsRand = new ItemsRand();

  foreach($blueprints as $name => $blueprint) {
    
    $item = $itemsRand->items();

    if(empty($item)) {
      continue;
    }

    $item_to_add = $item[0];
    $blueprint->items[$item_to_add->name()] = $item_to_add;
  }

}); //LANCE LE JEU