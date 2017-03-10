<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class EvadeArmor extends Armor {

public function absorbDamage(Attack $attack) {
if (rand(0, 1)) {
# code...
return $attack->getDamage();
} else {
return $attack->getDamage() == null;
}
}
}
