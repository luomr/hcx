<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
use \think\Validate;
use think\Session;
class Register extends Controller
{
	public function index(){
		return view("register/register",['name'=> null,'name2'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'phone'=> null,'email'=> null]);
	}
	public function register(){
		$res = input('post.');
		$user = db("user")->field("username")->select();
		if($res['name'] == null){
			return view("register/register",['name'=>"用户名不能为空,必须2~6之间",'name2'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'phone'=> null,'email'=> null]);
		}
		foreach($user as $v){
			if($res['name'] == $v['username']){
			return view("register/register",['name2'=>"用户名已拥有",'name'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'phone'=> null,'email'=> null]);
		}
		}
		
		if($res['pass1'] !== $res['pass2']){
			return view("register/register",['pass'=>"两次密码不一致",'name'=> null,'name2'=> null,'pass2'=> null,'age'=> null,'phone'=> null,'email'=> null]);
		}
		if(!preg_match("/^[a-zA-Z0-9]{6,10}$/",$res['pass1'])){
			return view("register/register",['pass2'=>"密码长度在6~16之间，只能包含字符、数字",'name'=> null,'name2'=> null,'pass'=> null,'age'=> null,'phone'=> null,'email'=> null]);
		}
		if(!preg_match("/120|((1[0-1]|\d)?\d)/",$res['age'])){
			return view("register/register",['age'=>"年龄范围1~120",'name'=> null,'name2'=> null,'pass'=> null,'pass2'=> null,'phone'=> null,'email'=> null]);
		}
		if(!preg_match("/^0{0,1}(13[0-9]|15[1-9]|153|156|18[1-9])[0-9]{8}$/",$res['phone'])){
			return view("register/register",['phone'=>"手机号格式错误",'name'=> null,'name2'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'email'=> null]);
		}
		if(!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/",$res['email'])){
			return view("register/register",['email'=>"邮箱格式错误",'name'=> null,'name2'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'phone'=> null]);
		}

			$data = array('username'=>input('post.name'),'pass'=>md5(input("post.pass1")),'age'=>input('post.age'),'sex'=>input('post.sex'),'phone'=>input('post.phone'),'email'=>input('post.email'),'address'=>input('post.address'),'code'=>input('post.code'),'state'=>input('post.state'));
			$str = $this->validate($data,[
		   		'code'=>'require|captcha'
			]);
			if($str !== true){
				return view('register/register',['name'=> null,'name2'=> null,'pass'=> null,'pass2'=> null,'age'=> null,'phone'=> null,'email'=> null]);
			}
			$res = array('username'=>input('post.name'),'pass'=>md5(input("post.pass1")),'age'=>input('post.age'),'sex'=>input('post.sex'),'phone'=>input('post.phone'),'email'=>input('post.email'),'address'=>input('post.address'),'state'=>input('post.state'));
			$res = db("user")->insert($res);
			if($res){
				   $email = input('post.email');
			        // dump($email);
			        $num = md5(microtime());
			        // dump($num);
			        Session::set($email,$num);
					$m = email($email,"广州市惠焯烜服装设计有限公司激活邮件","<a href='http://www.hcx.com/home/register/jh?email={$email}&num={$num}'>点击链接完成注册</a>");
			        if ($m) {
			            $this->success("请到邮箱里去激活账号！",'register/index');
			        }
		       } else {
		           
		            $this->error('注册失败');
		        }
		
	}
	public function jh(){
		$email = input('email');
        $num = input('num');
        if (Session::get($email) == $num) {
            //修改状态
            $state = 2;
            $res = array("state"=>$state);
            db("user")->where("email",$email)->update($res);
            $this->success("账号激活成功！");
        }else {
		           
		   $this->error('激活失败');
		 }
	}
	public function jump(){
		return view("register/find");
	}
	public function find(){
		if(input("post.pass1") == input("post.pass2")){
			$data = array('username'=>input('post.name'),'pass'=>md5(input("post.pass1")),'code'=>input('post.code'));
			$str = $this->validate($data,[
		   		'code'=>'require|captcha'
			]);
			if($str !== true){
				return view('register/find');
			}
			$res = db("user")->where("username",input('post.name'))->update(['pass'=>md5(input("post.pass1"))]);
			if($res){
		           $this->success('修改成功', 'login/login');
		    } else {
		            $this->error('修改失败');
		    }
		}else{
			$this->error('密码不一致');
		}
	}
}
?>