<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    public function index()
    {	
    	$nav = db("nav")->select();
    	$banner = db("banner")->where("state",1)->select();
    	$link = db("link")->select();
    	$new = db("new")->limit(5)->order('time desc')->select();
    	return view("index/index",["banner"=>$banner,"nav"=>$nav,"link"=>$link,"new"=>$new]);
	}
	public function search(){
        $search = $_POST['tit'];
        $where['name'] = array('like',"%$search%");
        $product = db('product')->where($where)->paginate(9);
        $page = $product->render();
        $nav = db("nav")->select();
        $classified = db("classified")->select();
        $img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
        $this->assign('img', $img);
        $this->assign('classified',$classified);
        $this->assign('page', $page);
        $this->assign("nav",$nav);
        $this->assign("product",$product);
        return $this->fetch("product/product_list");
	}
}
