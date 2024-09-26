<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once '../vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('Lord Regalius 2');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$container = $staurie->getContainer();
$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'text'=> 'Bienvenue sur Lord Regalius 2',
  'labels'=> [
    'new_game' => 'Entrer dans le monde',
    'quit'=> 'Quitter le jeu',
  ]
]);


$staurie->run(); //LANCE LE JEU