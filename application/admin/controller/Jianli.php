<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Jianli extends Controller{
	public function index(){
		$list = db("jianli")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("recruitment/jianli");
	}
	public function del(){
		$res = db("jianli")->where("id",input("get.id"))->find();
		$path = $res['path'];
		db("jianli")->where('id',input('get.id'))->delete();
		unlink("D:\phpStudy\WWW\hcx/public/static/home/test/$path");
		return $this->redirect("jianli/index");
	}
}
?>