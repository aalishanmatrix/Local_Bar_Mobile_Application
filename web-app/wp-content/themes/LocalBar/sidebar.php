<div data-role="page" data-theme="b">
        <?php include("header_portion.php");?>
<div  data-role="content" id="content" data-theme="b"> 

<div id="index-image">
  	 <!-- it will be changed later  -->
  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg"/>
</div>

 <ul data-role="listview" data-inset="true" data-theme="c">
    
    <li data-icon="list-arrow">
        <a href="<? bloginfo('url'); ?>/todays-evening/" data-transition="flip">
            Today's Evening
        </a>
    </li>
    <li data-icon="list-arrow">
    <!-- <a href="<? bloginfo('url'); ?>/menu/"  data-transition="flip"> -->
       <a href="https://docs.google.com/gview?embedded=true&url=http://greenfiremarket.com/wp-content/uploads/2013/01/Menu.pdf">
      Menu
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/upcoming_events/?date=<? echo date('Y-m-d');?>" data-transition="slide">
      Events
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/contact/"  data-ajax="false">
      Contact
    </a>
  </li>
</ul>

</div>



