<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        //return '<h1>Hello!!!</h1>';
    }
    public function loginAction()
    {
        $email =  $this->request->getPost('typeEmail');
        $password =  $this->request->getPost('typePassword');
        $user = Users::findFirst('email = "abc@gmail.com" and password="'.$password.'"');

        if ($user) {
            $this->view->message = "Logged in succesfully";
        } else {
            $this->view->message = "Not logged in due to following reason: <br>";
        }
    }
}