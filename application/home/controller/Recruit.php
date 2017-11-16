<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Recruit extends Controller
{
	public function index(){
		$job = db("job")->order('time desc')->paginate(10);
		$page = $job->render();
		$nav = db("nav")->select();
		$img = db("haibao")->where("state",1)->where("explain","企业招聘")->find();
		$this->assign('img', $img);
		$this->assign('page', $page);
		$this->assign("nav",$nav);
		$this->assign("job",$job);
		return view("recruit/recruit");
	}
}
?>