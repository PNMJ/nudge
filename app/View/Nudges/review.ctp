<div id="the-rest">
	<div id="header">Your Nudges</div>
	<div id="the-rest-content ">
	
	<div style="text-align:center">
		<h1><?php echo $request['Category']['name']; ?> </h1>
			<?php foreach($request['Question'] as $question){ ?>
			<p><?php echo $question['question']?><br />
			<?php echo $question['RequestsQuestion']['answer']?></p>
			<?php } ?>
	</div>
	
	<hr width="90%" />
	
	<h2>Review your nudges</h2>
	<div id="display-choices">
			
	<?php foreach($nudges as $nudge){ ?>
	<div class="reccomendation-option">
		<img src="<?php echo $nudge['Product']['imageURL']; ?>" title="<?php echo $nudge['Product']['name']; ?>">
		<p><?php echo $this->Text->truncate($nudge['Product']['name'], 40); ?></p>
		<br />
		<div style="text-align:center">
			<a href="/nudges/opinion/<?php echo $nudge['Nudge']['id']; ?>/like" style="<?php echo ($nudge['Nudge']['liked']=='yes')?'color:#14a9a2':''; ?>">Like</a><br />
			<a href="/nudges/opinion/<?php echo $nudge['Nudge']['id']; ?>/dislike" style="<?php echo ($nudge['Nudge']['liked']=='no')?'color:#14a9a2':''; ?>">Dislike</a><br />
			<a href="/nudges/opinion/<?php echo $nudge['Nudge']['id']; ?>/buy" style="<?php echo ($nudge['Nudge']['purchased']==true)?'color:#14a9a2':''; ?>">Buy</a><br />
		</div>
	</div>
	<?php } ?>

	</div>
		
<script type="text/javascript" src="/js/nudge.js"></script>
