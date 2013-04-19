  <!-- panel -->
    <div data-role="panel" id="panel" data-position="left" data-display="push" data-theme="b">
     
        <div class="social">
                        <a href="#"><img src="<? url(); ?>/images/facebook.png"/></a>
                        <a href="#"><img src="<? url(); ?>/images/twitter.png"/></a>
                        <a href="#"><img src="<? url(); ?>/images/youtube.png"/></a> 
                        <a href="#"><img src="<? url(); ?>/images/google_plus.png"/></a>
              </div>
       <br/><br/> 
    <ul data-role="listview" data-inset="false" data-theme="c">
    <li data-icon="list-arrow">
        <a href="<? bloginfo('url'); ?>" data-transition="flip">
          Home
        </a>
    </li>
    <li data-icon="list-arrow">
        <a href="<? bloginfo('url'); ?>/todays-evening/" data-transition="slide">
            Today's Evening
        </a>
    </li>
    <li data-icon="list-arrow">
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
<br/><br/>      
        <center>
          
          <a id="close" href="#toolbar" data-rel="close" data-role="button" data-theme="c" data-icon="delete" data-inline="true">Close</a>
        </center>  
        
    </div><!-- /panel -->