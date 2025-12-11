<?php
use Pecee\SimpleRouter\SimpleRouter;
use App\Models\Model;

include 'vendor/autoload.php';

// отображение всех типов ошибок
ini_set('display_errors', 1);

session_start();

Model::connectDB();

SimpleRouter::get('/', 'MainController@index');
SimpleRouter::post('/post/add', 'MainController@addPost');

// устанавливаем namespace для контроллера
SimpleRouter::setDefaultNamespace('App\Controllers');

// запускаем маршрутизатор
SimpleRouter::start();



