<?php

namespace Model;

class ActiveRecord {
	// Database
	protected static $db;
	protected static $table = '';
	protected static $columnDB = '';

	// Alerts and messages
	protected static $alerts = [];

	// Define db connecion

	public static function setDB($database) {
		self::$db = $database;
	}
	public static function setAlerts($tipo, $mensaje) {
		static::$alerts[$tipo][] = $mensaje;
	}
	// Validación
	public static function getAlerts() {
		return static::$alerts;
	}

	public function validate() {
		static::$alerts = [];
		return static::$alerts;
	}
}
