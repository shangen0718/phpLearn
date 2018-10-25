<?php
ini_set("display_errors", "On");
include_once (__DIR__ . "/../autoload.php");

use SimpleFactory\Factory\BugerFactory;
use SimpleFactory\Factory\BeefBuger;
use SimpleFactory\Factory\Kitchen;

$kitchen = new Kitchen(new BugerFactory());

$kitchen->order('beefBuger');
$kitchen->order('chickenBuger');
$kitchen->order('fishBuger');