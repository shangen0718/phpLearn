<?php
ini_set("display_errors", "On");
include_once (__DIR__ . "/../autoload.php");

use FactoryMethod\Factory\BeefBugerFactory;
use FactoryMethod\Factory\ChickenBugerFactory;
use FactoryMethod\Factory\FishBugerFactory;
use FactoryMethod\Factory\Kitchen;

$kitchen = new Kitchen(new BeefBugerFactory());
$kitchen->order();
$kitchen = new Kitchen(new ChickenBugerFactory());
$kitchen->order();
$kitchen = new Kitchen(new FishBugerFactory());
$kitchen->order();