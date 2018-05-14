<div class="page">

<?php
    include "header.php";
    
?>  
<div>
<style>
  .card{
  	font-family:sans-serif;
    text-align:center;
    width:250px;
    padding:10px;
    background-color:white;
    margin:20px;
  }
  .card-text{
    font-size:14px;
  }
  .card-img-top{
  	width:150px;
    height:150px;
    border-radius:150px;
    border:10px solid #F0F0F0;
  }
  .card-title{
  	color:#ff612F;
  	font-size:24px;
    font-weight:normal;
    margin:20px;
  }
  .card-body{
  	padding:0px;
  }
  .social{
  color:#FF0000;
  margin:10px;
  border-radius:14px;
  }
  </style>
</div>
<div class="banr">
        <img src="../images/startup.png" style="object-fit:cover; width:100%;">
    </div>  


	<section class="section-lg novi-background bg-cover" id="about-us" data-type="anchor">
		<div class="shell">
			<div class="range spacing-55">
				<div class="cell-sm-12"><h3>About Technology Incubation Hub</h3>
					<p>The genesis of Technology Incubation Hub has brought for the students a
platform to exhibit what they have learnt from all the modules in this peer to peer
learning program. At this stage, the ideas from the selected group will be transformed
into a community based project or a Startup. It aims to assist students to strengthen and
convert their thoughts into actions. Technology Incubation Hub has a network with Angel
Investors and Startup Incubators. This helps the young entrepreneurs to get assistance
in the form of technical mentoring and financial support and ultimately the students will
be landed into Business Market from Graduate Environment. Complete Orientation and
transformation of student ideas will be monitored by the Mentors from their respective
field of excellence. Since many Startups in their toddler stage face many problems due
to lack of various resources, Technology incubation Hub helps these Startups to get
through initial hurdles in starting up a business either directly or indirectly. These include
funding, legal, services and other common requisites for running a business.</p>
<p>The most common are:</p>
                    <ul>
                        <li>Help with presentation skills.</li>
                        <li>Market Research.</li>
                        <li>Assistance in Business Basics.</li>
                        <li>Access to Angel Investors or Venture Capital.</li>
                        <li>Technology Assistance</li>
                        <li>Team Identification</li>
                    </ul>
				</div>
		</div>
	</section>

<script>
$(document).ready(function(){
    
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $(".sac").removeClass("active");
    $(".tih").addClass("active");
    $(".svr").removeClass("active");
    $(".inschools").removeClass("active");
});
</script>
<?php
    include "footer.php";
?>
</div>      
</body>
</html>
