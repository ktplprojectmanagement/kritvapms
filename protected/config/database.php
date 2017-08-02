<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=52.172.200.192;dbname=kritvapms',
	'emulatePrepare' => true,
	'username' => 'kritvapms',
	'password' => 'How@u@280515',
	'charset' => 'utf8',
	
);
