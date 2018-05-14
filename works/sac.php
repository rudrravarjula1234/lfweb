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
        <img src="../images/slider-2.jpg" style="object-fit:cover; width:100%;">
    </div>  


	<section class="section-lg novi-background bg-cover" id="about-us" data-type="anchor">
		<div class="shell">
			<div class="range spacing-55">
				<div class="cell-sm-12"><h3>About Student Activity Center</h3>
					<p>The Student Activity Centre serves as a non-traditional and graduate student community. SAC offers outstanding facilities to the graduate students which support their academic discipline and all curricular activities. This facility positively impacts the learning environment and the collaborative interaction between students, faculty and staff. They will safe, involved and comfortable throughout the process. Besides, the SAC enables the student to search for a club that fits their interests and goals.</p>
                    <p>The Student Activity Centre is a group of dedicated student community committed to the advancement of student opportunities. Members of the team have the opportunity to further develop and apply their leadership skills through the planning of individual workshops. Students also gain experience in other areas such as public speaking, consulting, networking and marketing. In this role, students will serve as role models and mentors to others and assist the Student Activities Centre.</p>
                    <p>At Student Activity Center, a student can:</p>
                    <ul>
                        <li>Improve their academic and technical knowledge with new – learning model.</li>
                        <li>Go through individualized ice-breaker and team building activities.</li>
                        <li>Get assistance from interested domain/club.</li>
                        <li>Can erect a new club based on his/her interest.</li>
                        <li>Provide custom workshops to improve their club.</li>
                        <li>Get involved in student self – learning environment.</li>
                        <li>Develop live projects which are helpful for the society.</li>
                        <li>Have peer interaction with expertise person from the domain.</li>
                    </ul>
				</div>
		</div>
	</section>

<script>
$(document).ready(function(){
    
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $(".sac").addClass("active");
    $(".tih").removeClass("active");
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
