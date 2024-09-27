<?php

namespace Peaumm\Donjon\Components\Combat;

use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Character\Statistics;
use Peaumm\Donjon\Components\Character\MainCharacter;
use Peaumm\Donjon\Components\Combat\CoreFunctions\AttackFunction;
use Peaumm\Donjon\Game\Monster;

class Combat extends AbstractComponent {

  public $theName;
  
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
    $pp->writeln("Bonjour $monster");
    // $pp->writeLn(Monster::attack());
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