<div id="the-rest">
	<div id="header">Leaderboards</div>
	<div id="the-rest-content" style="width:80%">
		
		<h1 align="center"><?php echo $user['User']['name']; ?></h1>
		<h1 align="center">Reputation: <?php echo $score; ?></h1>
		
		<?php
			$status = array(
				'no' => 'bad',
				'yes' => 'good',
				'none' => 'neutral',
			);
		?>
		
	</div>
</div>