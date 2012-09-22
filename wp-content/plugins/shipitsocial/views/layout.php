<link rel="stylesheet" href="<?php echo sisBaseUrl(); ?>js/development-bundle/themes/base/jquery.ui.all.css">
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/jquery-1.8.0.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.core.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.position.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.autocomplete.js"></script>

<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.mouse.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.draggable.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.position.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.resizable.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.dialog.js"></script>
<script src="<?php echo sisBaseUrl(); ?>js/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script>
//ballast
jQuery(function(){
	jQuery(".date").datepicker({ 
		onSelect: function(date) {
			},
		});
});
</script>
<style>
#sistable{
	width:100%;
}
#sistop .td{
	vertical-align:top;
	padding: 5px;
	padding-bottom:10px;
}
#siscontent{
	padding:5px;
	background: #f0f0f0;
}
#friendcount, #email{
	font-size:10px;
}
.avatar{
	width:50px;
}
.hello{
	padding-top:0px;
}
</style>
<table id='sistable'>
	<?php
	if($fb_user_profile['username']){
		?>
		<tr id='sistop'>
			<td class='td avatar'>
				<a href='<?php echo $fb_user_profile['link']; ?>' target="_blank"><img src='http://graph.facebook.com/<?php echo $fb_user_profile['username'] ?>/picture' /></a>
				
			</td>
			<td class='td hello'>
				Hello <?php echo $fb_user_profile['first_name']; ?>!
				<?php echo "<div id='email'>E-mail: ".$fb_user_profile['email']; ?></div>
				<?php echo "<div id='friendcount'>Friend Count: ".$fb_user_profile['friendcount']; ?></div>
			</td>
			<td style='text-align:right' class='td'>	
				<a href="<?php echo sisUrl(); ?>">Home</a> | 
				<a href="<?php echo sisUrl("?c=requests"); ?>">My Requests</a> | 
				<a href="<?php echo sisUrl("?c=iteneraries"); ?>">My Iteneraries</a> | 
				<a href="<?php echo sisUrl("?c=sis&a=logout"); ?>">Logout</a>
			</td>
		</tr>
		<?php
	}
	?>
	<tr>
		<td colspan="3" id='siscontent'>
			<?php
			
			/*
				echo "<pre>";
				print_r($fb_user_profile);
				echo "</pre>";
			*/
			echo $content;
			?>
		</td>
	</tr>
</table>