<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Banner extends Controller
{
	public function index(){
		$list = db("banner")->order('id desc')->paginate(5);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("banner/banner");
	}
	public function jump(){
		return view("banner/add");
	}
	public function add(){
		// 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'banner');
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
	  $res = array("img"=>$info->getSaveName(),"name"=>input('post.name'),"explain"=>input('post.explain'),"state"=>input('post.state'));
	  db("banner")->insert($res);
	  return $this->redirect("banner/index");
	}
	public function edit(){
		$list = db("banner")->where('id',input("get.id"))->find();
		return view("banner/edit",["list"=>$list]);
	}
	public function edits(){
		$res = array("id"=>input("post.id"),"name"=>input('post.name'),"explain"=>input('post.explain'),"state"=>input('post.state'));
		db("banner")->where('id',input("post.id"))->update($res);
		return $this->redirect("banner/index");		
	}
	public function imgup(){
		return view("banner/imgup",["id"=>input("get.id")]);
	}
	public function upad(){
		$list = db("banner")->where("id",input("post.id"))->find();
		$img = $list['img'];
		dump($img);
		 $file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'banner');
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
		db("banner")->where('id',input("post.id"))->update($res);
		if(!is_null($img)){
			unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/banner/$img");
		}
		return $this->redirect("banner/index");
	}
	public function del(){
		$res = db("banner")->where("id",input("get.id"))->find();
		$img = $res['img'];
		db("banner")->where('id',input('get.id'))->delete();
		unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/banner/$img");
		return $this->redirect("banner/index");
	}
}
?>