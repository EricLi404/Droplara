<?php

use services\Mail;
use services\Redis;

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
    public function home()
    {

        /* view sample
        $this->view = \services\View::make('home')->with('article',Article::first())
            ->withTitle('DropLet :-D')
            ->withKey('OK!')
            ->withKeyKey('OK!');
       */
        /* mail sample
//        $this->mail = Mail::to(['test1@gmail.com','test2@gmail.com'])
        $this->mail = Mail::to('test@gmail.com')
            ->subject('Hello World')
            ->htmlBody('<h1>Hello World from DropLet</h1>');
    */
        /* redis sample
            Redis::set('key','value',3000,'ms');
               echo Redis::get('key');
        */
    }


}