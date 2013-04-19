<?php

/*

Template Name: Event

*/

?>
<?php
 $date = isset($_GET['date'])?$_GET['date']:"";
 $op = isset($_GET['op'])?$_GET['op']:"";
 
 if($op == 1) $heading = date("l F j, Y", strtotime("+1 day", strtotime($date)));
 else if($op == -1) $heading = date("l F j, Y", strtotime("-1 day", strtotime($date)));
 else $heading = date("l F j, Y", strtotime($date));
 
 $date = date('Y-m-d', strtotime($heading));
 $today = date('Y-m-d');

 $diff = strtotime($date) - strtotime($today);
 $diff /= (24*60*60);

 get_header(); 
?>
<div data-role="page" data-theme="b" id="eventpage">
        
     <?php include("header_portion.php");?>
       <div data-role="content" id="content">
          <h1><?php the_title(); ?></h1> <br/><br/>
          <ul data-role="listview" id="eventlist">
                <li data-role="list-divider">
                  <? if($diff > -31 ) {
                  ?>
                    <a id="next" href="<? bloginfo('url'); ?>/upcoming_events/?date=<?echo $date;?>&op=-1" data-direction="reverse" data-transition="slide"><img src="<? url(); ?>/images/prev.png"></a>
                  <?
                } ?>
                  <label id="day"><center>
                    <?=$heading;?>
                  </center></label>
                  <? if($diff < 31) { ?>
                  <a id="prev" href="<? bloginfo('url'); ?>/upcoming_events/?date=<?echo $date;?>&op=1"  data-transition="slide"><img src="<? url(); ?>/images/next.png"></a>
                  <? } ?> 
                </li> 

                <li>
                  <h3><a href="index.html">Stephen Weber</a></h3>
                  <p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
                  <p class="ui-li-aside"><strong>6:24</strong>PM</p>
                </li>
      <li>
        <h3><a href="index.html">jQuery Team</a></h3>
        <p><strong>Boston Conference Planning</strong></p>

        <p class="ui-li-aside"><strong>9:18</strong>AM</p>
      </li>
          </ul>
       </div>
<?php get_footer(); ?>

