<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/12
 * Time: 10:47
 */

namespace services;



class View
{
    const VIEW_BASE_PATH = 'app/views/';
    public $view;
    public $data;

    /**
     * View constructor.
     * @param $view
     */
    public function __construct($view)
    {
        $this->view = $view;
    }

    private static function getFilePath($viewName){
        $filePath = str_replace('.','/',$viewName);
        return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
    }

    public static function make($viewName = null){
        if (!$viewName){
            throw new \InvalidArgumentException("视图名称不能为空！！！");
        }else{
            $viewFilePath  = self::getFilePath($viewName);
            if (is_file($viewFilePath)){
                return new View($viewFilePath);
            }else{
                throw new \UnexpectedValueException($viewFilePath."视图文件不存在！！！");
            }
        }
    }

    public function with($key,$value = null){
        $this->data[$key] = $value;
        return $this;
    }

    public function __call($name, $arguments)
    {
        if (starts_with($name,'with')){
//            TODO   snake_case 啥意思？
            return $this->with(snake_case(substr($name,4)),$arguments[0]);
        }else{
            throw new \BadMethodCallException("方法{$name}不存在！！！");
        }
    }


}