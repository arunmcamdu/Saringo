
<?php
	$start = get_field('kural_number');
	http://api.forismatic.com/api/1.0/?method=getQuote&lang=en&format=json&jsonp
?>
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
						<h2><i class="fa fa-weibo" aria-hidden="true"></i>Thought of the Day</h2>
					</div>
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'thoughts'
			      );
				    $thoughts = wp_get_recent_posts( $args);
				    foreach ($thoughts as $recent){
				    	echo '<div class="item">'.get_the_post_thumbnail($recent['ID']).'<div class="item-content"><p>'.$recent["post_content"].'</p><h5 class="author"><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a></h5></div></div> ';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-google-wallet" aria-hidden="true"></i>MEME of the Day</h2>
					</div>
					<?php 
						$args = array(
					    'numberposts' => 1,
					    'category_name' => 'memes'
			      );
				    $memes = wp_get_recent_posts( $args);
				    foreach ($memes as $recent){
				    	echo '<div class="item">'.get_the_post_thumbnail($recent['ID']).'</div> ';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-chrome" aria-hidden="true"></i>Advertisement</h2>
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
						<h2><i class="fa fa-key" aria-hidden="true"></i>தொழில்நுட்ப செய்திகள்</h2>
					</div>
					<div class="item">						
						<?php
							$html = "";
							$url = "https://news.google.co.in/?hl=ta&output=rss&num=2&topic=t";
							$xml = simplexml_load_file($url);
							for($i = 0; $i < 2; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
				        $html .= "<div class='item-content'><a href='$link'><h3>$title</h3></a>";
								$html .= "<div class='info'>$pubDate</div>";
								$html .= "$description";
								$html .= "</div>";
							}
							echo $html;
						?>
					</div>
				</div>

			</div>
			<div class="col-sm-6 events">
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-bolt" aria-hidden="true"></i>முக்கிய செய்திகள்</h2>
					</div>
					<div class="item">
						
						<?php
							$html = "";
							$url = "https://news.google.com/?hl=ta&output=rss&num=3";
							$xml = simplexml_load_file($url);
							for($i = 0; $i < 3; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
				        $html .= "<div class='item-content'><a href='$link'><h3>$title</h3></a>";
								$html .= "<div class='info'>$pubDate</div>";
								$html .= "$description";
								$html .= "</div>";
							}
							echo $html;
						?>
					</div>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Upcoming Events</h2>
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
								<span>'.$eventDate->format('M Y').'</span></div></div></div><div class="col-sm-8 item-content"><a href="' . get_permalink($recent["ID"]) . '"><h3>' . $recent["post_title"].'</h3></a><div class="info"></div><p>'.substr($recent["post_content"], 0, 170).'</p><a href="' . get_permalink($recent["ID"]) . '">Read More...</a></div></div>';
				    }
					?>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-history" aria-hidden="true"></i>Today in History</h2>
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
			</div>
			<div class="col-sm-3">
				<div class="wrap-col thirukural">
					<div class="sub-title">
						<h2><i class="fa fa-dribbble" aria-hidden="true"></i>திருக்குறள்</h2>
					</div>	
					<div class="item" id="thirukural_container">	
						<div class="item-content">
							<h3>குறள் எண்: 1</h3>
							<p>
								அகர முதல எழுத்தெல்லாம் ஆதி <br/>
								பகவன் முதற்றே உலகு.
							</p>
							<p>English: <br/>
								'A' leads letters; the Ancient Lord Leads and lords the entire world
							</p>
						</div>			
					</div>
					
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-dribbble" aria-hidden="true"></i>விளையாட்டு செய்திகள்</h2>
					</div>	
					<div class="item">
						<?php
							$html = "";
							$url = "https://news.google.com/?hl=ta&output=rss&num=1&topic=s";
							$xml = simplexml_load_file($url);
							for($i = 0; $i < 1; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
				        $html .= "<div class='item-content'><a href='$link'><h3>$title</h3></a>";
								$html .= "<div class='info'>$pubDate</div>";
								$html .= "$description";
								$html .= "</div>";
							}
							echo $html;
						?>
					</div>
				</div>
				<div class="wrap-col">
					<div class="sub-title">
						<h2><i class="fa fa-facebook" aria-hidden="true"></i>Page</h2>
					</div>
					<div class="item">
						<?php echo do_shortcode( '[custom-facebook-feed]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javaScript">
	$(document).ready(function(){
    	var result = "";
      $.getJSON("http://getthirukural.appspot.com/api/2.0/kural/1?appid=m8gzum7bzuank&format=json&jsoncallback=?", function(data){
        $.each(data.KuralSet.Kural, function(i,Kural){ 
        	result += "<div class='item-content'>";
        	result += "<p>குறள் எண்: <b>"+Kural.Number+"</b></p>";
  				result += "<h3>"+Kural.Line1+"<br/>"+Kural.Line2+"</h3><p><b>English:</b><br/>"+Kural.Translation+"</p>"; 
  				result += "</div>"
				}); 
				$('#thirukural_container').html(result);
    });
	});
</script>