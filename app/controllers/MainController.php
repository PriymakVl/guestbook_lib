<?php
namespace App\Controllers;

use App\Models\Post;

class MainController extends BaseController 
{

    public function index()
    {
		$posts = Post::findAll();
        $this->render('main/index', ['posts' => $posts]);
    }


    public function addPost()
    {
        $v = new \Valitron\Validator($_POST);
        $v->rule('required', ['author', 'text']);
        $result_validate = $v->validate();
        // $v->errors();
        if ($result_validate) {
            $_POST['date'] = time();
            $result = Post::table()->create()->set($_POST)->save();
            $this->addMessage($result, 'add_post');
        }
        else {
            $this->addMessage($result_validate, 'empty_field');
        }
        $this->redirect('');
    }

}