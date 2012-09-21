<style>
.sistable {
	width:100%;
	height: 200px;
	diaplay:none;
}
.ship{
	text-align:right;
	vertical-align:middle;
	padding-right:20px;
}
.receive{
	text-align:left;
	vertical-align:middle;
	padding-left:20px;
}
.ship .button{
	height:100px;
	width: 200px;
}
.receive .button{
	height:100px;
	width: 200px;
}
</style>
<script>
	function sisStep2a(){
		self.location = '<?php echo sisUrl("?c=itenerary&a=add"); ?>';
	}
</script>
<table id='sisstep1' class='sistable' style='display:'>
	<tr>
		<td class='ship'>
			<input type='button' class='button' value='I can ship a package' onclick='sisStep2a()' >
		</td>
		<td class='receive'>
			<input type='button' class='button' value='I want to receive a package'>
		</td>
	</tr>
</table>