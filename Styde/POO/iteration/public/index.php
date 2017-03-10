<?php

require '../vendor/autoload.php';

use Styde\User;
use Styde\LunchBox;

$gordon = new User(['name' => 'Gordon']);

// Daughters

$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

// House
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();
