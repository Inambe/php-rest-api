<?php
namespace app;
class Book
{
	protected static $db;
	public static function getData () {
		// Database connection
		// self::$db = new \Slim\PDO\Database(DSN, USR, PWD);
		return ["data"	=>	"Private Data!"];
	}
}
