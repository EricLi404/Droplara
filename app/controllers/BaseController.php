<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/11
 * Time: 20:30
 */
use \services\View;
use \services\Mail;

class BaseController
{
    protected $view;
    protected $mail;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
    }

    public function __destruct()
    {
        $view = $this->view;
//        instanceof 可以确定一个对象是类的实例、类的子类，还是实现了某个特定接口，并进行相应的操作
        if ($view instanceof View){
            extract($view->data);
            require $view->view;
        }

//        Mail
        $mail = $this->mail;
        if ($mail instanceof Mail){
            $mailer = new \Nette\Mail\SmtpMailer($mail->config);
            $mailer->send($mail);
        }

    }


}