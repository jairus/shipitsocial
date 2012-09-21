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
.avatar{
	width:50px;
}
</style>
<table id='sistable'>
	<?php
	if($fb_user_profile['username']){
		?>
		<tr id='sistop'>
			<td class='td avatar'>
				<img src='http://graph.facebook.com/<?php echo $fb_user_profile['username'] ?>/picture' />
			</td>
			<td class='td'>
				Hello <?php echo $fb_user_profile['first_name']; ?>!
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
			echo $content;
			?>
		</td>
	</tr>
</table>