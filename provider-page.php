<?php
include 'header.php';
include './template/nav.php';
?>
<main class="common-page page--provider page--aboutus page--form">
	<div class="screen mb-0">
		<div class="section-rule">
			
			<div class="row">
				<div class="col-sm-7 p-0">
					<div class="wrapper">
						<div class="title--wrapper ">
							<h2 class="title--section">Become a ServiceMarket partner</h2>
						</div>
						<div class="paragraph">
							<div class="row comments--collection">
								<p class="title--description ">Redefining the Middle East’s service provider industry</p>

								<p class="title--description ">Provide online marketplace of service </p>
								<p class="title--description ">Using technology to improve lives</p>

							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 p-0">
					<img src="./gallery/kendall-henderson-Pj6TgpS_Vt4-unsplash.jpg" alt="about-us-img">
				</div>
			</div>
		</div>

	</div>

	<section class="form">
		<div class="section-rule">
			<div class="title--wrapper">
				<p class="title--section">Fill out the form below and one of our sales representatives will contact you within 2 working days</p>
			</div>


			<form action="">
				
				<p class="card__title">Describe your company & provide contact details</p>
				
				<div class="form-row">
					<div class="form-group col-sm-6">
						<label for="companyName">Company Name</label>
						<input type="text" class="form-control" id="companyName" placeholder="">
					</div>
					<div class="form-group col-sm-6">
						<div class="form-group">
							<label for="employeN">Numbers of Employees</label>
							<select class="custom-select" id="employeN">
								<option selected="" disabled="">Select</option>
								<option value="1">
									1-10
								</option>
								<option value="2">
									11-50
								</option>
								<option value="2">
									51-100
								</option>

							</select>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label for="contactP">Contact Person</label>
						<input type="text" class="form-control" id="contactP">
						
					</div>
					<div class="form-group col-sm-6">
						<label for="contactE">Contact Email</label>
						<input type="text" class="form-control" id="contactE" placeholder="">
					</div>
					<div class="form-group col-sm-6">
						<label for="contactN">Contact No</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<select class="custom-select" id="employeN">
									<option selected="" disabled="">USA</option>
									<option value="1">
										NEP
									</option>
									<option value="2">
										DUB
									</option>
									<option value="2">
										IN
									</option>

								</select>
							</div>
							<input type="tel" class="form-control" id="contactN" placeholder="">

						</div>
					</div>
					<div class="form-group col-sm-6">
						<label for="contactWeb">Company Website</label>
						<input type="url" class="form-control" id="contactWeb" placeholder="">
					</div>
				</div>

				<p class="card__title">Which cities are you active in? (Click all that apply)</p>

				<div class="form-row flex-wrap">
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="dubai" name="country">
							<label class="form-check-label" for="dubai">Dubai</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="audubai" name="country">
							<label class="form-check-label" for="audubai">Abu Dhabi</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Sharjah" name="country">
							<label class="form-check-label" for="Sharjah">Sharjah</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Doha" name="country">
							<label class="form-check-label" for="Doha">Doha</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Jeddah" name="country">
							<label class="form-check-label" for="Jeddah">Jeddah</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Kuwait" name="country">
							<label class="form-check-label" for="Kuwait">Kuwait </label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Muscat" name="country">
							<label class="form-check-label" for="Muscat">Muscat</label>
						</div>
						
					</div>
				</div>

				<p class="card__title">What services do you offer? (Click all that apply)</p>

				<div class="form-row flex-wrap">
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Local" name="service">
							<label class="form-check-label" for="Local">Local Move</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="internationalM" name="service">
							<label class="form-check-label" for="internationalM">International Move</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="CarS" name="service">
							<label class="form-check-label" for="CarS">Car Shipping</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Relocation" name="service">
							<label class="form-check-label" for="Relocation">Relocation</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Painting" name="service">
							<label class="form-check-label" for="Painting">Painting</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Storage" name="service">
							<label class="form-check-label" for="Storage">Storage </label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="DeepC" name="service">
							<label class="form-check-label" for="DeepC">Deep Cleaning</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Plumber" name="service">
							<label class="form-check-label" for="Plumber">Plumber</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="HomeC" name="service">
							<label class="form-check-label" for="HomeC">Home Cleaning</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="HandyC" name="service">
							<label class="form-check-label" for="HandyC">HandyMan</label>
						</div>
						
					</div>
					<div class="form-group form-check col-md-3">
						<div class="wrapper">
							<input type="checkbox" class="form-check-input" id="Electrician" name="service">
							<label class="form-check-label" for="Electrician">Electrician</label>
						</div>
						
					</div>
				</div>				

				<div class="form-row">
					<div class="form-group col-sm-12">
						<label for="Message">Is there any other information you would like to share?</label>
						<textarea name="" id="Message"  rows="10" class="form-control" placeholder="Message"></textarea>
					</div>
				</div>
				<div class="form-row mb-0">
					<div class="form-group col-sm-12">
						<button class="" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	
</main>


<?php include 'footer.php';?>
<script>
	
</script>
</body>
</html>	