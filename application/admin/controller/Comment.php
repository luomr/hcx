<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Comment extends Controller
{
	public function index(){
		$res = db("comment")->order('id desc')->paginate(10);
		$page = $res->render();
		$this->assign('page', $page);
		$this->assign("res",$res);
		return $this->fetch("comment/comment");
	}
	public function jump(){
		return view("comment/add");
	}
	public function add(){
		$res = input("post.");
		$res = db("comment")->insert($res);
		return $this->redirect("comment/index");
	}
	public function edit(){
		$res = db("comment")->where("id",input("get.id"))->find();
		return view("comment/edit",['res'=>$res]);
	}
	public function edits(){
		db("comment")->where("id",input("post.id"))->update(input("post."));
		return $this->redirect("comment/index");
	}
	public function del(){
		db("comment")->where("id",input("get.id"))->delete();
		return $this->redirect("comment/index");
	}
}
?>