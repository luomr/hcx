<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Classified extends Controller
{
	public function index(){
		$list = db("classified")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("classified/classified");
	}
	public function jump(){
		$res = db("nav")->where("state",2)->field('name')->select();
		// dump($res);
		return view("classified/add",['res'=>$res]);
	}
	public function add(){
		$res = input('post.');
		$id = db("nav")->where('name',$res['fname'])->field('id')->find();
		$path = $id['id'].',';
		$list = array("name"=>$res['name'],"fname"=>$res['fname'],"path"=>$path,"state"=>$res['state']);
		$db = db("classified")->insert($list);
		if($db){
			return $this->redirect("classified/index");
		}	
	}
	public function edit(){
		$res = db("classified")->where("id",input("get.id"))->find();
		$id = db("nav")->where('name',$res['fname'])->field('id')->find();
		$list = array("id"=>$res['id'],"name"=>$res['name'],"fname"=>$res['fname'],"state"=>$res['state']);
		$res = db("nav")->where("state",2)->field('name')->select();
		return view("classified/edit",['list'=>$list,'res'=>$res]);
	}
	public function edits(){
		$res = input('post.');
		$id = db("nav")->where('name',$res['fname'])->field('id')->find();
		$path = $id['id'].',';
		$list = array("name"=>$res['name'],"fname"=>$res['fname'],"path"=>$path,"state"=>$res['state']);
		dump($list);
		db("classified")->where("id",$res['id'])->update($list);
		return $this->redirect("classified/index");
	}
	public function del(){
		db("classified")->where("id",input("get.id"))->delete();
		return $this->redirect("classified/index");
	}
}
?>