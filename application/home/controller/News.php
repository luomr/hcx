<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class News extends Controller
{
	public function index(){
		$img = db("haibao")->where("state",1)->where("explain","新闻动态")->find();
		$news = db("new")->order('time desc')->paginate(4);
		$page = $news->render();
		$nav = db("nav")->select();
		$this->assign('img', $img);
		$this->assign('page', $page);
		$this->assign("nav",$nav);
		$this->assign("news",$news);
		return view("news/news_list");
	}
}
?>