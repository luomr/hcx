<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Contact extends Controller
{
	public function index(){
		$img = db("haibao")->where("state",1)->where("explain","联系我们")->limit(1)->find();
		$cominfo = db("cominfo")->select();
		$nav = db("nav")->select();
		return view("contact/contact",["nav"=>$nav,"cominfo"=>$cominfo,"img"=>$img]);
	}
	public function map(){
		return view("contact/map");
	}
}
?>