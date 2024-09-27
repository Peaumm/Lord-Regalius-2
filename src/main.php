<?php

use Peaumm\Donjon\Components\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once '../vendor/autoload.php';

$staurie = new Staurie('Lord Regalius 2');
$staurie->register([
  Console::class, 
  PrettyPrinter::class, 
  MainCharacter::class, 
  Inventory::class,
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
        "La Lune de Sang désormais levée, Lors Regalius commence son rituel.",
        "Vous avez réussi à vous frayer un chemin parmi les ennemis dehors",
        "et vous trouvez devant une grande porte de bois.",
        "Par chance, vous posez à peine votre main sur la poignée que la porte s'ouvre.",
        "Vous pénétrez dans le château du seigneur vampire, prêt à en découdre.",
        " ",
        " ",
        "tapez 'help' pour afficher les commandes"
    ],
    'title'=>'Chapter 2 : Le Chateau',
    'scrolling'=>false
]);


$staurie->run(); //LANCE LE JEU