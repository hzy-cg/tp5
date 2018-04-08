<?php
namespace app\index\controller;

class Index
{
    public function index(){
       header("Content-type:text/html;charset=utf-8");
//        $ob=new \workerman\Worker();
        $objs= new \workerman\WebServer('127.0.0.1:6379');
        $objs->run();
    }

    public function hello($name = 'ThinkPHP5'){
        return 'hello,' . $name;
    }
}
