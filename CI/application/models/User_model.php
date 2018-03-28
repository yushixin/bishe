<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    public function select_user($username){//检验用户是否存在
      $arr = array(
            'u_name'  => $username
            );
      $query = $this->db->get_where('user', $arr);
      return $query->num_rows();
    }
    public function add_user($username,$password){//add_user向数据库插入新用户
      $arr = array(  'u_id'    =>  null,
						          'u_name'  =>  $username,
						          'u_paw'   =>  $password   );
		  $sql = $this->db->insert_string('user', $arr);
		  $query=$this->db->query($sql);
		  return $query;
    }
    public function username_Testing($username){//用来测试用户名是否存在
      $arr = array(   'u_name' 	=> $username );
      $query = $this->db->get_where('user', $arr);
      return $query->num_rows();
    }

    public function login_test($username,$password){//检验用户账号密码

      $arr = array(
            'u_name'  => $username,
            'u_paw'   => $password
            );
      $query = $this->db->get_where('user', $arr);
      return $query->row();
    }
    
    public function show_username($uid){//在个人主页显示用户名
      $arr = array(
            'u_id'  => $uid
            );
      $query = $this->db->get_where('user', $arr);
      return $query->row();
    }

    
}