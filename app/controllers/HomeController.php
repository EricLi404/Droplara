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
//        echo "Controller Success!!!";
        Article::first();
        require dirname(__FILE__) . '/../views/home.php';
    }
}