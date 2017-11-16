<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Product extends Controller
{
	public function index(){
		$product = db("product")->order('id desc')->paginate(5);
		$page = $product->render();
		$this->assign('page', $page);
		$this->assign("product",$product);
		return $this->fetch("product/product");
	}
	public function jump(){
		$res = db("nav")->where("state",2)->field('name')->select();
		return view("product/add",["res"=>$res]);
	}
	public function add(){
		// 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'product');
	   if($info){
	       // 成功上传后 获取上传信息
	       // 输出 jpg
	       echo $info->getExtension();
	        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	       echo $info->getSaveName();
	        // 输出 42a79759f284b767dfcb2a0197904287.jpg
	       echo $info->getFilename(); 
	    }else{
	       // 上传失败获取错误信息
	       echo $file->getError();
	  }
	  $res = array("img"=>$info->getSaveName(),"name"=>input('post.name'),"quality"=>input('post.quality'),"price"=>input('post.price'),"explain"=>input('post.explain'),"type"=>input('post.type'));
		db("product")->insert($res);
		return $this->redirect("product/index");
	}
	public function edit(){
		$nav = db("nav")->where("state",2)->field('name')->select();
		$res = db("product")->where('id',input('get.id'))->find();
		return view("product/edit",['res'=>$res,'nav'=>$nav]);
	}
	public function edits(){
		dump(input("post."));
		db("product")->where("id",input('post.id'))->update(input('post.'));
		return $this->redirect("product/index");
	}
	public function del(){
		$res = db("product")->where("id",input("get.id"))->find();
		$img = $res['img'];
		db("product")->where('id',input('get.id'))->delete();
		unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/product/$img");
		return $this->redirect("product/index");
	}
	public function imgup(){
		return view("product/imgup",['id'=>input('get.id')]);
	}
	public function upad(){
		$list = db("product")->where("id",input("post.id"))->find();
		$img = $list['img'];
		$file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'product');
		   if($info){
		       // 成功上传后 获取上传信息
		       // 输出 jpg
		       echo $info->getExtension();
		        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		       echo $info->getSaveName();
		        // 输出 42a79759f284b767dfcb2a0197904287.jpg
		       echo $info->getFilename(); 
		    }else{
		       // 上传失败获取错误信息
		       echo $file->getError();
		  }
	  	$res = array("id"=>input("post.id"),"img"=>$info->getSaveName());
		db("product")->where('id',input("post.id"))->update($res);
		if(!is_null($img)){
			unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/product/$img");
		}
		
		return $this->redirect("product/index");
	}
	public function search(){
		$search = $_POST['search'];
        $where['name'] = array('like',"%$search%");
        $product = db('product')->where($where)->paginate(5);
        $page = $product->render();
        $this->assign('page', $page);
		$this->assign("product",$product);
		return $this->fetch("product/product");
	}
}
?>