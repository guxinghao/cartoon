<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller {
    public function Login(){
        $this->display('Public/login');
        //$this->theme('theme1')->display();
    }

    //输出验证码
	public function verify(){
		$config = array(
			'fontSize' => 30, // 验证码字体大小
			'length' => 4, // 验证码位数
			'useNoise' => false, // 关闭验证码杂点
			'imageW' =>  300,
			'imageH' =>  55,
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	public function doRegister(){
		$this->display('Public/register');
	}
}