<?php

//require MYSQL Connection
require ('database/DBController.php');

//require Product Class
require ('database/menu.php');

// DB controller object
$db = new DBController();

//Product object
$menu = new Menu($db);

// print_r($menu->getData());