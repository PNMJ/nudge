<link rel = "stylesheet" href = "/css/index.css" />

<div style="padding-top:7%">
	<div id = "main">
		<strong style="font-size:90px">Nudge.</strong> <br />
		Cause You Know You Want It.
	</div>
	<div id = "signup">
		<form id="sign-up-form" method="post" action="/users/signup">
			<input type="email" id="email" name="email" value="" placeholder="Email" class="nicebox">
			<input type="text" id="name" name="name" value="" placeholder="Your Name" class="nicebox"> 
			<input type="password" id="pass" name="password" value="" placeholder="Password" class="nicebox"> <br>
			<button class="btn" id="signupbut" type="submit">
			Sign Up Now.
		</button>
		</form>
		<br /><br />
		<a href="/users/signin" style = "font-family: 'Montserrat', sans-serif; color: #ecf0f1; font-size: 14px; text-decoration: none;"> Click here to Sign In </a>
	</div>
</div>