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
class User extends CI_Controller {
	public function loginSuc()
		{
			echo hash("sha256",'edison'."111");
		}
	public function reg(){
		$username=$this->input->get("username");
        $password=$this->input->get("password");
		$this->load->model('User_model');
		$result=$this->User_model->add_user($username,$password);
		$flag = 1;
		if($result == true){
			echo $flag;
		}
	}
	public function usernameTesting(){
		$username=$this->input->get("username");
		$this->load->model('User_model');
		$result=$this->User_model->username_Testing($username);
		echo $result;
	}
	public function loginTest(){
		$username=$this->input->get("username");
        $password=$this->input->get("password");

		$this->load->model('User_model');
		$result=$this->User_model->login_test($username,$password);
		// var_dump($result);
        echo json_encode($result);
	}

}
