<?php

namespace Peaumm\Donjon\Components\Combat;

use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Console\Console;
use Peaumm\Donjon\Components\Character\Statistics;
use Peaumm\Donjon\Components\Combat\CoreFunctions\AttackFunction;
use Peaumm\Donjon\Game\Monster;
use Peaumm\Donjon\Monsters\AnimatedArmor;
use Peaumm\Donjon\Monsters\Bats;
use Peaumm\Donjon\Monsters\Mimic;
use Peaumm\Donjon\Monsters\Imps;
use Peaumm\Donjon\Monsters\Skeletons;
use Peaumm\Donjon\Monsters\Zombies;

class Combat extends AbstractComponent {

  private array $monsterMap = [
    'bats' => Bats::class,
    'mimic' => Mimic::class,
    'imps' => Imps::class,
    'zombies' => Zombies::class,
    'animated-armor' => AnimatedArmor::class,
    'skeleton' => Skeletons::class
  ];
  
  public function getEventName(): array { 
    return [
      'combat.attack',
      'combat.spell',
    ];
  }

  protected function action(string $event, array $arguments): void { 
    switch($event) {
      case 'combat.attack':
        $this->attack($arguments['monster']);
        break;
      case 'combat.spell':
        break;
    }
  }

  private function attack(string $monster) {
    $pp = $this->container->getPrettyPrinter();
    $stats = Statistics::default();
    $monsterClass = $this->monsterMap[strtolower($monster)];
    $target = new $monsterClass;
    $target->setContainer($this->container);
    $hit = $stats->value('ATK') - $target->defense();

    $monsterHealth = $target->health_points() - $hit;
    $pp->writeLn($monsterHealth);
    
    // var_dump($stats->sub('PV', 1));
    // var_dump($stats->value('DEF'));
    // var_dump($statsPlayer->has('ATK'));
  }
  
  public function name(): string { 
    return 'fight';
  }

  public function defaultConfiguration(): array {
    return [

    ];
  }

  public function initialize(): void {
    $console = $this->container->getConsole();
    $console->addFunction(new AttackFunction());
  }

  final public function require() : array {
    return [Console::class, PrettyPrinter::class];
  }

}