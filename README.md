# TaxSaverManager


This is an application to register your monthly Tax Saver commute ticket so that your company can order it for you

You'll be able to :

- Book months in this year when you want to use the available tax savers
- Cancel specific months (if you go on holidays)
- Find the details of the available tax savers
- And more to come...



## Installing

Download and un-zip the package into the root of your XAMPP, for example:

	C:\xampp\htdocs\TaxSaverManager


Installing TasSaverManager from XAMPP requires three easy steps:
First two steps from phpMyAdmin.

- 1. Create a new database called taxsaver01, by clicking “New” at the top left. Then adding the name and clicking “Create":

- 2.Select taxsaver01 and click Import to select the exported DB, typically from 

	C:\xampp\htdocs\TaxSaverManager\sql\TaxSaver01.sql
	
And then click Go at the bottom.

Las step from the php configuration file holding the details of the Host, User and Password, where the Database details are store: 

	C:\xampp\htdocs\TaxSaverManager\include\config.php

- 3. Set up your Host, User name and password. By default set to root with no password since this is an exercise, of course is highly recommended have a user and password for this enabled in the Database:

<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'TaxSaver01');
?>


## Update SASS 

Once you have sass and compass installed, go to rool of TaxSaver Project from the commad line and lauch you watch for sass files:

 - compass watch

from then on, every change made on sass folder will re-compile all the sass into css/screen.css