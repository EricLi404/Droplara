<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 14:32
 */


//  AutoLoad
require 'vendor/autoload.php';


//whoops PHP错误处理包,调试web程序的时候，描述代码执行过程，准确定位错误的原因及代码的位置。
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

define("PATH",dirname(__FILE__));

$config = new Noodlehaus\Config(PATH.'/config/config.php');


print_r($config->all());