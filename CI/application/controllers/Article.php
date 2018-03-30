<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('prc');
header('Access-Control-Allow-Origin:null'); 
header('Access-Control-Allow-Origin:*'); 
header('Access-Control-Allow-Origin:http://localhost:8080'); 
header('Access-Control-Allow-Methods:OPTIONS, GET, POST'); // 允许option，get，post请求
header("Access-Control-Allow-Headers:x-requested-with,content-type");
// 允许x-requested-with请求头
// header('Access-Control-Max-Age:86400'); // 允许访问的有效期
header('Access-Control-Allow-Credentials:true');
// session_start(); 
class Article extends CI_Controller {

	public function sendOut(){
		header('Access-Control-Allow-Origin:*');//允许所有来源访问
        header('Access-Control-Allow-Method:POST,GET');//允许访问的方式
        $articletitle=$this->input->post("articletitle");
        $articletext=$this->input->post("articletext");
        $uid=$this->input->post("uid");
		$this->load->model('Article_model');
		//--------------------------------------------  ↓ 参数顺序会影响结果
		$result=$this->Article_model->send_out($articletitle,$articletext,$uid);
		echo $result;
	}
	public function showcontainer(){
		$this->load->model('Article_model');
		$result = $this->Article_model->show_container();
		echo json_encode($result);
		// var_dump(json_encode($result));
		// echo $result;
	}
	public function showArticleDetails(){
		$aid = $this->input->get("aid");
		$this->load->model('Article_model');
		$result = $this->Article_model->show_ArticleDetails($aid);
		echo json_encode($result);
	}
	
}
