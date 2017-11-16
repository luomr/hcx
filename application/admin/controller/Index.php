<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
	public function index(){
		if(!session('name')){
			return view("login/login");
		}else{
			return view("index/index",[
				"name" => session('name')
				]);
		}
	}
	public function info(){
		$user = db("user")->field("id")->select();
		$a = count($user);
		return view('index/info',['a'=>$a]);
	}
}
?>