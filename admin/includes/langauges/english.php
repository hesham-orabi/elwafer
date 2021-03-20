<?php

  function english($pharse){

  		static $lang=array(

  			// Navbar links
  			'HOME_ADMIN' => 'Home',
  			'CATEGORIES' => 'Categories',
  			'ITEMS'      => 'Items',
  			'MEMBERS'    => 'Members',
  			'STATISTICS' => 'Statistics',
  			'LOGS'       => 'Logs'

  		);
  		return $lang[$pharse];
  }

