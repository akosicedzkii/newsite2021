<?php

  
$routes->group("main", ["namespace" => "\Modules\Main\Controllers"], function ($routes) {

	// welcome page - URL: /student
	$routes->get("/", "MainController::index");
  

});
