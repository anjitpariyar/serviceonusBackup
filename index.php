 <?php
 include 'header.php';
 include './template/nav.php';
 ?>
 <link rel="stylesheet" href="./node_modules/country/build/css/intlTelInput.css">
 <main class="home-page">
 	<section class="screen">
 		<article class="wrapper">
 			<h2 class="title--section">one stop solution for<br>
 				<div class="slider">
 					<div class="slider-text1">Plumbing</div>
 					<div class="slider-text2">House Shift</div>
 					<div class="slider-text3">cleaning</div>
 				</div>
 			</h2>
 			<div class=" search">
 				<form action="./search-page.php" class="form-inline">
 					<div class="form-group">
 						<input type="search" class="form-control" placeholder="Find services">
 						<button type="submit">Search</button> 
 					</div>
 				</form>
 			</div>
 		</article>
 		<article class="carousel">
 			<div class="item">
 				<img src="./gallery/cdc-jjrXvzbqC5E-unsplash.jpg" alt="">
 				<div class="slider">
 					<div class="slider-text1">Plumbing</div>
 					<div class="slider-text2">House Shift</div>
 					<div class="slider-text3">cleaning</div>
 				</div>
 			</div>
 			<div class="item">
 				<img src="./gallery/annie-gray-WEWTGkPUVT0-unsplash.jpg" alt="">
 				<div class="slider">
 					<div class="slider-text1">Plumbing</div>
 					<div class="slider-text2">House Shift</div>
 					<div class="slider-text3">cleaning</div>
 				</div>
 			</div>
 			<div class="item">
 				<img src="./gallery/kendall-henderson-Pj6TgpS_Vt4-unsplash.jpg" alt="">
 				<div class="slider">
 					<div class="slider-text1">Plumbing</div>
 					<div class="slider-text2">House Shift</div>
 					<div class="slider-text3">cleaning</div>
 				</div>
 			</div>
 		</article> 			
 	</section>
 	<section class="service">
 		<div class="section-rule">
 			<div class="title--wrapper ">
 				<h2 class="title--section">Our Service</h2>
 				<p class="title--description">What help do you need ?</p>
 			</div>
 			
 			<div class="row">
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"  class="card">
 						<div class="card--img">
 							<img src="./gallery/service/001-cleaning-spray.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Cleaning</h2>
 						</div>
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/002-electrician.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Handy Man</h2>
 						</div>
 						

 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/003-technician.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">AC Repair</h2>
 						</div>
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/004-tools.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Hardware Repair</h2>
 						</div>
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"  class="card">
 						<div class="card--img">
 							<img src="./gallery/service/006-editor.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Graphic Designer</h2>
 						</div>
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/008-browser.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Website Designer</h2>
 						</div>	
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/005-airplane.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Moving & Storage</h2>
 						</div>	
 					</a>
 				</article>
 				<article class="col-6 col-md-3 col-xl-2">
 					<a href="./category-page.php"   class="card">
 						<div class="card--img">
 							<img src="./gallery/service/009-hair-treatment.png" alt=" card-title">
 						</div>
 						<div class="card__body">
 							<h2 class="card--title">Hair Care</h2>
 						</div>	
 					</a>
 				</article>
 			</div>
 			<button onclick="window.location.href='./category-page.php'">View all</button>
 		</div>
 	</section> 
 	<section class="about">
 		<div class="section-rule">
 			<div class="title--wrapper section--title__margin">
 				<h2 class="title--section">This is how it works</h2>
 				<p class="title--description">We have partnered with Dubai's best companies to get you the service you deserve .</p>
 			</div>
 			<div class="row ">
 				<article class="col-12 col-lg-6">
 					<div  class="card--sm card__hr">
 						<h3 class="count">01</h3>
 						<div class="card__body">
 							<h2 class="card--title">Tell us What you Need</h2>
 							<div class="card--description"><p>Let us know what service you are looking for. We offer more than 100 different services, and we are here to help.</p>
 							</div>
 						</div>
 						

 					</div>
 					<div  class="card--sm card__hr">
 						<h3 class="count">02</h3>
 						<div class="card__body">
 							<h2 class="card--title">We will find the right professional</h2>
 							<div class="card--description"><p>Book your service directly with us online, or request quotes from our Wide Range of Licensed service partners.</p>
 							</div>
 						</div>
 					</div>
 					<div  class="card--sm card__hr">
 						<h3 class="count">03</h3>
 						<div class="card__body">
 							<h2 class="card--title">Sit back and relax</h2>
 							<div class="card--description"><p> Let our professionals do the work while you focus on doing what you love. Our contact center is open 7 days a week to help you along the way.</p>
 							</div>
 						</div>
 					</div>
 				</article>
 				<article class="col-md-6">
 					<div class="img__wrapper">
 						<img src="./gallery/2427279-removebg-preview.png" alt="">
 						<h2 class="title--section ">24/7 Customer Service</h2>
 					</div>
 					

 				</article>
 			</div>
 		</div>
 	</section>


      <section class="popular--service">
            <div class="section-rule">
                  <div class="title--wrapper section--title__margin">
                        <h2 class="title--section">Our Popular Services</h2>
                  </div>
                  <div class="carousel">
                        <div class="item">
                              <a href="./form-page.php" class="card card__hr card--horizontal">
                                    <div class="card--img">
                                          <img src="./gallery/cdc-jjrXvzbqC5E-unsplash.jpg" alt="">
                                    </div>
                                    <div class="card--body">
                                          <p class="para text-muted">Rated 4.8 out of 5 </p>
                                          <h2 class="card--title">Home Cleaning</h2>
                                    </div>
                              </a>
                        </div>
                        <div class="item">
                              <a href="./form-page.php" class="card card__hr card--horizontal" >
                                    <div class="card--img">
                                          <img src="./gallery/kendall-henderson-Pj6TgpS_Vt4-unsplash.jpg" alt="">
                                    </div>
                                    <div class="card--body">
                                          <p class="para text-muted">Rated 4.8 out of 5 </p>
                                          <h2 class="card--title">Local Moving</h2>
                                    </div>
                              </a>
                        </div>
                        <div class="item">
                              <a href="./form-page.php" class="card card__hr card--horizontal">
                                    <div class="card--img">
                                          <img src="./gallery/annie-spratt-aJN7zURQ1Wg-unsplash.jpg" alt="">
                                    </div>
                                    <div class="card--body">
                                          <p class="para text-muted">Rated 4.8 out of 5 </p>
                                          <h2 class="card--title">Laundry</h2>
                                    </div>
                              </a>
                        </div>
                        <div class="item">
                              <a href="./form-page.php" class="card card__hr card--horizontal" >
                                    <div class="card--img">
                                          <img src="./gallery/david-pisnoy-46juD4zY1XA-unsplash.jpg" alt="">
                                    </div>
                                    <div class="card--body">
                                          <p class="para text-muted">Rated 4.8 out of 5 </p>
                                          <h2 class="card--title">Painting</h2>
                                    </div>
                              </a>
                        </div>
                  </div>
            </div>
      </section>

      <section class="proff popular--service">
            <div class="section-rule">
                  <div class="row">
                        <article class="item col-sm-4">
                              <div  class="card card__hr card--horizontal">
                                    <div class="card--img">
                                          <img src="./gallery/service/002-electrician.png" alt="">
                                    </div>
                                    <div class="card--body">
                                          <h2 class="card--title">500+</h2>
                                          <p class="para text-muted">Professionals</p>
                                    </div>
                              </div>
                        </article>
                        <article class="item col-sm-4">
                              <div  class="card card__hr card--horizontal">
                                    <div class="card--img">
                                          <img src="./gallery/service/011-constellation.png" alt="">
                                    </div>
                                    <div class="card--body">
                                          <h2 class="card--title">18+</h2>
                                          <p class="para text-muted">Categories</p>
                                    </div>
                              </div>
                        </article>
                        <article class="item col-sm-4">
                              <div  class="card card__hr card--horizontal">
                                    <div class="card--img">
                                          <img src="./gallery/service/010-championship.png" alt="">
                                    </div>
                                    <div class="card--body">
                                          <h2 class="card--title">100+</h2>
                                          <p class="para text-muted">Success Stories</p>
                                    </div>
                              </div>
                        </article>

                  </div>
            </div>

      </section>


      <!-- <section class="testimonials">
            <div class="section-rule">

                  <div class="title--wrapper">
                        <h2 class="title--section">Customer reviews</h2>
                        <p class="title--description">What customers are saying about us</p>
                  </div>
                  <div class="row">
                        
                  </div>
            </div>
      </section> -->

      <section class="download testimonials">
            <div class="section-rule">
                  <div class="row no-gutters">
                        <aside class="col-sm-4 col-lg-6">
                              <div class="image">
                                    <img src="./gallery/mob.png" alt="" >
                              </div>
                        </aside>
                        <aside class="col-sm-8 col-lg-6">
                              <article class="wrapper">
                                    <div class="title--wrapper text-left">
                                          <h2 class="title--section">Refer and get free services</h2>
                                          <p class="title--description">Refer a friend and get $20 for each referral. They will get an instant $20 off too</p>
                                    </div>
                                    <form action="./search-page.php" class="form-inline">
                                          <div class="form-group">
                                                <input id="phone" name="phone" type="tel" class="form-control" >
                                                <button type="submit">Send</button> 
                                          </div>
                                    </form>
                              </article>
                        </aside>
                  </div>
                  <div class="row">
                        <article class="col-10 col-sm-6 col-lg-4">
                              <div class="card--horizontal ">
                                    <div class="card-top d-flex">
                                          <div class="card-img">
                                                <img src="./gallery/michael-dam-mEZ3PoFGs_k-unsplash-min.jpg" alt="Person name">
                                          </div>
                                          <div class="time">
                                                <h2 class="personname">Horikita Natsu</h2>
                                                <time>jan 02,2020</time>
                                                <div class="star">
                                                      <span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span>
                                                </div>
                                          </div>

                                    </div>
                                    <div class="card-body">
                                          <h3 class="card--title">Excellence Service</h3>
                                          <p class="card--description">Storage keys team was very professional and great job done, have taken super care and been very polite and nice did not see the time and was focused on their task.
                                          I highly recommend them a great job.</p>
                                    </div>
                              </div>
                        </article>
                        <article class="col-10 col-sm-6 col-lg-4">
                              <div class="card--horizontal ">
                                    <div class="card-top d-flex">
                                          <div class="card-img">
                                                <img src="./gallery/marius-ciocirlan-vMV6r4VRhJ8-unsplash-min.jpg" alt="Person name">
                                          </div>
                                          <div class="time">
                                                <h2 class="personname">Subaru Aayanokunji</h2>
                                                <time>jan 02,2020</time>
                                                <div class="star">
                                                      <span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span>
                                                </div>
                                          </div>

                                    </div>
                                    <div class="card-body">
                                          <h3 class="card--title">Excellence Service</h3>
                                          <p class="card--description">Storage keys team was very professional and great job done, have taken super care and been very polite and nice did not see the time and was focused on their task.
                                          I highly recommend them a great job.</p>
                                    </div>
                              </div>

                        </article>
                        <article class="col-10 col-sm-6 col-lg-4 ">
                              <div class="card--horizontal ">
                                    <div class="card-top d-flex">
                                          <div class="card-img">
                                                <img src="./gallery/michael-dam-mEZ3PoFGs_k-unsplash-min.jpg" alt="Person name">
                                          </div>
                                          <div class="time">
                                                <h2 class="personname">Horikita Natsu</h2>
                                                <time>jan 02,2020</time>
                                                <div class="star">
                                                      <span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span><span class="material-icons">star</span>
                                                </div>
                                          </div>

                                    </div>
                                    <div class="card-body">
                                          <h3 class="card--title">Excellence Service</h3>
                                          <p class="card--description">Storage keys team was very professional and great job done, have taken super care and been very polite and nice did not see the time and was focused on their task.
                                          I highly recommend them a great job.</p>
                                    </div>
                              </div>
                        </article>
                  </div>

                  
            </div>

      </section>
</main>
<style>
    footer{
         background-color: #fff !important;
   }
</style>
<?php include 'footer.php';?>
<script src="./node_modules/country/build/js/intlTelInput.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
         var input = document.querySelector("#phone");
         window.intlTelInput(input, {
             autoHideDialCode: false,
             autoPlaceholder: "off",
             hiddenInput: "full_number",
             placeholderNumberType: "MOBILE",
             preferredCountries: ['np', 'in'],
             separateDialCode: true,
             utilsScript: "./node_modules/country/build/js/utils.js",
       });
   });

// here go all the jquery
$(document).ready(function(){
    $('.iti__arrow').html(`<svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path fill-rule="evenodd" clip-rule="evenodd" d="M4.49719 5C4.72226 5 4.93607 4.91111 5.09362 4.75556L8.83542 0.961111C9.05486 0.744444 9.05486 0.388889 8.83542 0.166667C8.61597 -0.05 8.26149 -0.05 8.04204 0.166667L4.49719 3.76111L0.957956 0.166667C0.738512 -0.0555556 0.384026 -0.0555556 0.164583 0.166667C-0.0548609 0.388889 -0.0548609 0.738889 0.164583 0.961111L3.90638 4.75556C4.0583 4.91111 4.27212 5 4.49719 5Z" fill="#4C4D4F"/>
         </svg>
         `);
})
</script>
<script>
	$(document).ready(function(){
		$('.screen .carousel').slick({
			infinite: true,
			autoplay:true,
			lazyLoad: 'ondemand',
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows:false,
			draggable:true,
		});


            $('.popular--service .carousel').slick({
                  infinite: true,
                  autoplay:true,
                  lazyLoad: 'ondemand',
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrows:true,
                  draggable:true,
                  prevArrow:"<button class=' slick-prev'><i class='material-icons'>keyboard_arrow_left</i></button>",
                  nextArrow:"<button class=' slick-next '><i class='material-icons'>keyboard_arrow_right</i></button>",
                  responsive: [
                  {
                        breakpoint: 840,
                        settings: {
                              arrows:false,
                              slidesToShow:1.6,
                        }
                  },
                  {
                        breakpoint: 600,
                        settings: {
                              slidesToShow:1.1,
                        }
                  }

                  ]
            });
      })
</script>

</body>
</html>
