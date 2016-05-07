
					<div class="row item hide">
						<?php
							$my_query = new WP_Query( array( 'post_type' => 'post',  'event-categories' => 'my-category-slug-name' ) );
							while ($my_query->have_posts()) : $my_query->the_post();
							?>
							<div class="item-content">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="info">
									Posted on <?php the_time('m/j/y g:i A') ?>
									<!--<?php the_category(', ') ?>-->
								</div>
								<p class="excerpt"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">Read More..</a>
							</div>
						<?php endwhile; ?>
					</div>
<section class="row hide">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
	?>
</section>

<section class="content-box detail-content hide"><!--Start Box-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="sub-title">
						<h2>FEATURED NEWS</h2>
					</div>
					<div class="item">
						<img src="<?php echo get_static_path_for("images/AB0A9709-10.jpg"); ?>" />
						<div class="item-content">
							<a href="single.html"><h3>Texas Rangers Finish In Second Place</h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
							<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes, Power boot, Soft closing doors, Alcantara roof lining, Double glazing, Keyless entry, Keyless start, Carbon fibre dash and door inserts, IPod connection. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="sub-title">
						<h2>UPCOMING EVENTS</h2>
					</div>
					<div class="row">
						<div class="item">
							<div class="item-content">
								<a href="single.html"><h3>The Most Epic Match Of The Season</h3></a>
								<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
								<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="item">
							<div class="item-content">
								<a href="single.html"><h3>Pre Season Camp Success</h3></a>
								<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
								<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="item">
							<div class="item-content">
								<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
								<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
								<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="sub-title">
						<h2>UPCOMING GAME</h2>
					</div>
					<h2 style="font-size: 35px;line-height: 1.3;margin-bottom: 10px;">AMERICAN EAGLES VS. THE WASHINGTON REDSKINS</h2>
					<img src="<?php echo get_static_path_for("images/AB0A9709-10.jpg"); ?>" />
					<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the ultimate vision, the</p>
					<a href="#">view all events at this venue</a><br>
					<a href="#" class="button bt1">BUY TICKET</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content-box team-box hide"><!--Start Box-->
	<div class="container">
		<div class="title">
			<h2><span>Our</span> Team</h2>
		</div>	
		<div class="row">
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="item t-center">
						<div class="item-container">
							<a href="single.html">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
										</div>
									</div>
								</div>
								<img src="<?php echo get_static_path_for("images/AB0A9709-10.jpg"); ?>" />
							</a>
						</div>
						<div class="item-content">
							<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
							<p>Defender</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="item t-center">
						<div class="item-container">
							<a href="single.html">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
										</div>
									</div>
								</div>
								<img src="<?php echo get_static_path_for("images/AB0A9709-10.jpg"); ?>" />
							</a>
						</div>
						<div class="item-content">
							<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
							<p>Midfielder</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wrap-col">
					<div class="item t-center">
						<div class="item-container">
							<a href="single.html">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
										</div>
									</div>
								</div>
								<img src="<?php echo get_static_path_for("images/AB0A9709-10.jpg"); ?>" />
							</a>
						</div>
						<div class="item-content">
							<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
							<p>Goalkeeper</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="content-box detail-content"><!--Start Box-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrap-col">
					<div class="sub-title">
						<h2>UPCOMING EVENTS</h2>
					</div>
					<div class="row item">
						<div class="col-sm-4 item-date-box">
							<div class="item-caption-inner">
								<div class="item-caption-inner1">
									<h3>30</h3>
									<span>DEC,2015</span>
								</div>
							</div>
						</div>
						<div class="col-sm-8 item-content">
							<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
							<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
						</div>
					</div>
					<div class="row item">
						<div class="col-sm-4 item-date-box">
							<div class="item-caption-inner">
								<div class="item-caption-inner1">
									<h3>30</h3>
									<span>DEC,2015</span>
								</div>
							</div>
						</div>
						<div class="col-sm-8 item-content">
							<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
							<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
						</div>
					</div>
					<div class="row item">
						<?php
							$my_query = new WP_Query( array( 'post_type' => 'post',  'event-categories' => 'my-category-slug-name' ) );
							while ($my_query->have_posts()) : $my_query->the_post();
							?>
							<div>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>