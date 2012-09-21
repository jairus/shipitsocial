<?php
/*
Plugin Name: ShiPItSocial
Plugin URI: 
Description: ShiP It Social Plugin, Tags: [[shipitsocial]]
Version: 1.0
Author: Jairus Bondoc
*/
add_filter('the_content', 'shipItSocial');

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

$res = "<pre>
MD5 Value of '$extraargs' is ".md5($extraargs)."
<br />
Your IP is: ".$_SERVER['REMOTE_ADDR']."
</pre>
";

$content = str_replace($toreplace, $res, $content);

return $content;

}
?>