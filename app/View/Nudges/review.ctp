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
			
	<?php foreach($nudges as $nudge){ debug($nudge);?>
	<div class="reccomendation-option">
		<img src="<?php echo $nudge['Product']['imageURL']; ?>" title="<?php echo $nudge['Product']['name']; ?>">
		<p><?php echo $this->Text->truncate($nudge['Product']['name'], 40); ?></p>
		<br />
		<div style="text-align:center">
			<a href="/nudge/review/<?php echo $request['Category']['id']; ?>/like" >Like</a><br />
			<a href="/nudge/review/<?php echo $request['Category']['id']; ?>/dislike" >Dislike</a><br />
			<a href="/nudge/review/<?php echo $request['Category']['id']; ?>/buy" >Buy</a><br />
		</div>
	</div>
	<?php } ?>

	</div>
		
<script type="text/javascript" src="/js/nudge.js"></script>
