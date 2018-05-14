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
				<div class="cell-sm-8"><h3>About Clash of Kingdoms</h3>
					<p>Normally it’s a pride for any country to have so many fresh out graduates but there can’t be a bigger shame for a nation to produce most of the graduates who are unfit of employability. Even though there were lakhs of graduates coming out every year only thousands of them were getting employed despite of their knowledge. The main reason behind this is lack of Soft Skills. The main motivation (root cause) in organizing/hosting the event CLASH OF KINGDOMS is to overcome this drawback i.e. the lack of Soft Skills. COK is stimulated in</p>
                    <br>
                    <ul>
                    <li>Develop good communication skills.</li>
                    <li>Mingle in a group of different sort of students and from different areas.</li>
                    <li>Develop his/her Inter Personal and Intra Personal skills.</li>
                    <li>To develop time management.</li>
                    <li>To overcome stage fear.</li>
                    <li>To train students to work under pressure.</li>
                    </ul>
                    <p>The skills focussed are:</p>
                    <ul>
                    <li>General Knowledge</li>
                    <li>Technical Skills</li>
                    <li>Creativity</li>
                    <li>Proactive Spirit</li>
                    <li>Speaking and body Language</li>
                    <li>Social Skills</li>
                    <li>Leadership</li>
                    </ul>
				</div>
			</div>
		</div>
	</section>
<br>
<center><h3>Gallery</h3></center>
<br>
<gallery>
<div><img src="../Events/cok/1.jpg" alt></div>
<div><img src="../Events/cok/2.jpg" alt></div>
<div><img src="../Events/cok/3.jpg" alt></div>
<div><img src="../Events/cok/4.jpg" alt></div>
<div><img src="../Events/cok/5.jpg" alt></div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</gallery> 
<script>
$(".cok").addClass("active");
</script>
<?php
include 'footer.php';
?>