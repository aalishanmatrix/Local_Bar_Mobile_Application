<?php

/*

Template Name: Today's Stuff

*/

?>

<?php get_header(); ?>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<div data-role="content" id="content" data-theme="b">
	<h1>Today's Evening Stuff</h1> 
  <script type="text/javascript">
    $(document).ready(function(){
	     function imageResize(){
		   var contentWidth = $(window).width();
		   $('.rs-slider li img').css('width', contentWidth);
	  }
	  imageResize();
	  $(window).bind("resize",function(){
		imageResize();
	  });   
    });
  </script>
  <link rel="stylesheet" href="<? url(); ?>/refineslide.css" /> <!--Image slideshow css-->
  <script src="<? url(); ?>/jquery.refineslide.min.js"></script> <!--Image slideshow js--> 
<!--   <div id="image_slider"> -->
      <ul class="rs-slider">
           <li>
           	<img src="<? url(); ?>/images/slider_image/slider04.jpg" alt="Local Bar" />
           	<div class="rs-caption">Lorem Ipsum is coming!</div>
           	<div class="rs-desc">During the 1500s, a printer adapted Cicero's text to develop a page of type samples. Since then, the Latin-like text has been the printing industry's standard for fake, or dummy, text.</div>
           </li>
           <li>
           	<img src="<? url(); ?>/images/slider_image/slider02.jpg" alt="" />
           	<div class="rs-caption">Today's evening will be rocking!</div>
           	<div class="rs-desc">Before electronic publishing, graphic designers had to mock up layouts by drawing in squiggled lines to indicate text. The advent of self-adhesive sheets preprinted with "Lorem ipsum" gave a more realistic way to indicate where text would go on a page.</div>
           </li>
     </ul>
<!--   </div> -->
  <script>
    $(document).ready(function () {
        $('.rs-slider').refineSlide({
            transition         : 'fade',
            transitionDuration : 4000,
            autoPlay           : true,
            keyNav             : false,
            delay              : 2000,
            controls           : null,
            onInit : function(){
              $('.caption').text($(this.slider.$slides[0]).find('div.rs-caption').html());
              $('.description').text($(this.slider.$slides[0]).find('div.rs-desc').html());
            },
            onChange : function () {
              var i = this.slider.currentPlace;
              var $current = $(this.slider.$slides[i]);
              $('.caption').text($current.find('div.rs-caption').html());
              $('.description').text($current.find('div.rs-desc').html());
            }
        });
    });
  </script>
  <div class="caption"></div>
  	<div class="description"></div> 
</div>	
<?php get_footer(); ?>