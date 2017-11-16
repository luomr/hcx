<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class About extends Controller
{
	public function index(){
		$img = db("haibao")->where("state",1)->where("explain","公司简介")->find();
		$about = db("about")->where("state","否")->select();
		$nav = db("nav")->select();
		return view("about/about",["nav"=>$nav,"img"=>$img,"about"=>$about]);
	}
}
?>