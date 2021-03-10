<?php
include 'header.php';
include './template/nav.php';
?>
<main class="common-page page--login">

	<section class="service">
		<div class="section-rule p-0">
			<div class="row">
				<aside class="col-sm-6 pl-0">
					<form action="./account-page.php">
						<h2 class="title--section">Sign Up</h2>
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control" type="email" id="email" placeholder="brad@gmail.com" autofocus=""> 
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control" type="password" id="password" placeholder="Enter Your Password"> 
						</div>
						<div class="form-group">
							<label for="confirm_password">Confirm Password</label>
							<input class="form-control" type="password" id="confirm_password" placeholder="Enter Your Password"> 
						</div>
						<div class="form-group form-check">
							<input  type="checkbox" class="form-check-input" id="login--keep" checked="">
							<label class="form-check-label" for="login--keep">I accepts All <a href="#">Terms and condition</a></label>
						</div>
						<div class="form-group form-check">
							<input  type="checkbox" class="form-check-input" id="login--keep" checked="">
							<label class="form-check-label" for="login--keep">I wish to reccive latest News & Inforamtion</label>
						</div>
						<button type="submit">Sign In</button>
						<p class="account">Already have account? <a href="./login-page.php">Log In</a></p>


					</form>
				</aside>
				<aside class="col-sm-6 pr-0">
					<div class="comments--collection">
						<p class="title--description">A Better Way To Keep Moving</p>
						<p class="title--description animation">Fully Insurance</p>
						<p class="title--description">Fast. Certified & Felxible Solution</p>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>


<?php include 'footer.php';?>
<script>
	var sliderAnimation= $('.comments--collection .title--description');
	setInterval(()=>{
		sliderAnimation.toggleClass('animation');
	}, 3000)
</script>
</body>
</html>	