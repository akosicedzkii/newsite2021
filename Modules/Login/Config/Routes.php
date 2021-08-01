<?php


$routes->group("login", ["namespace" => "\Modules\Login\Controllers"], function ($routes) {

	// welcome page - URL: /student
	$routes->get("/", "LoginController::index");
	$routes->get("verify", "LoginController::verify");


});
