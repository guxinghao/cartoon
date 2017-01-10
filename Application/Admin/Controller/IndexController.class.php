<?php
namespace Admin\Controller;

  
class IndexController extends AdminController {

	    public function getCookie(){
	    	dump(I($_COOKIE['name']));
	    }           
    
} 