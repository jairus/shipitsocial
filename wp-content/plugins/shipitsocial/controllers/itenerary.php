<?php
@session_start();
class itenerary{
	var $r;
	function __construct(){
		sisLoadModel('itenerary_model');
		$this->r = new itenerary_model();
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
			$data['content'] = sisLoadView("itenerary/main", $data, true);
			sisLoadView("layout", $data);
		}
	}
	
	function add(){
		global $sisfb;
		$data['fb_user_profile'] = $sisfb['user_profile'];
		$data['content'] = sisLoadView("itenerary/add", $data, true);
		sisLoadView("layout", $data);
	}
}
?>