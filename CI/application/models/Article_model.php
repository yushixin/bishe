<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {
    public function send_out($articletitle,$articletext,$uid){//发表文章
      $arr = array(  
                    'a_id'      =>  null,
						        'a_title'   =>  $articletitle,
						        'a_article' =>  $articletext,
                    'u_id'      =>  $uid
                                                    );
		  $sql = $this->db->insert_string('article', $arr);
		  $query=$this->db->query($sql);
		  return $query->num_row();
    }

    
}