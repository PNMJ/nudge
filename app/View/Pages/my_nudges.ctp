<link rel = "stylesheet" href = "/css/home.css" />

<?php echo $this->element('sidebar'); ?>


<div id="the-rest">
	<div id="header">My Nudges</div>
	<div id="the-rest-content">
		<a href="">
			<div >
				<div class="bullet-point neutral"></div>
				<div class="request">
					<h2>Recomendation, not answered</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
		<a href="">
			<div >
				<div class="bullet-point good"></div>
				<div class="request">
					<h2>Recomendation, liked</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
		<a href="">
			<div >
				<div class="bullet-point bad"></div>
				<div class="request">
					<h2>Recomendation, not liked</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
	</div>
</div>

<script type="text/javascript" src="/js/myRequests.js"></script>
