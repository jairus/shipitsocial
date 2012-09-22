<style>
#sisstep2a{
	margin:auto;
	font-size:18px;
}
.label{
	padding-top:20px;
	padding-bottom:10px;
	font-weight: bold;
}
.values{
	padding-bottom:10px;
}
.value{
	padding: 5px;
}
.label2{
	padding-right:10px;

}

.center{
	text-align:center;
}

select, input{
	font-size:18px;
}

</style>
<script>
	function sisStep2a(){
		self.location = '<?php echo sisUrl("?c=itenerary&a=add"); ?>';
	}
</script>
<table id='sisstep2a'>
	<tr>
		<td class='label center'>
			I am coming from...
		</td>
	</tr>
	<tr>
		<td class='values center'>
			<table>
				<tr>
					<td class='label2'>
						Country
					</td>
					<td class='value'>
						<select name='ocountry' id='ocountry'>
							<option value='Philippines'>Philippines</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='label2'>
						City
					</td>
					<td class='value'>
						<select name='ocity' id='ocity'>
							<option value='Manila'>Manila</option>
							<option value='Makati'>Makati</option>
							
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class='label center'>
			And my destination is...
		</td>
	</tr>
	<tr>
		<td class='values center'>
			<table>
				<tr>
					<td class='label2'>
						Country
					</td>
					<td class='value'>
						<select name='dcountry' id='dcountry'>
							<option value='Philippines'>Philippines</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='label2'>
						City
					</td>
					<td class='value'>
						<select name='dcity' id='dcity'>
							<option value='Manila'>Manila</option>
							<option value='Makati'>Makati</option>
							
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td class='label center'>
			I can deliver on this date...
		</td>
	</tr>
	<tr>
		<td class='values center'>
			<input type='text' name='ddate' class='date center' />
		</td>
	</tr>
	<tr>
		<td class='values center'>
			<input type='submit' value='Save' />
		</td>
	</tr>
	
</table>