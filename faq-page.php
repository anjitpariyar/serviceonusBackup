<?php
include 'header.php';
include './template/nav.php';
?>
<main class="common-page page--aboutus page--faq">
	<div class="screen">
		<div class="section-rule">
			<div class="wrapper">
				<div class="title--wrapper ">
					<h2 class="title--section">FAQ </h2>

				</div>

				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							
							<a  data-toggle="collapse" href="#collapseOne" class="collapsed">
								What is ServiceMarket? <span>+</span>
							</a>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							
							<a  data-toggle="collapse" href="#collapseTwo" class="collapsed">
								Who will come to my home?<span>+</span>
							</a>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							
							<a  data-toggle="collapse"  class="collapsed" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								How do I pay for the service? <span>+</span>
							</a>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
				
				
			</div>

		</div>

	</div>
	
</main>


<?php include 'footer.php';?>
<script>
	$(document).ready(()=>{
		let counter= 0;
		$('.card-header a').click((e)=>{
			setInterval(()=>{
				$('.card-header a span').html('-');
				$('.card-header a.collapsed span').html('+');
			},1000)
		})
	})
	
</script>
</body>
</html>	