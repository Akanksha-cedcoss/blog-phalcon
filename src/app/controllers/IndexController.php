<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        //order by
        // $this->view->users = Users::find (['order' => 'name']);
        //$this->view->users = Users::findFirst('name = "ab" and id=2');
        // $this->view->users = Users::find();
        // $posts = new Posts();
        $this->view->posts=Posts::find();
    }
    public function singleBlogAction()
    {
        return 'hello';
    }
}
