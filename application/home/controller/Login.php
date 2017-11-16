<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Login extends Controller
{
	public function index(){
		return view("login/login");
	}
	public function login(){
		$data = array('username'=>input('post.name'),'pass'=>md5(input("post.pass")),'code'=>input('post.code'));
		$str = $this->validate($data,[
	   		'code'=>'require|captcha'
		]);
		if($str !== true){
			return view('login/login');
		}
		
		$res = db("user")->where('username',input('post.name'))->find();
		if($res['state'] == 2){
			if($res['username'] == input('post.name')){
			if($res['pass'] == md5(input("post.pass"))){
				session("username",$res['username']);
				return $this->redirect('index/index');
			}else{
				return view('login/login');
				}
			}else{
				return view('login/login');
			}
		}else{
			return view('login/login');
		}
		
	}
	public function loginout(){
		session("username",null);
		return $this->redirect('index/index');
	}
}
?>