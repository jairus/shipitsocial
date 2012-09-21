<?php
@session_start();
class sis{
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
			$data['content'] = sisLoadView("main", $data, true);
			sisLoadView("layout", $data);
		}
	}
	function logout(){
		foreach($_SESSION as $key => $value){
			unset($_SESSION[$key]);
		}
		sisRedirect(sisUrl());
	}	
}
?>