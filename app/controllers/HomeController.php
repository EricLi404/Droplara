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
    public function home(){
//        $this->view = \services\View::make('home')->with('article',Article::first())
//            ->withTitle('DropLet :-D')
//            ->withKey('OK!')
//            ->withKeyKey('OK!');

//        $this->mail = Mail::to(['1043283601@qq.com','leiflyy@outlook.com'])
//        $this->mail = Mail::to('1043283601@qq.com')
//            ->subject('Hello!!')
//            ->htmlBody('<h1>Hello~~~~~~~~</h1>');


        Redis::set('key','444',3000,'ms');
        echo Redis::get('key');

    }


}