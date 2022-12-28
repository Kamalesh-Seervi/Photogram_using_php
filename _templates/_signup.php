<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    print_r($_POST);
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $error = User::signup($user, $pass, $email, $phone);
    $signup = true;
}
?>

<?php
if ($signup) {
    if (!$error) {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Success</h1>
		<p class="lead">Now you can login from <a href="/login.php">here</a>.</p>

	</div>
</main>
<?php
    } else {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3 ">
		<div class="card text-black">
			<h1>Signup Fail</h1>
			<p class="lead">Something went wrong, <?= $error ?>
			</p>
		</div>
	</div>
</main>
<?php
    }
} else {
    ?>

<section class="vh-100" style="background-color: #eee;">
	<div class="container h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-lg-12 col-xl-11">
				<div class="card text-black" style="border-radius: 25px; padding:0">
					<div class="card-body p-md-2">
						<img src="/photogram/img/neeraj.jpeg" class=" front" alt="Sample image" width="815px"
							height="600px">
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

								<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
								<form class="mx-1 mx-md-4" method="post" action="signup.php">

									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-user fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input name="username" type="text" id="FloatingInputUsername"
												class="form-control hvr-box-shadow-inset" />
											<label class="form-label" for="FloatingInputUsername">User Name</label>
										</div>
									</div>
									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input name="password" type="password" id="FloatingInput"
												class="form-control hvr-box-shadow-inset" />
											<label class="form-label" for="FloatingInput">Password</label>
										</div>
									</div>
									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input name="email_address" type="email" id="FloatingInput"
												class="form-control hvr-box-shadow-inset" />
											<label class="form-label" for="FloatingInput">Email Address</label>
										</div>
									</div>
									<div class="d-flex flex-row align-items-center mb-4">
										<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input name="phone" type="text" id="FloatingInputUsername"
												class="form-control hvr-box-shadow-inset" />
											<label class="form-label" for="FloatingInputUsername">Phone Number</label>
										</div>
									</div>

									<div>
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> I agree all statements in <a href="#!">Terms of
												service</a>
										</label>
										<!-- <input class=" me-2" type="checkbox" id="FloatingInput" />
										<label class="form-check-label" for="FloatingInput">
											I agree all statements in <a href="#!">Terms of service</a> -->
										<!-- </label> -->
									</div>

									<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
										<button type="submit"
											class="btn btn-primary btn-lg btn-primary hvr-underline-from-center ">Register</button>
									</div>
								</form>
							</div>
							<footer class="text-muted">
							</footer>
						</div>
					</div>
				</div>
			</div>
			<p class="lead text-muted text-center">
				Kraken Limited &copy; 2022
			</p>
		</div>
	</div>
	</div>
</section>
<?php
}
