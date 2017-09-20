<?php
    public function show()
    {
        //echo 'msg/show';
        //获取get参数
        dump(I('get.id'));
        dump(I('get.name'));
        dump(I('get.'));     //获取所有的get参数，数组形式
        dump(I('name'));     //获取参数，首先查看get，然后查看post
        //过滤请求参数：第二个参数是默认值，第三个参数是调用过的
        dump(I('get.pswd','123456','md5'));
    }
