<?php
    public function store()
    {
        $status = true;    //保存状态（数据库执行返回的结果）
        //保存数据到数据库中
        if($status){
            //保存成功，跳转到首页
            //$this->success('记录保存成功，将跳转到成人网站！','http://www.baidu.com',3);
            $this->redirect('/home/msgs/index',[],5,'跳转成功');
        }else{
            //保存失败，返回上一网页
            $this->error('数据保存失败，请重试！');
        }
    }
