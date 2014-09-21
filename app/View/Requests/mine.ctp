<div id="the-rest">
	<div id="header">My Requests</div>
	<div id="the-rest-content">
		
		<?php foreach($requests as $request){ ?>
		
		<a href="/nudges/review/<?php echo $request['Request']['id']; ?>">
			<div>
				<div class="bullet-point <?php echo $status[$request['Request']['id']]; ?>"></div>
				<div class="request">
					<h2><?php echo $request['Category']['name']; ?></h2>
					<p>
						<?php foreach($request['Question'] as $question){ ?>
						<b><?php echo $question['question']?></b><br />
						A: <?php echo $question['RequestsQuestion']['answer']?><br /><br />
						<?php } ?>
					</p>
				</div>
			</div>
		</a>
		
		<?php } ?>
	</div>
</div>