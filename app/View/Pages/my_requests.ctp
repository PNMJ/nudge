<link rel = "stylesheet" href = "/css/home.css" />

<?php echo $this->element('sidebar'); ?>

<div id="the-rest">
	<div id="header">My Requests</div>
	<div id="the-rest-content">
		<a href="">
			<div >
				<div class="bullet-point good"></div>
				<div class="request">
					<h2>Category, 100% finished, atleast one like/buy</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
		<a href="">
			<div >
				<div class="bullet-point neutral"></div>
				<div class="request">
					<h2>Category, in progress</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
		<a href="">
			<div >
				<div class="bullet-point bad"></div>
				<div class="request">
					<h2>Category, 100% finished, no likes/buys</h2>
					<p>Question 1</p>
					<p>Question 2</p>
				</div>
			</div>
		</a>
	</div>
</div>

<script type="text/javascript" src="/js/myRequests.js"></script>
