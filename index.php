<?php
use Pecee\SimpleRouter\SimpleRouter;

// отображение всех типов ошибок
ini_set('display_errors', 1);

session_start();

require_once __DIR__ . '/vendor/autoload.php';

App\Core\DB::getConnection();

SimpleRouter::get('/', 'MainController@index');
SimpleRouter::post('/post/add', 'MainController@addPost');

// устанавливаем namespace для контроллера
SimpleRouter::setDefaultNamespace('App\Controllers');

// запускаем маршрутизатор
SimpleRouter::start();



