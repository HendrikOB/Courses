<?php
/**
 * Created by PhpStorm.
 * User: hendrikob
 * Date: 23/02/17
 * Time: 08:35 PM
 */

use Styde\User;

require '../vendor/autoload.php';

$user = new User(['name' => 'Duilio', 'email' => 'admin@styde.net']);

$user->id = 10;

echo $result = serialize($user);

file_put_contents('../storage/user.txt', $result);