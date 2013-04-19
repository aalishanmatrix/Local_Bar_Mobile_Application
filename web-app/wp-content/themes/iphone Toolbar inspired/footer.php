<div data-role="footer" data-position="fixed">
	<div data-role="navbar">
	<?php
	    $pageid = $post -> ID;
	    $jsid = json_encode($pageid);
		$menu_name = 'main_nav';
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] )) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
        }
        foreach ( $menu_items as $menu_item ) {
        	$numbers[] = get_post_meta( $menu_item->ID, '_menu_item_object_id', true );
        }
        $length = count($numbers);
    ?>    
	    <ul id="footer_nav">
	<?php  
	  for ($i=0; $i < $length; $i++) {
	  	$url = get_permalink($numbers[$i]);
	  	$title = get_the_title($numbers[$i]);
		if($title == "Contact" || $title == "Menu" ) {
			if($pageid == $numbers[$i]) {
				?>
				<li>
			  	<a href="<?=$url?>" id="<? echo "tab".($i + 1); ?>" data-icon="custom" class="ui-btn-active" data-ajax="false">
			      <?=$title?>
		        </a>
	         </li>
				<?
			} else {
			?>
			  <li>
			  	<a href="<?=$url?>" id="<? echo "tab".($i + 1); ?>" data-icon="custom" data-ajax="false">
			      <?=$title?>
		        </a>
	         </li>
		    <? }
		} else{
			if($title == "Events") $url.= "?date=".date('Y-m-d');
			if($pageid == $numbers[$i]) {
				?>
				<li>
			  	<a href="<?=$url?>" id="<? echo "tab".($i + 1); ?>" data-icon="custom" class="ui-btn-active" data-transition="slide">
			      <?=$title?>
		        </a>
	         </li>
				<?
			} else {
		?>
		    <li>
		    	<a href="<?=$url?>" id="<? echo "tab".($i + 1); ?>" data-icon="custom" data-transition="slide">
		    		<?=$title?>
		    	</a>
		    </li>
		<? } } 
	} ?>    		
		</ul>
	</div>
</div>
</div> <!--page ends-->
<?php //wp_footer(); ?>
</body>
</html>