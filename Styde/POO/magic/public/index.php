<?php

use Styde\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
  'first_name' => 'Duilio',
  'last_name' => 'Palacios',
]);

$user->nickname = 'Silence';

unset($user->nickname);

/*var_dump($user->getAttributes());

exit();*/

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)) {
  echo "<p>Nickname: {$user->nickname}</p>";
}