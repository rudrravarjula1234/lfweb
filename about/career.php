<div class="page">
<?php
    include "header.php";
    
?>  
<div class="banr">
        <img src="images/OFFICE_meeting_48_WS.jpg" style="object-fit:cover; width:100%;">
</div>
<div class="section-md novi-background bg-cover bg-gray-light text-center">
        <div class="shell-fluid shell-custom-width">
            <h3>Careers</h3>
    <div class="container">

<ul class="nav nav-tabs">
  <li class="active"><a href="#menu0">Operations</a></li>
  <li><a href="#menu1">Technical</a></li>
</ul>
<div class="tab-content">
    <div id="menu0" class="tab-pane fade in active">
    <blockquote style="font-size:20px;margin-top:50px;"> 
        There are no Job Postings yet
    </blockquote>     
    </div>
    <div id="menu1" class="tab-pane fade">
    <blockquote style="font-size:20px;margin-top:50px;"> 
        There are no Job Postings yet
    </blockquote>     
        
    </div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
    
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
  
});
</script>
<script>
$(document).ready(function(){
    
    $(".about").removeClass("active");
    $(".career").addClass("active");
    $(".job").removeClass("active");
    $(".press").removeClass("active");
    $(".shop").removeClass("active");
    $(".start").removeClass("active");
    $(".sucess").removeClass("active");
    $(".pres").removeClass("active");
});
</script>   
<?php
    include "footer.php";
?>
</div>