<?php
//start session_cache_expire
session_start();

//Includes
require('config.php');

require('classes/Message.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');




$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
    $controller->executeAction();
}