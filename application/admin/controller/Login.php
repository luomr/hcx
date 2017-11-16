<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Session;
class Login extends Controller
{
	public function index(){ 
		$arr = db("adminuser")->where("username",input('post.name'))->find();
		if($arr['static'] == "是"){
			return view('login/login');
		}
		$data = array("username"=>input("post.name"),"pass"=>md5(input("post.pass").input("post.name")),"code"=>input("post.code"));
		$str = $this->validate($data,[
	   		'code'=>'require|captcha'
		]);
	
		if($str !== true){
			return view('login/login');
		}

		$res = db("adminuser")->where('username',input('post.name'))->find();
		if($res['username'] == input('post.name')){
			if($res['pass'] == md5(input("post.pass").input("post.name"))){
				session("name",$res);
				return $this->redirect('index/index');
			}else{
				return view('login/login');
			}
		}else{
			return view('login/login');
		}
	}
	public function loginout(){
		session('name',null);
		return view("login/login");
	}
	public function find(){
		return view("login/find");
	}
	public function update(){
		$data = array("username"=>input("post.name"),"pass"=>md5(input("post.pass").input("post.name")),"code"=>input("post.code"));
		$str = $this->validate($data,[
	   		'code'=>'require|captcha'
		]);
		// dump($str);
		if($str !== true){
			return view('login/find');
		}
		$res = array("pass"=>md5(input("post.pass").input("post.name")));
		$res = db("adminuser")->where('username',input('post.name'))->update($res);
		if($res){
			return $this->success('修改成功','login/index');
		}else{
				return $this->error('修改失败');
		}
	}
}
?>