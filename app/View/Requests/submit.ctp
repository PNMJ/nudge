<div id="the-rest">
	<div id="header">Request</div>
	<div id="the-rest-content ">
		<?php echo $this->Form->create('Request'); ?>
			<h1>Select a category</h1>
			<select name="" class="input-stuff" >
				<option value="">Option 1</option>
				<option value="">Option 2</option>
				<option value="">Option 3</option>
			</select>
			
			<?php foreach($questions as $question){ ?>
				<?php echo $question['Question']['question']; ?>
				<?php echo $this->Form->input('question[]'); ?>
			<?php } ?>
			
			<h1>Sample Question 1</h1>
			<input type="text" name="question1" value="" class="input-stuff" placeholder="Type answer here">
			<h1>Sample Question 2</h1>
			<input type="text" name="" value="" class="input-stuff" placeholder="Type answer here">
		<?php $this->form->end(); ?>
	</div>
</div>