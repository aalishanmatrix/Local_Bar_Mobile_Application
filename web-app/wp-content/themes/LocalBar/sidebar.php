<script type="text/javascript">
$(document).bind('pageinit', function() {
  function imageresize() {
     var contentwidth = $(window).width();
     $('#splash_image').attr('width', contentwidth );
  }
  imageresize();
  $(window).bind("resize", function(){
    imageresize();
  });
});
</script>
<div  data-role="content" id="content" data-theme="b"> 

<div id="index-image">
  	 <!-- it will be changed later  -->
  	<img id="splash_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg"/>
</div>

<ul data-role="listview" data-inset="true" data-theme="c">
	<!-- <li data-role="divider" data-theme="a">Go Action</li> -->
	<li data-icon="list-arrow">
		<a href="options.html">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png"> -->
		    Today's Evening
	    </a>
    </li>
	<li data-icon="list-arrow">
    <a href="methods.html">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png"> -->
      Menu
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="events.html">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/events.png"> -->
      Events
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="events.html">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png"> -->
      Contact
    </a>
  </li>
</ul>

</div>

