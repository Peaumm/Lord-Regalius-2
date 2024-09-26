<?php

use Peaumm\Donjon\Components\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('Example lands');
$staurie->register([
    Console::class, 
    PrettyPrinter::class, 
    MainCharacter::class, 
    Inventory::class, 
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome test adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
    ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/maps',
    'namespace'=>'Jugid\Staurie\Example\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
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

$staurie->run();
=======
<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Staurie;

require_once '../vendor/autoload.php';

$staurie = new Staurie('Lord Regalius 2');
$staurie->register([
  Console::class, 
  PrettyPrinter::class, 
  MainCharacter::class, 
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
    'compass_enable'=>true
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


$staurie->run(); //LANCE LE JEU
