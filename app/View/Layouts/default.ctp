<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nudge : What You Want</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');
		echo $this->Html->css('home');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>

</head>
<body id="index-bg" style="margin:0px">
	<?php echo $this->Session->flash(); ?>
	<div style="position: fixed; bottom: 4px; right: 16px; opacity: 0.4;">
	  <img width="300px" src="/img/trail.png">
	</div>
	
	<?php if(isset($user_reputation)){ ?>
	<div style="position: absolute; color: rgb(246, 246, 246); font-family: Source Sans Pro,sans-serif; right: 15px; font-size: 18px; top: 13px;">
		Reputation: <?php echo $user_reputation; ?>
	</div>
	<?php } ?>
	
	<?php echo $this->element('sidebar'); ?>
	<?php echo $this->fetch('content'); ?>
	<?php /*echo $this->element('sql_dump'); */?>
</body>
</html>
