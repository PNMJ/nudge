<div id="the-rest">
	<div id="header">Nudge</div>
	<div id="the-rest-content ">
	
	<div style="text-align:center">
		<h2><?php echo $request['User']['name']; ?> - <?php echo $request['Category']['name']; ?> </h2>
			<?php foreach($request['Question'] as $question){ ?>
			<h1><?php echo $question['question']?><br />
			<?php echo $question['RequestsQuestion']['answer']?></h1>
			<?php } ?>
	</div>
	
	<hr width="90%" />
	
	<h2>Pick an item to nudge to <?php echo $request['User']['name']; ?> </h2>
	<div id="display-choices">
			
	<?php foreach($products as $product){ ?>
	<div class="reccomendation-option">
		<a href="/nudges/give/4/<?php echo urlencode($product['uuid']); ?>">
			<img src="<?php echo $product['imageURL']; ?>">
			<?php echo $this->Text->truncate($product['name'], 40); ?>
		</a>
	</div>
	<?php } ?>

	</div>
		
<script type="text/javascript" src="/js/nudge.js"></script>
