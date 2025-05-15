<?php

require_once __DIR__ . "/vendor/autoload.php";
use Cache\ArrayDb;

$db = new ArrayDb();
$db->set("a", "b", "Salom");
echo $db->get("a", "b") . PHP_EOL;
