<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Recruitment extends Controller
{
	public function index(){
		$list = db("job")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("recruitment/recruitment");
	}
	public function jump(){
		return view("recruitment/add");
	}
	public function add(){
		db("job")->insert(input("post."));
		return $this->redirect("recruitment/index");
	}
	public function edit(){
		$res = db("job")->where("id",input("get.id"))->find();
		return view("recruitment/edit",['res'=>$res]);
	}
	public function edits(){
		db("job")->where("id",input("post.id"))->update(input("post."));
		return $this->redirect("recruitment/index");
	}
	public function del(){
		db("job")->where("id",input("get.id"))->delete();
		return $this->redirect("recruitment/index");
	}
}
?>