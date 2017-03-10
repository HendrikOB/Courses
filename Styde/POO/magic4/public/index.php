<?php
/**
 * Created by PhpStorm.
 * User: hendrikob
 * Date: 23/02/17
 * Time: 08:35 PM
 */

use Styde\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Styde')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));