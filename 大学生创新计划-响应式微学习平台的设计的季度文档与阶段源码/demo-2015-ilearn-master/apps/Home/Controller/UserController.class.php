<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {



	//用户注册页面
    public function register(){
        $this->showtype();
    	$this->display();
    }

    //用户登录页面
    public function login(){
    	$this->showtype();
    	$this->display();
    }

//用户信息资料
    public function userinfo(){
        $this->showtype();
        $this->isuser();
        $this->display();
    }

//查询用户收录的教程
    public function userlikecourse(){
        $this->showtype();
        $this->isuser();
        $userid = session("userinfo.uid");
        $userlikecourseview = D('UserlikecourseView');
        $c['likeuserid'] = $userid;
        $data = $userlikecourseview->where($c)->select();
        $this->assign('userlikecourse',$data);
        $this->display();

    }

//查询用户分享的教程
    public function usersharecourse(){
        $this->showtype();
        $this->isuser();
        $cuserid = session("userinfo.uid");
        $course=M('course');
        $data = $course->mycourse($cuserid);
        $this->assign('usersharecourse',$data);
        $this->display();

    }


//业务处理=================================================
   	//用户注册业务处理
    public function isregister(){
    	$user = D('user');
    	$name = I('post.uname');
    	$pwd1 = I('post.pwd1');
    	$pwd2 = I('post.pwd2');
    	$email = I('post.email');
      

    	if($name && ($pwd1==$pwd2))
    	{
            $pwd = $pwd2;
            //先查看是否已经存在相同用户名
            $samename = $user ->samename($name);
            if(!$samename)
           {    $rs = $user->adduser($name,$pwd,$email);}
    	}

        if($rs)
        {
            $msg = '恭喜你，注册成功。';
        $url = '/user/login';
        }
        else{
            $msg = '对不起，注册失败';
              $url = '/user/register';
        }
        $this->issuccess($msg,$url);

    }

    //用户登录业务处理
    public function islogin(){
    	$user = D('user');
    	$name = I('post.name');
    	$pwd = I('post.pwd');

    	if($name && $pwd)
    	{
    		$rs = $user->isuser($name,$pwd);
    	}

        if($rs)
            {  
                session('userinfo',$rs);          
                $msg='恭喜你！登录成功';
                $url = '/user/userlikecourse';     
        }
        else{
            $msg='抱歉，登录失败';
            $url='/user/login';
        }
        $this->issuccess($msg,$url);

    }


//注销
    public function logout(){
        session('userinfo',null); // 删除name
        $userinfo = session('userinfo');
        if($userinfo)
        {
            $msg='注销失败';
            $url = '/user/userlikecourse';
        }
        else{
            $msg='注销成功';
            $url = '/';

        }
          $this->issuccess($msg,$url);
    }



}