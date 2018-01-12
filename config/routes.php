<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 20:05
 */
use NoahBuscher\Macaw\Macaw;



Macaw::get('', 'HomeController@home');


Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();
