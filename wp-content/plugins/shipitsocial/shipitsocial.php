<?php
@session_start();
/*
Plugin Name: ShiPItSocial
Plugin URI: 
Description: ShiP It Social Plugin, Tags: [[shipitsocial]]
Version: 1.0
Author: Jairus Bondoc
*/
add_filter('the_content', 'shipItSocial');

function sisUrl($add=""){
	$pluginbaseurl = dirname($_SERVER['SCRIPT_NAME'])."/sis/";
	return $pluginbaseurl.$add;
}
function sisBaseUrl($add=""){
	$pluginbaseurl = dirname($_SERVER['SCRIPT_NAME'])."/wp-content/plugins/shipitsocial/";
	return $pluginbaseurl.$add;
}
function sisRedirect($url){
	ob_end_clean();
	?>
	<script>
	self.location = "<?php echo $url; ?>";
	</script>
	<?php
	exit();
}
function sisFB(){
	include_once(dirname(__FILE__)."/includes/fb/facebook.php");
	$facebook = new Facebook(array(
	  'appId'  => '162407267163831',
	  'secret' => '2b84ecd4156967a710a7499ba3301c65',
	));
	return $facebook;
}
//globals of sisfb
$sisfacebook = sisFB();
$sisfb = array();
$sisfb['login_url'] = $sisfacebook->getLoginUrl();
$sisfb['user'] = $sisfacebook->getUser();
if ($sisfb['user']) {
	try {
		// Proceed knowing you have a logged in user who's authenticated.
		$sisfb['user_profile'] = $sisfacebook->api('/me');
		$friends = $sisfacebook->api('/me/friends');
		$sisfb['user_profile']['friends'] = $friends['data'];
		$sisfb['user_profile']['friendcount'] = count($friends['data']);
	} catch (FacebookApiException $e) {
		error_log($e);
		$sisfb['user'] = null;
	}
}

function sisSaveProfile($fb_user_profile){
	global $wpdb;
	$fbuid = $fb_user_profile['id'];

	$sql = "select * from `sis_users` where `fbuid`='".$fbuid."'";
	$fbuser = $wpdb->get_results($sql);
	if($fbuser[0]->id){
		$fbdata = base64_encode(serialize($fb_user_profile));
		$sql = "update `sis_users` set 
		`fbemail` = '".mysql_escape_string($fb_user_profile['email'])."',
		`fblink` = '".mysql_escape_string($fb_user_profile['link'])."',
		`fbfriendcount` = '".mysql_escape_string($fb_user_profile['friendcount'])."',
		`fbdata_serial_b64` = '".mysql_escape_string($fbdata)."'
		where `id`='".$fbuser[0]->id."'";
	}
	else{
		$fbdata = base64_encode(serialize($fb_user_profile));
		$sql = "insert into `sis_users` set 
		`fbuid`='".$fbuid."', 
		`fbemail` = '".mysql_escape_string($fb_user_profile['email'])."',
		`fblink` = '".mysql_escape_string($fb_user_profile['link'])."',
		`fbfriendcount` = '".mysql_escape_string($fb_user_profile['friendcount'])."',
		`fbdata_serial_b64` = '".mysql_escape_string($fbdata)."'";
	}
	
	$wpdb->query($sql);
}

function sisLoadModel($model){
	include_once(dirname(__FILE__)."/models/".$model.".php");
}
function sisLoadView($view, $data=array(), $ob=false){
	if(is_array($data)){
		foreach($data as $key=>$value){
			$$key = $value;
		}
	}
	@ob_start();
	include_once(dirname(__FILE__)."/views/".$view.".php");
	$out = ob_get_contents();
	ob_end_clean();
	if($ob){
		return $out;
	}
	else{
		echo $out;
	}
}
function shipItSocial($content){
	/*
	//some useful things
	global $current_user;
	$pluginbaseurl = dirname($_SERVER['SCRIPT_NAME'])."/wp-content/plugins/sampleplugin/";
	print_r(get_func_args(),1);
	get_currentuserinfo();
	$nick = "";
	ob_start();
	the_author_nickname();
	$nick = ob_get_contents();
	ob_end_clean();
	$nick = $current_user->user_login;
	if(!$nick){
		$nick = " ";
	}
	*/
	
		
	$matches = array();
	preg_match_all("/\[\[shipitsocial:*([^]]*)\]\]/iUs", $content, $matches);
	$toreplace = $matches[0][0];
	$extraargs = $matches[1][0];
	
	ob_start();
	$c = $_GET['c'];
	$a = $_GET['a'];
	if($c){
		if(!file_exists(dirname(__FILE__)."/controllers/".$c.".php")){
			echo "Controller '$c' not found!";
			$c = "";
		}
	}
	else{
		$c = 'sis';
	}
	if($c){
		include_once(dirname(__FILE__)."/controllers/".$c.".php");
		if($a){
			$obj = new $c();
			$obj->$a();
		}
		else{
			$obj = new $c();
			$obj->index();
		}
	}
	$res = ob_get_contents();
	ob_end_clean();
	
	$content = str_replace($toreplace, $res, $content);
	
	return $content;
}

function sis_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', sisBaseUrl('js/js/jquery-1.8.0.min.js'));
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'sis_method');

$sql = "CREATE TABLE IF NOT EXISTS `sis_users` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `fbuid` tinyint(2) NOT NULL,
  `fbdata_serial_b64` longtext NOT NULL,
  `dateadded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

global $wpdb;
$wpdb->query($sql);



?>