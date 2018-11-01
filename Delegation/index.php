<?php
ini_set("display_errors", "On");
include_once (__DIR__ . "/../autoload.php");

use Delegation\Factory\BeefBuger;
use Delegation\Factory\Kitchen;

$kitchen = new Kitchen(new BeefBuger());

$kitchen->prepareIngredient();
$kitchen->cooking();
$kitchen->package();
