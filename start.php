<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/12
 * Time: 10:41
 */
use Illuminate\Database\Capsule\Manager as Capsule;


//定义目录分隔符
define('DS', DIRECTORY_SEPARATOR);
// 定义 BASE_PATH
define('BASE_PATH', __DIR__.DS);

// Autoload 自动载入

require BASE_PATH.'/vendor/autoload.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection(require BASE_PATH.'/config/database.php');

$capsule->bootEloquent();

// Whoops
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();