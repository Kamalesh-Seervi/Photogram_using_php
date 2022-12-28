<?php

$username = $_POST['username'];
$password= $_POST['password'];

$result = validate($username, $password);


if ($result) {
    ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Login Success</h1>
		<p class="lead">This example is a quick exercise to do basic login with html forms.</p>
	</div>
</main>
<?php
} else {
    ?>

<main class="form-signin w-100 m-auto">
	<form method="post" action="login.php">
		<img src="/photogram/img/neeraj.jpeg" class="front" alt="" width="570px" height="650px"
			style="margin:0 0 0 300px ;">
		<img class="mb-4 " src="/photogram/img/kraken.png" alt="" width="300px" height="90px"
			style="margin:100px 0 100px 0;">


		<div class="form-floating ">
			<input name="email_address" type="email" class="form-control hvr-box-shadow-inset" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput ">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control hvr-box-shadow-inset" id="floatingPassword"
				placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input style="background-color: black;" type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
	</form>

	<div class="si">
		<div>
			<form action="index.php"><button class="w-100 btn btn-lg btn-primary hvr-underline-from-center"
					type="submit" style=" margin:0 10px 0 0 ">Sign In</button></form>
		</div>
		<div class="sign">
			<form action="signup.php"><button class="w-100 btn btn-lg btn-primary hvr-underline-from-center"
					type="submit">Sign Up</button></form>
		</div>
	</div>

</main>
<?php
}
