<?php
namespace App\Models;

class Model
{
    public static function connectDB()
    {
        $options = [
            'connection_string' => 'mysql:host=localhost;dbname=guestbook',
            'username' => 'root',
            'password' => ''
        ];

		\ORM::configure($options);
	}

    public static function findAll() 
    {
        return self::table()->findMany();
	}

    public static function findOne($id) 
    {
		return self::table()->findOne($id);
	}

    public static function delete($id)
    {
        return self::findOne($id)->delete();
    }

    public static function table() 
    {
        $table = static::getTable();
		return \ORM::forTable($table);
	}

}