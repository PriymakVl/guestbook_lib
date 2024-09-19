<?php
namespace App\Controllers;

class BaseController 
{

    protected $layout = 'layout';

    public function render($content, $data = []) 
    {
        $data['content'] = $content;
        $data['message'] = \App\Helpers\Message::display();
        \App\Core\View::render($this->layout, $data);
    }

    public function addMessage($result, $key)
    {
        $type = $result ? 'success' : 'error';
        \App\Helpers\Message::add($type, $key);
        return $this;
    }

    public function redirect($url)
    {
        header("Location: /" . $url);
        exit;
    }

}