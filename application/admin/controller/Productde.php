<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Productde extends Controller
{
	public function index(){
		$product = db("productde")->order('id desc')->paginate(10);
		$page = $product->render();
		$this->assign('page', $page);
		$this->assign("product",$product);
		return $this->fetch("productde/productde");
	}
	public function jump(){
		return view("productde/add");
	}
	public function add(){
		db("productde")->insert(input("post."));
		return $this->redirect("productde/index");
	}
	public function edit(){
		$res = db("productde")->where('id',input('get.id'))->find();
		return view("productde/edit",['res'=>$res]);
	}
	public function edits(){
		db("productde")->where("id",input('post.id'))->update(input('post.'));
		return $this->redirect("productde/index");
	}
	public function del(){
		$res = db("productde")->where("id",input("get.id"))->find();
		db("productde")->where('id',input('get.id'))->delete();
		return $this->redirect("productde/index");
	}
	public function search(){
		$search = $_POST['search'];
        $where['name'] = array('like',"%$search%");
        $product = db('productde')->where($where)->paginate(10);
        $page = $product->render();
        $this->assign('page', $page);
		$this->assign("product",$product);
		return $this->fetch("productde/productde");
	}
}
?>