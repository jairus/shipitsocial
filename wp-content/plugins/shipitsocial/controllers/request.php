<?php
@session_start();
class request{
	var $r;
	function __construct(){
		sisLoadModel('request_model');
		$this->r = new request_model();
	}
	function index(){
		global $sisfb;
		if(!$sisfb['user']){
			$data['fb_loginurl'] = $sisfb['login_url'];
			$data['content'] = sisLoadView("login", $data, true);
			sisLoadView("layout", $data);
		}
		else{
			sisSaveProfile($sisfb['user_profile']);
			
			$data['fb_user_profile'] = $sisfb['user_profile'];
			$data['content'] = sisLoadView("requests", $data, true);
			sisLoadView("layout", $data);
		}
	}
	
	function newrequest(){
	}
}
?>