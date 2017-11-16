<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class News extends Controller
{
	public function index(){
		$list = db("new")->order('id desc')->paginate(5);
		$page = $list->render();
		$this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("new/new");
	}
	public function jump(){
		return view("new/add");
	}
	public function add(){
		// 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'new');
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
	  $res = array("img"=>$info->getSaveName(),"name"=>input('post.name'),"title"=>input('post.title'),"author"=>input("post.author"),"time"=>input('post.time'),"new"=>input('post.new'));
	  db("new")->insert($res);
		return $this->redirect("news/index");
	}
	public function edit(){
		$res = db("new")->where("id",input("get.id"))->find();
		return view("new/edit",['res'=>$res]);
	}
	public function edits(){
		db("new")->where("id",input("post.id"))->update(input("post."));
		return $this->redirect("news/index");
	}
	public function imgup(){
		return view("new/imgup",['id'=>input('get.id')]);
	}
	public function upad(){
		$list = db("new")->where("id",input("post.id"))->find();
		$img = $list['img'];
		 $file = request()->file('img');
	  // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'static'.DS.'home'.DS.'pic'.DS.'new');
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
		db("new")->where('id',input("post.id"))->update($res);
		if(!is_null($img)){
			unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/new/$img");
		}
		return $this->redirect("news/index");
	}
	public function del(){
		$res = db("new")->where("id",input("get.id"))->find();
		$img = $res['img'];
		db("new")->where('id',input('get.id'))->delete();
		unlink("D:\phpStudy\WWW\hcx/public/static/home/pic/new/$img");
		return $this->redirect("news/index");
	}
	public function search(){
		$search = $_POST['search'];
        $where['name'] = array('like',"%$search%");
        $list = db('new')->where($where)->paginate(5);
        $page = $list->render();
        $this->assign('page', $page);
		$this->assign("list",$list);
		return $this->fetch("new/new");
	}
}
?>