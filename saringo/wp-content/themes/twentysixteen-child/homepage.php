
<section class="content-box detail-content no-bottom-pad"><!--Start Box-->
	<div class="container">
		<div class="row wrap-col">
			<div class="item">
				<div class="item-content center">
					<h4>You Can Advertise Your Business Here</h4>
					<p>
						For More Details Contact</br>
						<a href="mailto:arunmcamdu@gmail.com">arunmcamdu@gmail.com</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content-box detail-content"><!--Start Box-->
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-viadeo" aria-hidden="true"></i>Thought of the Day</h2>
					</div>
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'thoughts'
			      );
				    $thoughts = wp_get_recent_posts( $args);
				    foreach ($thoughts as $recent){
				    	echo '<div class="item">'.get_the_post_thumbnail($recent['ID']).'<div class="item-content"><p>'.substr($recent["post_content"], 0, 100).'</p><h5 class="author"><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a></h5></div></div> ';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-chrome" aria-hidden="true"></i>ADVERTISING</h2>
					</div>
					<div class="item">
						<div class="item-content">
							<h4>You Can Advertise Your Business Here</h4>
							<p>
								For More Details Contact</br>
								<a href="mailto:arunmcamdu@gmail.com">arunmcamdu@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-bolt" aria-hidden="true"></i>Employment News</h2>
					</div>
					<div class="item">
						<?php 
							$args = array(
						    'numberposts' => 1,
						    'category_name' => 'recruitement'
				      );
					    $employments = wp_get_recent_posts( $args);
					    foreach ($employments as $recent){
					    	echo '<div class="item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><div class="info">Posted on '.$recent['post_date_gmt'] .'</div><p>'.substr($recent["post_content"], 0, 100).'</p><a href="' . get_permalink($recent["ID"]) . '" >Read More...</a></div>';
					    }
						?>
					</div>
				</div>

			</div>
			<div class="col-sm-6 events">
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-calendar-check-o" aria-hidden="true"></i>UPCOMING EVENTS</h2>
					</div>
					
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'events'
			      );
				    $events = wp_get_recent_posts( $args);				    
				    foreach ($events as $recent){
				    	$eventDate = get_field('event_date', $recent['ID']);
				    	$eventDate = new DateTime($eventDate);
				    	echo '<div class="row item"><div class="col-sm-4 item-date-box"><div class="item-caption-inner">
							<div class="item-caption-inner1"><h3>'.$eventDate->format('j').'</h3>
								<span>'.$eventDate->format('M Y').'</span></div></div></div><div class="col-sm-8 item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><div class="info"></div><p>'.substr($recent["post_content"], 0, 200).'</p></div></div>';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-bolt" aria-hidden="true"></i>News</h2>
					</div>
					<div class="item">
						<?php 
							$args = array(
						    'numberposts' => 1,
						    'category_name' => 'news'
				      );
					    $news = wp_get_recent_posts( $args);
					    foreach ($news as $recent){
					    	echo '<div class="item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><div class="info">Posted on '.$recent['post_date_gmt'] .'</div><p>'.substr($recent["post_content"], 0, 300).'</p><a href="' . get_permalink($recent["ID"]) . '" >Read More...</a></div>';
					    }
						?>
					</div>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-bolt" aria-hidden="true"></i>Today in History</h2>
					</div>
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'today'
			      );
				    $events = wp_get_recent_posts( $args);				    
				    foreach ($events as $recent){
				    	$eventDate = get_field('event_date', $recent['ID']);
				    	$eventDate = new DateTime($eventDate);
				    	echo '<div class="row item"><div class="col-sm-4 item-date-box"><div class="item-caption-inner">
							<div class="item-caption-inner1"><h3>'.$eventDate->format('j').'</h3>
								<span>'.$eventDate->format('M Y').'</span></div></div></div><div class="col-sm-8 item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><div class="info"></div><p>'.substr($recent["post_content"], 0, 170).'</p><a href="' . get_permalink($recent["ID"]) . '">Read More...</a></div></div>';
				    }
					?>
				</div>
				<div class="wrap-col">
					<?php echo do_shortcode( '[dwqa-list-questions]' ); ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-futbol-o" aria-hidden="true"></i>Sports</h2>
					</div>					
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'sports'
			      );
				    $sports = wp_get_recent_posts( $args);				    
				    foreach ($sports as $recent){
				    	echo '<div class="item">'.get_the_post_thumbnail($recent['ID']).'<div class="item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><p>'.substr($recent["post_content"], 0, 100).'</p></div><a href="' . get_permalink($recent["ID"]) . '" class="read-link">Read More...</a></div> ';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2>Facebook Page</h2>
					</div>
					<div class="item">
						<?php echo do_shortcode( '[custom-facebook-feed]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
