<?php
namespace app\api\controller;
use think\Controller;
class Common extends Controller{
    public function _initialize(){
        //解决调试时候跨域问题
    	header('Access-Control-Allow-Origin:*');
    	$this->req = request();
    	if($this->req->method()=="OPTIONS"){
    	    echo json_encode(['type'=>"OPTIONS"]);
    	    exit;
        }
    	$this->host = "http://".$_SERVER['HTTP_HOST'];
    }
    
}
