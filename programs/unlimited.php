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
				<div class="cell-sm-8"><h3>About unlimited</h3>
					<p>This program will be initiated on morning (day1) at specified time. We will give them the videos of their specific subjects and ask them to form a team of 3 and we will give them case studies which was prepared by our subject mentors on their subjects. And we will ask the teams to solve in 48 hrs. All the teams has to work together continuously for 48hrs and has to successfully complete their assigned task. The program will be closed on 3rd day morning. In this program students from any branch can participate. </p>
                    <ul>
                    <li>Event objective:</li>
                    <li>Improve her/his creative and presentation skills.</li>
                    <li>Effective utilization of resources</li>
                    <li>Improve their technical skills and application skills.</li>
                    <li>To achieve their goals and objectives they have to adopt this learning methodology.</li>
                    <li>To inject self learning model into student community we had designed this program as a phase 1 for1st years to improve their learning ability</li>
                    </ul>
                </div>
			</div>
		</div>
	</section>
<br>
<center><h3>Gallery</h3></center>
<br>
<gallery>
<div><img src="../Events/unlimited/1.jpg" alt></div>
<div><img src="../Events/unlimited/2.jpg" alt></div>
<div><img src="../Events/unlimited/3.jpg" alt></div>
<div><img src="../Events/unlimited/4.jpg" alt></div>
<div><img src="../Events/unlimited/5.jpg" alt></div>
<div><img src="../Events/unlimited/6.jpg" alt></div>
<div><img src="../Events/unlimited/7.jpg" alt></div>
<div><img src="../Events/unlimited/8.jpg" alt></div>
<div><img src="../Events/unlimited/9.jpg" alt></div>
<div><img src="../Events/unlimited/10.jpg" alt></div>
<div><img src="../Events/unlimited/11.jpg" alt></div>
<div><img src="../Events/unlimited/12.jpg" alt></div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</gallery> 
<script>
$(".unlimited").addClass("active");
</script>
<?php
include 'footer.php';
?>