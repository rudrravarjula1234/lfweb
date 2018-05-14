<?php
include 'header.php';
?>
<div>
<style>
gallery { 
  padding: .5vw;
  font-size: 0;
  display: -ms-flexbox;
  -ms-flex-wrap: wrap;
  -ms-flex-direction: column;
  -webkit-flex-flow: row wrap; 
  flex-flow: row wrap; 
  display: -webkit-box;
  display: flex;
}
gallery div { 
  -webkit-box-flex: auto;
  -ms-flex: auto;
  flex: auto; 
  width: 200px; 
  margin: .5vw; 
}
gallery div img { 
  width: 100%; 
  height: auto; 
}
@media screen and (max-width: 400px) {
  gallery div { margin: 0; }
  gallery { padding: 0; }
  
}
</style>
</div>
		<div class="swiper-bg-wrap swiper-style-1">
			<div class="swiper-container swiper-slider swiper-bg swiper-height-1" data-autoplay="6500" data-slide-effect="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-slide-bg="../images/slider-1.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
							</div>
						</div>
					</div>
					<div class="swiper-slide" data-slide-bg="../images/slider-2.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
							</div>
						</div>
					</div>
					<div class="swiper-slide" data-slide-bg="../images/slider-3.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
							</div>
						</div>
					</div>
					
				</div>
				<div class="swiper-button-prev"><span>Prev</span></div>
				<div class="swiper-button-next"><span>Next</span></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>

    <section class="section-lg novi-background bg-cover" id="about-us" data-type="anchor">
		<div class="shell">
			<div class="range spacing-55">
				<div class="cell-sm-4">
					<div class="sqback"></div>
					<img class="img-responsive" src="../images/about-us.jpg" style="object-fit:cover;">
                </div>
				<div class="cell-sm-8"><h3>About Vyuha</h3>
					<p>Now-a-days the industrial people need the students who are having the skills related to linguistic, body-language, logical thinking, spatial smartness, listening and inter-personal as their employees. This will help in enhancing spatial and logical thinking. This event will also helps to enhance memorizing and spontaneity in their progress.</p>
				</div>
			</div>
		</div>
	</section>
<br>
<center><h3>Gallery</h3></center>
<br>
<gallery>
<div><img src="../Events/vyuha/1.jpg" alt></div>
<div><img src="../Events/vyuha/2.jpg" alt></div>
<div><img src="../Events/vyuha/3.jpg" alt></div>
<div><img src="../Events/vyuha/4.jpg" alt></div>
<div><img src="../Events/vyuha/5.jpg" alt></div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</gallery> 
<script>
$(".vyuha").addClass("active");
</script>
<?php
include 'footer.php';
?>