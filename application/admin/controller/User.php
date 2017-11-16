<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class User extends Controller
{
	public function index(){
		$list = db("user")->order('id desc')->paginate(10);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("user/user");
	}
	public function del(){
		$a = db("user")->where("id",input("get.id"))->delete();
		return $this->redirect("user/index");
	}
}
?>