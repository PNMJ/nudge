<div id="the-rest">
	<div id="header">Leaderboards</div>
	<div id="the-rest-content" style="width:80%">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th><h1>Usernames</h1></th>
				<th width="100%">&nbsp;</th>
				<th><h1>Reputation</h1></th>
			</tr>
			<?php foreach($leaderboard as $user=>$reputation){ ?>
			<tr>
				<td class="username"><p><?php echo $user; ?></p></td>
				<td>&nbsp;</td>
				<td class="reputation"><p><?php echo $reputation; ?></p></td>
			</tr>
			<?php } ?>
		</table>
		
	</div>
</div>