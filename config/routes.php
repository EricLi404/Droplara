<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 20:05
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('hello', function() {
    echo "成功！";
});

Macaw::get('', 'HomeController@home');

Macaw::get('(:all)', function($route) {
    echo '未匹配到路由<br>'.$route;
});


Macaw::dispatch();