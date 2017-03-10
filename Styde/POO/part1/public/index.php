<?php

namespace Styde;

require '../vendor/autoload.php';

//exit(Unit::PROJECT);

Translator::set([
  'BasicBowAttack' => ':unit dispara una flecha :opponent',
  'BasicSwordAttack' => ":unit ataca con la espada a :opponent",
  'CrossBowAttack' => ":unit dispara una flecha a :opponent",
  'FireBowAttack' => ":unit shot a fire arrow :opponent"
]);

Log::setLogger(new HtmlLogger());

$ramm = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();

$silence = new Unit('Silence', new Weapons\FireBow);

$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);

$silence->attack($ramm);

/*
1.-	Refactorizar para que el arquero pueda tener armadura
2.- Crear Armadura de la evasion, para evadir la mitad de los ataques
FALTA 3.- Refactorizar para evitar que personajes tengan puntos negativos de vida.
4.- Pensar como hacer que un arquero o soldado tengan diferentes armas.

*/

/*

*/