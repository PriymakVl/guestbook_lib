<?php
namespace App\Core;

class DB {
	private static $host = "localhost";
	private static $db_name = "guestbook";
	private static $username = "root";
	private static $password = "";

	public static function getConnection(){
		$host_dbname = "mysql:host=" . self::$host . ";dbname=" . self::$db_name;
		\ORM::configure($host_dbname);
		\ORM::configure('username', self::$username);
		\ORM::configure('password', self::$password);
	}
}