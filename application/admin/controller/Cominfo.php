<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Cominfo extends Controller
{
	public function index(){
		$cominfo = db("cominfo")->order('id desc')->paginate(10);
		$page = $cominfo->render();
		$this->assign('page', $page);
		$this->assign("cominfo",$cominfo);
		return $this->fetch("cominfo/cominfo");
	}
	public function jump(){
		return view("cominfo/add");
	}
	public function add(){
		db("cominfo")->insert(input('post.'));
		return $this->redirect("cominfo/index");
	}
	public function edit(){
		$res = db("cominfo")->where('id',input('get.id'))->find();
		return view("cominfo/edit",['res'=>$res]);
	}
	public function edits(){
		db("cominfo")->where("id",input('post.id'))->update(input('post.'));
		return $this->redirect("cominfo/index");
	}
	public function del(){
		db("cominfo")->where('id',input('get.id'))->delete();
		return $this->redirect("cominfo/index");
	}
}
?>