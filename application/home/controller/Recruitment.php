<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Recruitment extends Controller
{
	public function index(){
		$job = db("job")->where("id",input("get.id"))->find();
		$nav = db("nav")->select();
		$img = db("haibao")->where("state",1)->where("explain","企业招聘")->find();
		$this->assign('img', $img);
		$this->assign("nav",$nav);
		$this->assign("job",$job);
		return $this->fetch("recruit/recruitment");
	}
	public function add(){
		$file = request()->file('file');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	  	$info = $file->move(ROOT_PATH . 'public' . DS . '/static/home/test');
	   if($info){
	       echo $info->getSaveName();
	       echo $info->getFilename();
	    }else{
	       // 上传失败获取错误信息
	        echo $file->getError();
	   }
	   $list = db("job")->where("id",input("post.id"))->field("name")->find();
	   $res = ["job"=>$list['name'],"name"=>$info->getFilename(),"path"=>$info->getSaveName()];
	   $result = db("jianli")->insert($res);
	   if($result){
	   		$this->success('简历提交成功');
	   }else{
	   		$this->error('简历提交失败');
	   } 
	}
}
?>