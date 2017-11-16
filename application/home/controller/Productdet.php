<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Productdet extends Controller
{
	public function index(){
		$product = db("product")->where("id",input("get.id"))->find();
		$productde = db("productde")->where("name",$product['name'])->find();
		$nav = db("nav")->select();
		$img = db("haibao")->where("state",1)->where("explain","产品中心")->find();
		$this->assign('img', $img);
		$this->assign("nav",$nav);
		$this->assign("product",$product);
		$this->assign("productde",$productde);
		return $this->fetch("product/product_details");
	}
}
?>