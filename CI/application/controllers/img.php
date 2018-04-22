
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('prc');
header('Access-Control-Allow-Origin:null'); 
header('Access-Control-Allow-Origin:*'); 
header('Access-Control-Allow-Origin:http://localhost:8080'); 
header('Access-Control-Allow-Methods:OPTIONS, GET, POST'); // 允许option，get，post请求
header("Access-Control-Allow-Headers:x-requested-with,content-type");
header('Access-Control-Allow-Credentials:true');
class img extends CI_Controller {

	public function test(){
		$localurl = '../../img/TX/';
		$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));
		$imgurl = $localurl.$filename;
		$response = array();
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $imgurl)){
			$response['isSuccess'] = true;
			$response['photo'] = $filename;
			$response['imgurl'] = $imgurl;
		}else{  
			$response['isSuccess'] = false;  
		}  
		echo json_encode($response);
	}
}



?>

