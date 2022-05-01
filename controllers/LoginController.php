<?php

namespace Controllers;

use MVC\Router;

class LoginController {
	public static function login(Router $router) {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}
		// Render view
		$router->render('auth/login', [
			'title' => 'Login'
		]);
	}

	public static function logout() {
		print "hasta la pocima wey";
	}

	// Regitser methods
	public static function register(Router $router) {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}

		// Render view
		$router->render('auth/register', [
			'title' => 'Register'
		]);
	}

	// Forget password form
	public static function forgetPassword(Router $router) {

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}

		$router->render('auth/forget', [
			'title' => 'Forget Password'
		]);
	}
	// Restore password form
	public static function restorePassword(Router $router) {

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}

		$router->render('auth/restore', [
			'title' => 'Restore Password'
		]);
	}

	public static function message(Router $router) {
		$router->render('auth/message', [
			'title' => 'Account Created'
		]);
	}

	public static function confirm() {
		echo "nmms si estas we";
	}
}
