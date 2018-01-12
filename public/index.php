<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 20:03
 */
// 定义 PUBLIC_PATH

define('PUBLIC_PATH', __DIR__);

// 启动器

require PUBLIC_PATH.'/../start.php';

// 路由配置、开始处理
//其他所有操作都要在路由分配之前完成
require BASE_PATH.'/config/routes.php';



