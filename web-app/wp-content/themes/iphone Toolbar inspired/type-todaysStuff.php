<?php

/*

Template Name: Today's Stuff

*/

?>

<?php get_header(); ?>
<div data-role="page" data-theme="b" id="todaystuffpage">
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
        <?php include("header_portion.php");?>
<div data-role="content" id="content" data-theme="b">
	<h1><?php the_title(); ?></h1> 
      <ul class="rs-slider">
        <?php
            $args = array('post_type' => 'slide', 'posts_per_page' => 5);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); ?>
            <li>
              <?php
               $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(1100, 744), false, '' );
              ?>
              <img src="<?php echo $src[0];?>" title="<div><?php the_title(); ?></div><?php the_content(); ?>"  alt="Local Bar" />
              <div class="rs-caption"><?php the_title(); ?></div>
              <div class="rs-desc"><?php the_content(); ?></div>
            </li>
        <?php  endwhile;  ?>
      </ul>
<!--   </div> -->
  <script>
    $(document).ready(function () {
        $('.rs-slider').refineSlide({
            transition         : 'fade',
            transitionDuration : 2000,
            autoPlay           : true,
            keyNav             : false,
            delay              : 3000,
            controls           : null,
            onInit : function(){
              $('.caption').text($(this.slider.$slides[0]).find('div.rs-caption').html());
              $('.description').text($(this.slider.$slides[0]).find('div.rs-desc p').html());
            },
            onChange : function () {
              var i = this.slider.currentPlace;
              var $current = $(this.slider.$slides[i]);
              $('.caption').text($current.find('div.rs-caption').html());
              $('.description').text($current.find('div.rs-desc p').html());
            }
        });
    });
  </script>
  <div class="caption"></div>
  	<div class="description"></div> 
</div>	
<?php get_footer(); ?>