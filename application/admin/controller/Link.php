<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Link extends Controller
{
	public function index(){
		$list = db("link")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("link/link");
	}
	public function jump(){
		return view("link/add");
	}
	public function add(){
		db("link")->insert(input("post."));
		return $this->redirect("link/index");
	}
	public function edit(){
		$list = db("link")->where("id",input("get.id"))->find();
		return view("link/edit",['list'=>$list]);
	}
	public function edits(){
		db("link")->where("id",input("post.id"))->update(input("post."));
		return $this->redirect("link/index");
	}
	public function del(){
		db("link")->where("id",input("id"))->delete();
		return $this->redirect("link/index");
	}
}
?>