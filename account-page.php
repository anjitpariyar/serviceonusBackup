<?php
include 'header.php';
include './template/nav.php';
?>
<main class="common-page page--login account-page">

	<section class="service">
		<div class="section-rule">
			<div class="row">
				<aside class="col-12 col-lg-3 all pl-0">
					<div class="sticky submenu">
						<ul  role="tablist" class="nav  list-group ">
							<li>
								<a class="nav-link active"  data-toggle="pill" href="#personal-tab" role="tab"> <span class="material-icons material-icons-rounded">
									account_circle
								</span>My Profile</a>
							</li>
							<li>
								<a class="nav-link" data-toggle="pill" href="#booking-tab" role="tab"><span class="material-icons material-icons-outlined">
									event
								</span>My Booking</a>
							</li>
							<li>
								<a class="nav-link" data-toggle="pill" href="#payment-tab" role="tab">
									<span class="material-icons material-icons-outlined">
										local_atm
									</span>Payment History
								</a>
							</li>
							<li>
								<a class="nav-link" data-toggle="pill" href="#card-tab" role="tab">
									<span class="material-icons material-icons-outlined">
										payment
									</span>Card Management
								</a>
							</li>
							<li>
								<a class="nav-link" data-toggle="pill" href="#wallet-tab" role="tab">
									<span class="material-icons material-icons-outlined">
										account_balance_wallet
									</span>My Wallet
								</a>
							</li>
							
							<li>
								<a class="nav-link" data-toggle="pill" href="#invite-tab" role="tab">
									<span class="material-icons material-icons-outlined">
										redeem
									</span>Invite a friend
								</a>
							</li>
							<li>
								<a class="nav-link" data-toggle="pill" href="#changepass-tab" role="tab"><span class="material-icons material-icons-outlined">
									vpn_key
								</span>Change Password</a>
							</li>
							<li><a href="#"  class="nav-link log-out"><span class="material-icons">
								exit_to_app
							</span>Log out</a></li>
						</ul>
					</div>



				</aside>
				<aside class="col-12 col-lg-9 pr-0 tab-content">
					<div class="tab-pane fade show active home m-0" id="personal-tab" role="tabpanel">
						<div class="card details login-form">
							<!-- form -->
							<form id="regForm" action="./file" class="dropzone">
								<label for="">Natsuki Horikita</label>
								<div class="card__img">
									<img src="./gallery/marius-ciocirlan-vMV6r4VRhJ8-unsplash-min.jpg" alt=" full name">
								</div>
								<div class="form-row">
									<div class="form-group col-12 ">
										<label for="name">Full Name</label>
										<input type="text" class="form-control" id="name" value="Natsuki Horikita" placeholder="Full Name">
									</div>
									<!-- phone -->
									<div class="form-group number col-12 col-md-6">
										<label for="email">Phone Number</label>

										<input type="tel" class="form-control" value="+9779825131071" placeholder="Phone Number" >
									</div>
									<div class="form-group col-12 col-md-6">
										<label for="email">Email Address</label>

										<input type="email" class="form-control" value="horikitanatsu@gmail.com" placeholder="Email Address" id="email" readonly="">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-12">

										<label for="fill--addr">Full address
											<small> (Type your address, or drag the red marker to your exact location)</small>
										</label>
										<input type="text" class="form-control" id="fill--addr" placeholder="Enter a location" autocomplete="off">
									</div>
									<div class="form-group col-12 col-sm-6">
										<label for="street--name">Street name</label>
										<input type="text" placeholder="Enter a street name" class="form-control  " id="street--name"> 
									</div>
									<div class="form-group col-12 col-sm-6">
										<label for="buildig">Building</label> 
										<input type="text" placeholder="Enter a building name or number" class="form-control  " id="buildig">
									</div>
									<div class="col-md-6 ">
										<label for="flat">flat/room number</label> 
										<input type="text" placeholder="Enter a Flat/room number" class="form-control  " id="flat">
									</div> 
									<div class="col-md-6 ">
										<label for="Additional Direction">Additional Direction</label> 
										<input type="text" placeholder="Enter a Flat/room number" class="form-control  " id="Additional Direction">
									</div> 

								</div>
								<button  type="submit col-12 ">
									Change Saved
								</button>
							</form>


						</div>
					</div>

					<div class="tab-pane fade row m-0 booking-tab" id="booking-tab" role="tabpanel">

						<div class="checkout--wrapper">
							<h2 class="title--description">Local Moving</h2>
							<ul>
								<li><span>Premise :</span>2 Bed/Room Flat</li>
								<li><span>From :</span> Abu Dhabi</li>
								<li><span>To :</span> Sharjah </li>
								<hr>
								<li><span>Address :</span> Abu dhabi - Al Manhal </li>
								<hr>
								<li><span>Mode of transport :</span> Air Transportation </li>
								<li class="price"><span>Price :</span> $1400-$2500 </li>
								<li><span>Timing of Shipment :</span>United Arab Emirates</li>
							</ul>

							<button class="checkout" >CTA?</button>
						</div>
						<div class="checkout--wrapper empty">
							<span class="material-icons">
								event_busy
							</span>
							<h2 class="title--description">Looks like you haven't made any bookings yet
							Once you make a booking, all the details will appear here.</h2>
						</div>

					</div>


					<div class="tab-pane fade row m-0 payment" id="payment-tab" role="tabpanel">
						
						<div class="checkout--wrapper">
							<h2 class="title--description">Payment History</h2>
							<div class="table-responsive">
							<table class="table table-borderless">
								<thead>
									<tr>
										<th scope="col">Payment ID</th>
										<th scope="col">Payment Method</th>
										<th scope="col">Status</th>
										<th scope="col">Date Received</th>
										<th scope="col">Amount</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Paypal</td>
										<td ><span class="bg-success status">Completed</span></td>
										<td>01/10/2020</td>
										<td>$250.00</td>
									</tr>
									<tr>
										<th scope="row">1</th>
										<td>Master card</td>
										<td ><span class="bg-danger status">Cancel</span></td>
										<td>12/09/2020</td>
										<td>$100.00</td>
									</tr>
									<tr>
										<th scope="row">34556</th>
										<td >Cash on delivery</td>
										<td ><span class="bg-success status">Completed</span></td>
										<td>24/09/2020</td>
										<td>$300.00</td>
									</tr>
								</tbody>
							</table>
						</div>

						</div>
						<div class="checkout--wrapper empty">
							<span class="material-icons">
								money_off
							</span>
							<h2 class="title--description">Looks like you haven't made any Payment transition yet.
							Once you make it, all the details will appear here.</h2>
						</div>
						
					</div>
					<div class="tab-pane fade row m-0 card-tab" id="card-tab" role="tabpanel">
						
						<div class="checkout--wrapper">
							<h2 class="title--description">Add a new card</h2>
							<div class="row">
								<div class="col-md-5 pl-0">
									<div class="card__wrapper">
										<h2 class="small__title">Visa</h2>
										<p class="para">Debit Card</p>
										<p class="card__num">•••• •••• ••••</p>
										<div class="d-flex justify-content-between align-items-center">
											<p class="para name">My Name</p>
											<time>•• ••</time>
										</div>
									</div>
									<label for="">AED 1 will be reserved then released to confirm your card.</label>
								</div>
								<div class="col-md-7 pr-0">
									<form  action="" method="" >
										
										<div class="form-row">
											<div class="form-group col-12 ">
												<label for="card__number">Card Number</label>
												<input type="string" class="form-control" id="card_number">
											</div>
											<div class="form-group number col-12 col-md-6">
												<label for="card__name">Name on card</label>

												<input type="text" class="form-control" id="card__name"  >
											</div>

											<div class="form-group number col-12 col-md-6">
												<label for="card__date">Valid Thru( MM YY)</label>

												<input type="number" class="form-control" id="card__date" pattern="\d\d/\d\d" >
											</div>
											<div class="form-group col-12">
												<label for="card__cvv">CVV code (<small>Your CVV code is the three or four digit code found at the back of your card.</small>)</label>

												<input type="number" class="form-control" id="card__cvv" pattern="\d{3,4}" >
												
											</div>

										</div>
										
										<button  type="submit col-12 ">
											Add a Card
										</button>
									</form>

								</div>
								
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade row m-0 wallet" id="wallet-tab" role="tabpanel">
						
						<div class="checkout--wrapper">
							<h2 class="title--description">Total Balance : <b class="price">+AED</b></h2>
							<div class="table-responsive">
							<table class="table table-borderless">
								<caption>Transaction history</caption>
								<thead>
									<tr>
										<th scope="col">Date</th>
										<th scope="col">Status</th>
										<th scope="col">Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01/10/2020</td>
										<td ><span class="bg-success status">Wallet Amount Received</span></td>
										<td>+AED 30</td>
									</tr>
									<tr>
										<td>12/09/2020</td>										
										<td ><span class="bg-primary status">Wallet Amount Waiting..</span></td>
										<td>+AED 30</td>
									</tr>
									<tr>
										<td>24/09/2020</td>
										<td ><span class="bg-success status">Wallet Amount Received</span></td>

										<td>+AED 30</td>
									</tr>
								</tbody>
							</table>
						</div>

						</div>
						<div class="checkout--wrapper empty">
							<span class="material-icons">
								money_off
							</span>
							<h2 class="title--description">Looks like you haven't made any transition yet.
							Once you make it, all the details will appear here.</h2>
						</div>
						
					</div>

					<div class="tab-pane fade row m-0 invite" id="invite-tab" role="tabpanel">
						
						<div class="checkout--wrapper">
							<h2 class="title--description">Invite a friend</h2>
							<h2 class="card__title">INVITE A FRIEND, GET AED 50</h2>
							<p class="para">Give a friend AED 50 when they sign up using your personal link and get AED 50 when their job is completed!

							Share your personal link with your friends</p>
							<div class="code">Your referral code <a href="#!">BIJATQJFMV</a></div>
						</div>

						
					</div>


					<div class="tab-pane fade row m-0 pass-page" id="changepass-tab" role="tabpanel">
						<div class="login-form ">
							<form id="regForm" action="">
								<h1 class="card__title">Change Password</h1>
								<div class="form-group col-12">
									<label for="oldp">Old Password</label>
									<input type="text" class="form-control" placeholder="Old Password" id="oldp">
								</div>
								<div class="form-group col-12">
									<label for="newp">New Password</label>
									<input type="password" class="form-control" placeholder="New Password" id="newp"> 
								</div>

								<button type="submit">Change Password</button>
							</form>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>


<?php include 'footer.php';?>
<script>
	$(document).ready(()=>{
		var cardNumbText = $('.card__num span');
		$('.code a').click(function(){
			var $temp = $("<input class='d-none'>");
			$("body").append($temp);
			$temp.val($(this).text()).select();
			document.execCommand("copy");
			$temp.remove();
		});

		// $('#card_number').keyup(function(e){
		// 	console.log(e)
		// 	let cardNumb= $(this).val();
		// 	// console.log(cardNumb);
		// 	var fruits = Array.from(String(cardNumb), Number);
		// 	if(fruits.length===3){
		// 		fruits[4]= " ";
		// 	}
		// 	fruits.forEach(function (item, index) {
		// 		// console.log('index' + index );
		// 		// console.log('item' + item );
		// 		// cardNumbText[index].text(item) 
		// 		for(let i = 0 ; i<=18; i++){
		// 			if(fruits[i]){
		// 				cardNumbText[i].textContent = item;
		// 			}
		// 			else{
		// 				cardNumbText[i].textContent = "•";	
		// 			}
		// 		}


		// 	} );


	// })
})
</script>
</body>
</html>	