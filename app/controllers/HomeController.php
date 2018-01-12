<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 20:30
 */

class HomeController extends BaseController
{
    /**
     *
     */
    public function home(){
        $this->view = \services\View::make('home')->with('article',Article::first())
            ->withTitle('DropLet :-D')
            ->withKey('OK!')
            ->withKeyKey('OK!');
    }
}