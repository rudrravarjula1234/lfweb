<div class="page">
<?php
    include "header.php";
    
?>  
<div class="banr">
        <img src="images/news.jpg" width="100%" height="650px;" alt="">
</div>
<div class="section-md novi-background bg-cover bg-gray-light text-center">
    <div class="shell-fluid shell-custom-width">
        <h3>Press Releases</h3>
        <div class="container" style="margin:30px;">
            <div class="accordion js-accordion">
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2018</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("IMG-20180504-WA0008.jpg","IMG-20180504-WA0009.jpg");
                                        $galname = array("April","April");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                        ?>
                                            <div class="col-sm">
                                                <span style="font-size:18px;">Content will be updated soon</span>
                                            </div>
                                        <?php        
                                        }
                                        else{
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2017</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("January.jpg","Surya Paper MSK.jpg","May 2017.jpg","July 2017.jpg","August.jpg");
                                        $galname = array("January","April","May","July","August");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                            ?>
                                                <div class="col-sm">
                                                    <span style="font-size:18px;">Content will be updated soon</span>
                                                </div>
                                            <?php        
                                            }
                                        else{    
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2016</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("December 2016.jpg");
                                        $galname = array("December");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                            ?>
                                                <div class="col-sm">
                                                    <span style="font-size:18px;">Content will be updated soon</span>
                                                </div>
                                            <?php        
                                            }
                                        else{                                            
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2015</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("January 2015.jpg","March 2015.jpg","March_2 2015.jpg","April 2015.jpg","June 2015.jpg","October 2015.jpg","November 2015.jpg");
                                        $galname = array("January","March","March","April","June","October","November");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                            ?>
                                                <div class="col-sm">
                                                    <span style="font-size:18px;">Content will be updated soon</span>
                                                </div>
                                            <?php        
                                            }
                                        else{    
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2014</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("January 2014.jpg","March 2014.jpg","April 2014.jpg","May 2014.jpg","May_2 2014.jpg","May_3 2014.jpg","June 2014.jpg","July 2014.jpg","July_1 2014.jpg","July_2 2014.jpg","July_3 2014.jpg","September 2014.jpg");
                                        $galname = array("January","March","April","May","May","May","June","July","July","July","July","September");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                            ?>
                                                <div class="col-sm">
                                                    <span style="font-size:18px;">Content will be updated soon</span>
                                                </div>
                                            <?php        
                                            }
                                        else{    
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
                <div class="accordion__item js-accordion-item active">
                    <div class="accordion-header js-accordion-header">2013</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $gal = array("March 2013.jpg","December 2013.jpg");
                                        $galname = array("March","December");
                                        $count=0    ;
                                        $a = sizeof($gal);
                                        if($a == 0){
                                            ?>
                                                <div class="col-sm">
                                                    <span style="font-size:18px;">Content will be updated soon</span>
                                                </div>
                                            <?php        
                                            }
                                        else{    
                                        for($i=1;$i<=$a;$i++)
                                        {
                                            $count++;
                                            if($count == 5){
                                                echo "</div>";
                                                echo "<div class='row'>";
                                                $count = 1;
                                            }
                                    ?>
                                    <div class="col-sm-3">
                                        <a class="galimage" target="_blank" href="201/<?php echo $gal[$i-1]; ?>" data-toggle="lightbox"><img src="201/<?php echo $gal[$i-1]; ?>" height="150" width="200" style="margin-top:10px;"></a>
                                        <div class="imagename">
                                            <h6><?php echo $galname[$i-1];?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of accordion body -->
                </div><!-- end of accordion item -->
            </div>
        </div>
    </div>
</div>
            
              <script>
                var accordion = (function(){
  
  var $accordion = $('.js-accordion');
  var $accordion_header = $accordion.find('.js-accordion-header');
  var $accordion_item = $('.js-accordion-item');
 
  // default settings 
  var settings = {
    // animation speed
    speed: 400,
    
    // close all other accordion items if true
    oneOpen: false
  };
    
  return {
    // pass configurable object literal
    init: function($settings) {
      $accordion_header.on('click', function() {
        accordion.toggle($(this));
      });
      
      $.extend(settings, $settings); 
      
      // ensure only one accordion is active if oneOpen is true
      if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
        $('.js-accordion-item.active:not(:first)').removeClass('active');
      }
      
      // reveal the active accordion bodies
      $('.js-accordion-item.active').find('> .js-accordion-body').show();
    },
    toggle: function($this) {
            
      if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
        $this.closest('.js-accordion')
               .find('> .js-accordion-item') 
               .removeClass('active')
               .find('.js-accordion-body')
               .slideUp()
      }
      
      // show/hide the clicked accordion item
      $this.closest('.js-accordion-item').toggleClass('active');
      $this.next().stop().slideToggle(settings.speed);
    }
  }
})();

$(document).ready(function(){
  accordion.init({ speed: 300, oneOpen: true });
});


            </script>            
            
<script>
$(document).ready(function(){
    
    $(".about").removeClass("active");
    $(".career").removeClass("active");
    $(".job").removeClass("active");
    $(".press").removeClass("active");
    $(".shop").removeClass("active");
    $(".start").removeClass("active");
    $(".sucess").removeClass("active");
    $(".pres").addClass("active");
});
</script>
    
<?php
    include "footer.php";
?>
</div>