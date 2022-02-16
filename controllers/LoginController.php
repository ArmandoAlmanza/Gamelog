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
		echo "hast ala pocima wey";
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
	public static function forgetPassword() {
		echo "se me olvido wey";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}
	}
	// Restore password form
	public static function restorePassword() {
		echo "escribela de nuez wey";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}
	}

	public static function message() {
		echo "he we ya esta";
	}

	public static function confirm() {
		echo "nmms si estas we";
	}
}
