<?php
namespace App\Core;

class View {

     public static function render($layout, $data) {
        $loader = new \Twig\Loader\FilesystemLoader("views");
        $twig = new \Twig\Environment($loader);
        $layout_path = "layouts/" . $layout . '.php';
        echo $twig->render($layout_path, $data);
    }
    
}