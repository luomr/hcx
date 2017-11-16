<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Nav extends Controller
{
	public function index(){
		$list = db("nav")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("nav/nav");
	}
	public function jump(){
		return view("nav/add");
	}
	public function add(){
		db("nav")->insert(input("post."));
		return $this->redirect("nav/index");
	}
	public function edit(){
		$list = db("nav")->where("id",input("get.id"))->find();
		return view("nav/edit",['list'=>$list]);
	}
	public function edits(){
		db("nav")->where("id",input("post.id"))->update(input("post."));
		return $this->redirect("nav/index");
	}
	public function del(){
		db("nav")->where("id",input("get.id"))->delete();
		return $this->redirect("nav/index");
	}
}
?>