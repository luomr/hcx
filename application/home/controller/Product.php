<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Product extends Controller
{
	public function index(){
		if(is_null(input('name'))){
			$product = db("product")->paginate(9);
			$page = $product->render();
			$nav = db("nav")->select();
			$classified = db("classified")->where("state",1)->select();
			$img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
			$this->assign('img', $img);
			$this->assign('classified',$classified);
			$this->assign('page', $page);
			$this->assign("nav",$nav);
			$this->assign("product",$product);
			return $this->fetch("product/product_list");
		}else{
			$product = db("product")->where("type",input("name"))->paginate(9);
			$page = $product->render();
			$nav = db("nav")->select();
			$classified = db("classified")->where("state",1)->select();
			$img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
			$this->assign('img', $img);
			$this->assign('classified',$classified);
			$this->assign('page', $page);
			$this->assign("nav",$nav);
			$this->assign("product",$product);
			return $this->fetch("product/product_list");
		}
		
	}
	public function classi(){
		$product = db("product")->where("type",input("name"))->paginate(9);
		$page = $product->render();
		$nav = db("nav")->select();
		$classified = db("classified")->where("state",1)->select();
		$img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
        $this->assign('img', $img);
		$this->assign('classified',$classified);
		$this->assign('page', $page);
		$this->assign("nav",$nav);
		$this->assign("product",$product);
		return $this->fetch("product/product_list");
	}
	public function classified(){
		$product = db("product")->where("quality",input('class'))->where("type",input('name'))->paginate(9);
		$page = $product->render();
		$nav = db("nav")->select();
		$classified = db("classified")->where("state",1)->select();
		$img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
        $this->assign('img', $img);
		$this->assign('classified',$classified);
		$this->assign('page', $page);
		$this->assign("nav",$nav);
		$this->assign("product",$product);
		return $this->fetch("product/product_list");
	}
}
?>