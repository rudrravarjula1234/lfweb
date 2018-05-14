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
				<div class="cell-sm-8"><h3>About Campus Ambassador Program</h3>
					<p>It is an initiative to bring the technological colleges forward, by electing a college ambassador and to adopt a surrounding backward village and to convert it into a smart village. This program deals with the skills of the students, encourages innovation, develops marketing strategies and improves communication and understanding levels of the young pillars of our country in educational way as well as supports MAKE IN INDIA, Swatch - Bharat and young Entrepreneurships in economical way.</p>
                    <br>
                    <h3>Vision</h3>
                    <p>An effort to make every village in the country as a self-sustained power house with self-renewing survivability, as it may seek to bring SMART VILLAGE REVOLUTION.</p>
                    <h3>Mission</h3>
                    <ul>
                    <li>To elect a Campus Ambassador in the college by the mentioned criteria.</li>
                    <li>To adopt a village in the surrounding areas.</li>
                    <li>To rise start-ups associated with the colleges.</li>
                    <li>Village as R&D, establishing a Digital Market in the Village.</li>
                    </ul>
				</div>
			</div>
		</div>
	</section>
<br>
<center><h3>Gallery</h3></center>
<br>
<gallery>
<div><img src="../Events/cap/1.jpg" alt></div>
<div><img src="../Events/cap/2.jpg" alt></div>
<div><img src="../Events/cap/3.jpg" alt></div>
<div><img src="../Events/cap/4.jpg" alt></div>
<div><img src="../Events/cap/5.jpg" alt></div>
<div><img src="../Events/cap/6.jpg" alt></div>
<div><img src="../Events/cap/7.jpg" alt></div>
<div><img src="../Events/cap/8.jpg" alt></div>
<div><img src="../Events/cap/9.jpg" alt></div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</gallery> 
<script>
$(".cap").addClass("active");
</script>
<?php
include 'footer.php';
?>