<div class="page">
<?php
    include "header.php";
    
?>
<div>
<style>
  .card{
  	font-family:sans-serif;
    text-align:center;
    width:280px;
    margin:20px;
    background-color:white;
  }
  .card-text{
  	margin-left:10px;
  	margin-right:10px;
    font-size:14px;
  }
  .card-img-top{
  	width:150px;
    height:150px;
    border-radius:150px;
    margin-top:20px;
    border:10px solid #F0F0F0;
  }
  .web-button{
  	width:100%;
    background-color:#F6455E;
    border:none;
    border-radius:0px 0px;
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
</style>
</div>  
    <div class="banr">
        <img src="images/startup.png" style="object-fit:cover; width:100%;">
    </div>  
    <div class="section-md novi-background bg-cover bg-gray-light">
        <div class="shell-fluid text-center">
        <h3>Our StartUps</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/heartynote.jpg" alt="Heartynote"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>Hearty note</center></h4>
                                <p class="card-text">Hearty note is a place where you can note with heart about everything in your life.</p>
                                <a href="https://www.heartynote.com" target="_blank" class="btn btn-primary web-button"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/swap.jpg" alt="SWAP"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>SWAP</center></h4>
                                <p class="card-text">Swap.production is a media production startup aimed at filming new concept oriented short films.</p>
                                <a href="https://www.facebook.com/swap.productions/" target="_blank" class="btn btn-primary web-button"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/arphotography.jpg" alt="AR Photography"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>AR Photography</center></h4>
                                <p class="card-text">ARPhotography is a Media startup for capturing the memories of an individual.</p>
                                <a href="https://www.facebook.com/arphotographyarun/" target="_blank" class="btn btn-primary web-button"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/framefixus.jpg" alt="Frame Fixus"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>Frame Fixus</center></h4>
                                <p class="card-text">FrameFixus has the theme about movies and media. They frame movies and media..</p>
                                <a href="https://www.facebook.com/swap.productions/" target="_blank" class="btn btn-primary web-button"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/indoshoppy.jpg" alt="Indo Shoppy"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>Indo Shoppy</center></h4>
                                <p class="card-text">Indoshoppy is established with a vision to provide cost and time effective online shopping to its customers.</p>
                                <a href="https://www.facebook.com/indoshoppy/" target="_blank" class="btn btn-primary web-button"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/runway.jpg" alt="Card image"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>Runway Labz</center></h4>
                                <p class="card-text">Runway LABZ is a start-up aimed at producing low-cost technologies related to IOT, smart homes, research and consumer robotics.</p>
                                <a href="http://www.runwaylabz.com" class="btn btn-primary web-button" target="_blank"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card"><center>
                                <img class="card-img-top" src="images/dream.png" alt="Card image"></center>
                            <div class="card-body">
                                <h4 class="card-title"><center>Dreamwishers</center></h4>
                                <p class="card-text">Dream wishers has a theme of providing unique services to connect people thoughts and emotions by delivering their dreams as they wish.</p>
                                <a href="http://www.dreamwishers.com" class="btn btn-primary web-button" target="_blank"><center>Visit Website</center></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
$(document).ready(function(){
    
    $(".about").removeClass("active");
    $(".career").removeClass("active");
    $(".job").removeClass("active");
    $(".press").removeClass("active");
    $(".shop").removeClass("active");
    $(".start").addClass("active");
    $(".sucess").removeClass("active");
    $(".pres").removeClass("active");
});
</script>
<?php   
    include "footer.php";
?>
