<?php
namespace App\Core;

class View {

    public static function render($content, $data) {
        // инициализируем шабрлонизатор twing
        $loader = new \Twig\Loader\FilesystemLoader("app/views");
        $twig = new \Twig\Environment($loader);

        echo $twig->render($content . '.php', $data);
    }
    
}