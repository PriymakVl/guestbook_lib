<?php
namespace App\Models;

class Post extends Model
{

	public static function getTable()
	{
		return 'posts';
	}

	public static function add($data) 
	{
		$data['date'] = time();
		return self::table()->create()->set($data)->save();
	}

}