<?php

  
$routes->group("users", ["namespace" => "\Modules\Users\Controllers"], function ($routes) {

	// welcome page - URL: /student
	$routes->get("/", "UsersController::index");
  
    // other page - URL: /student/other-method
	$routes->get("other-method", "UsersController::otherMethod");

});
