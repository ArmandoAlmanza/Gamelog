<?php

require_once __DIR__ . '/../includes/app.php';


use MVC\router;
use Controllers\LoginController;

$router = new Router();

// Login

$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Register

$router->get('/register', [LoginController::class, 'register']);
$router->post('/register', [LoginController::class, 'register']);

// Forget the password
$router->get('/forget-password', [LoginController::class, 'forgetPassword']);
$router->post('/forget-password', [LoginController::class, 'forgetPassword']);
// Restore the password
$router->get('/restore-password', [LoginController::class, 'restorePassword']);
$router->post('/restore-password', [LoginController::class, 'restorePassword']);
// Confirm the account
$router->get('/message', [LoginController::class, 'message']);
$router->get('/confirm', [LoginController::class, 'confirm']);


// Validar rutas
$router->validateRoutes();
