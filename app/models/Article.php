<?php
/**
 * Created by PhpStorm.
 * User: EricLi
 * Date: 2018/1/12
 * Time: 09:26
 */
class Article
{
    public static function first(){
        $dsn = "mysql:host=127.0.0.1;dbname=DropLet";
        $pdo = new PDO($dsn,"root","toor");
        $pdo->exec("SET CHARACTER SET UTF8");
        $sql = "SELECT * FROM `DL_articles` limit 0,1";
        $row = $pdo->query($sql)->fetch();
        return $row;
    }
}