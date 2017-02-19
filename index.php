<?php
require_once("vendor/autoload.php");

use Restaurant\Menu\Components\Mushroom;
use Restaurant\Menu\Components\Onion;
use Restaurant\Menu\Dish\Dish;

$mushroom = new Mushroom();
$mushroom->setName('Pieczarka');
$mushroom->setPrice(12);

$onion = new Onion();
$onion->setName('Cebula');
$onion->setPrice(10);

$dish = new Dish('Main');
$dish->addComponent($mushroom);
$dish->addComponent($onion);

var_dump($dish->getComponents());
var_dump($dish->price());