<?php

session_start();

//Include config
require_once('config/config.php');


//Helpers
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');


require_once('libraries/Topic.php');
require_once('libraries/Template.php');
require_once('libraries/Database.php');
require_once('libraries/User.php');
require_once('libraries/Validator.php');



function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
} 