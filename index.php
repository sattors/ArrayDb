<?php

require_once __DIR__ . "/vendor/autoload.php";
use Cache\ArrayDb;

$db = new ArrayDb();
$db->set("key", "author", "Hello");
echo $db->get("key", "author");
