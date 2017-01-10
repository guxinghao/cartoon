<?php
namespace Admin\Controller;
use Think\Controller;


//Admin模块的控制器基类
class AdminController extends Controller {

	public function _initialize(){
		if(empty(I('session.admin'))){
			$this->redirect('Public/login','',2,'请先登录');
			return;
		}
	}
          
    //   public function getCookie(){
	// 	dump($_COOKIE['password']);
	// }                
    
}