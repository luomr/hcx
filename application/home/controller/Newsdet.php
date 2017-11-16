<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Newsdet extends Controller
{
	public function index(){
		$img = db("haibao")->where("state",1)->where("explain","新闻动态")->find();
		$new = db("new")->where("id",input("get.id"))->find();
		$comment = db("comment")->where("sid","eq",input("get.id"))->order('id desc')->select();
		$nav = db("nav")->select();
		$this->assign('img', $img);
		$this->assign("nav",$nav);
		$this->assign("new",$new);
		$this->assign("comment",$comment);
		return $this->fetch("news/new_details");
	}
	public function add(){
		if(session('username')){
			if(!input('post.comment')){
				$this->error('写点东西再发表吧');
			}else{
				$result = db("comment")->insert(input('post.'));
				if($result){
		         $this->success('发布成功');
		       } else {
		            $this->error('发布失败');
		        }
			}
		}else{
			return view("login/login");
		}
	}
}
?>