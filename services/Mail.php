<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/12
 * Time: 13:54
 */

namespace services;
use Nette\InvalidArgumentException;
use Nette\Mail\Message;

class Mail extends Message
{

//    TODO  重构
//    TODO  发送多封邮件时失败
    public $config;

    protected $from;
    protected $to;
    protected $subject;
    protected $htmlBody;

    /**
     * Mail constructor.
     */
    public function __construct($to)
    {
        $this->config=require BASE_PATH.'config/mail.php';
        $this->setFrom($this->config['username']);
        if (is_array($to)){
            foreach ($to as $email){
                $this->addTo($email);
            }
        }else{
            $this->addTo($to);
        }
    }

    public function from($from=null){
        if (!$from){
            throw new InvalidArgumentException("邮件发送地址不能为空");
        }else{
            $this->setFrom($from);
            return $this;
        }
    }

    public function subject($subject=null){
        if (!$subject){
            throw new InvalidArgumentException("邮件标题不能为空");
        }else{
            $this->setSubject($subject);
            return $this;
        }
    }

    public function htmlBody($htmlBody = null){
        if (!$htmlBody){
            throw new InvalidArgumentException("邮件内容不能为空");
        }else{
            $this->setHtmlBody($htmlBody);
            return $this;
        }
    }

    public static function to($to=null){
        if (!$to){
            throw new InvalidArgumentException("邮件接受地址不能为空");
        }else{
            return new Mail($to);
        }
    }




}