<?php

session_start();

require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');


require('controllers/home.php');
require('controllers/guests.php');
require('controllers/users.php');


require('models/home.php');
require('models/guest.php');
require('models/user.php');

$bootsrap = new Bootstrap($_GET);
$controller = $bootsrap->createController();
if($controller){
	$controller->executeAction();
}