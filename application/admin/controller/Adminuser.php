<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Adminuser extends Controller
{
	public function Index(){
		$adminuser = db("adminuser")->order('id desc')->paginate(1);
		$page = $adminuser->render();
		$this->assign('page', $page);
		$this->assign("adminuser",$adminuser);
		return $this->fetch("adminuser/adminuser");
	}
	public function jump(){
		if(session('name')['state'] != '超级管理'){
			return $this->redirect("adminuser/index");
		}
		return view("adminuser/add");
	}
	public function add(){
		$res = array("username"=>input("post.name"),"pass"=>md5(input("post.pass").input("post.name")),"state"=>input("post.state"),"static"=>input("post.static"));
		dump($res);
		db("adminuser")->insert($res);
		return $this->redirect("adminuser/index");
	}
	public function edit(){
		if(session('name')['state'] != '超级管理'){
			return $this->redirect("adminuser/index");
		}
		$list = db("adminuser")->where("id",input('id'))->find();
		return view('adminuser/edit',['list'=>$list]);
	}
	public function edits(){
		$res = array("state"=>input("post.state"),"static"=>input("post.static"));
		db('adminuser')->where('id',input("post.id"))->update($res);
		return $this->redirect("adminuser/index");
	}
	public function del(){
		if(session('name')['state'] != '超级管理'){
			return $this->redirect("adminuser/index");
		}
		db("adminuser")->where("id",input('id'))->delete();
		return $this->redirect("adminuser/index");
	}
}
?>