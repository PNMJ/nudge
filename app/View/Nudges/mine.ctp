<div id="the-rest">
	<div id="header">My Nudges</div>
	<div id="the-rest-content">
		
		<?php
			$status = array(
				'no' => 'bad',
				'yes' => 'good',
				'none' => 'neutral',
			)
		?>
		
		<?php foreach($nudges as $nudge){ ?>
		<a href="">
			<div >
				<div class="bullet-point <?php echo $status[$nudge['Nudge']['liked']]?>"></div>
				<div class="request">
					<h2><?php echo $nudge['Product']['name'] ?></h2>
					<p>
					<?php if(isset($nudge['Request']['Question'])){foreach($nudge['Request']['Question'] as $question){ ?>
					<?php echo ucfirst($question['question']); ?><br />
					<?php }} ?>
					</p>
				</div>
			</div>
		</a>
		<?php } ?>
		
	</div>
</div>