<div id="the-rest">
	<div id="header">Nudge</div>
	<div id="the-rest-content ">
		<div id="display-choices">
			<p>Please click on a request you want to send a nudge to</p>
			
			<?php foreach($requests as $request){ ?>
			<a href="/nudges/give/<?php echo $request['Request']['id']; ?>">
			<div style="width: 30%; float: left; margin-left: 3%; border: thin solid #14a9a2; padding: 1%">
				<h2><?php echo $request['User']['name']; ?> - <?php echo $request['Category']['name']; ?> </h2>
				<p>
					<?php foreach($request['Question'] as $question){ ?>
					<b><?php echo $question['question']?></b><br />
					A: <?php echo $question['RequestsQuestion']['answer']?><br /><br />
					<?php } ?>
				</p>
			</div>
			</a>
			<?php } ?>
			<div style="clear:both"></div>
	</div>
		
<script type="text/javascript" src="/js/nudge.js"></script>
