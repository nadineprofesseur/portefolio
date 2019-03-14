<!DOCTYPE HTML>
<html>

<head>
	<title>Blog Full Width</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<!--styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<!--styles -->
</head>
<body class="blog with-sidebar pc">
	<!-- page header -->
	<header id="home">
		<div class="stick-wrapper">
			<div class="sticky clear">
				<div class="grid-row">
					<img class="splash" src="img/splash.png" alt="">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
					<nav class="nav">
						<a href="#" class="switcher">
							<i class="fa fa-bars"></i>
						</a>
						<ul class="clear">
							<li><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About</a></li>
							<li><a href="team.html">Team</a></li>
							<li>
								<a href="portfolio-four-columns.html">Portfolio</a>
								<ul>
									<li><a href="portfolio-four-columns.html"><span>Four Columns</span></a></li>
									<li><a href="portfolio-tree-columns.html"><span>Three Columns</span></a></li>
									<li><a href="portfolio-two-columns.html"><span>Two Columns</span></a></li>
									<li><a href="portfolio-single-item.html"><span>Single Item</span></a></li>
								</ul>
							</li>
							<li>
								<a href="blog-with-sidebar.html">Blog</a>
								<ul>
									<li><a href="blog-with-sidebar.html"><span>Blog With Sidebar</span></a></li>
									<li><a href="blog-fullwidth.html"><span>Blog Full Width</span></a></li>
									<li><a href="blog-single-post.html"><span>Single Post</span></a></li>
								</ul>
							</li>
							<li><a href="shortcodes.html">Shortcodes</a></li>
							<li class="left">
								<a href="shop-product-list.html">Shop</a>
								<ul>
									<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
									<li><a href="shop-product-list.html"><span>Shop Product List</span></a></li>
									<li><a href="shop-single-product.html"><span>Shop Single Product</span></a></li>
								</ul>
							</li>
							<li class="last"><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--/ page header  -->
	<div class="top-bg">
		
    	<img src="img/splash-top.png" class="splash-top" alt>
		<div class="page-title zoomIn animated">blog</div>
	</div>

	<!-- page content -->
	<div class="page-content">
		<div class="grid-row clear">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
					<div id="content" role="main">
						<div class="title">
							<span class="main-title">PORTEFOLIO</span>
							<span class="slash-icon">/<i class="fa fa-angle-double-right"></i></span><h5>VOIR MES REALISATIONS</h5>
						</div>							
<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				
				the_post();
				
			
				
			//the_excerpt();
			

?>
						<div class="item clear">
							<div class="date"><?php the_date();?></div>
							<div class="item-header">
								<h3><?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?></h3>
							</div>
							<div class="content">
								<p><?php the_content(); ?></p>
							</div>
							<div class="post-info clear">
								<span><i class="fa fa-calendar"></i> <?php the_date();?></span>
								<span><i class="fa fa-edit"></i> Admin</span>
								<span><i class="fa fa-comment"></i> 2 Coments</span>
								<span><i class="fa fa-bookmark"></i> Audio</span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
						</div>

<?php
				endwhile;
			// Previous/next post navigation.

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
			?>							
						<!-- blog item video -->
						<div class="item clear">
							<div class="media-block">
								<div class="video-player">
									<iframe src="https://www.youtube.com/embed/tQ-WuUHNIz8"></iframe>
								</div>
							</div>
							<div class="date">22 march</div>
							<div class="item-header">
								<h3>Sed gravida neque mi, sed rutrum nibh ullamcorper quis.</h3>
							</div>
							<div class="content">
								<p>Maecenas ac velit condimentum, condimentum ante at, sodales justo. Vivamus suscipit nunc ut condimentum feugiat. Praesent imperdiet sollicitudin pulvinar. Pellentesque interdum sem a ligula scelerisque bibendum. Donec aliquam mattis neque quis pretium. Pellentesque felis leo, consequat nec aliquet vitae, tempor nec nisi. Curabitur ultrices leo non ligula venenatis, a viverra urna pulvinar. Morbi auctor semper tellus sit amet gravida. Curabitur accumsan convallis aliquet. Proin hendrerit eros quis ultricies feugiat. 
	Vestibulum scelerisque enim rutrum nisi blandit, eget commodo nunc ultrices. Vivamus  </p>
							</div>
							<div class="post-info clear">
								<span><i class="fa fa-calendar"></i> March 22, 2016</span>
								<span><i class="fa fa-edit"></i> Admin</span>
								<span><i class="fa fa-comment"></i> 2 Coments</span>
								<span><i class="fa fa-bookmark"></i> Audio</span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
						</div>
						<!-- blog item video -->
						<!-- blog item blockquote -->
						<div class="item clear">
							<div class="date">22 march</div>
							<div class="content">
								<div class="quote clear">
									<blockquote><h3>Vestibulum a libero eu eros pulvinar congue dictum in nunc.</h3><p>Praesent imperdiet sollicitudin pulvinar. Pellentesque interdum sem a ligula scelerisque bibendum. Donec aliquam mattis neque quis pretium. Pellentesque felis leo, consequat nec aliquet vitae, tempor nec nisi. Curabitur ultrices leo non ligula venenatis, a viverra urna pulvinar. Morbi auctor semper tellus sit amet gravida. Curabitur accumsan convallis aliquet. Vivamus placerat ultricies neque. Fusce eleifend ante quam, vitae porta dui scelerisque at. Cras ac risus ac magna iaculis scelerisque eget id purus. Aenean tortor sem, ultrices egestas porta blandit, suscipit vel eros. Phasellus pulvinar dolor</p><div class="quote-author">Scott Sancherzh</div></blockquote>
									<!-- <span class="author">Scott Sancherzh</span> -->
								</div>
							</div>
							<div class="post-info clear">
								<span><i class="fa fa-calendar"></i> March 22, 2016</span>
								<span><i class="fa fa-edit"></i> Admin</span>
								<span><i class="fa fa-comment"></i> 2 Coments</span>
								<span><i class="fa fa-bookmark"></i> Audio</span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
						</div>
						<!-- blog item blockquote -->
						<!-- blog item list -->
						<div class="item clear">
							<div class="date">22 march</div>
							<div class="item-header">
								<h3>Sed gravida neque mi, sed rutrum nibh ullamcorper quis.</h3>
							</div>
							<div class="content">
								<p>Maecenas ac velit condimentum, condimentum ante at, sodales justo. Vivamus suscipit nunc ut condimentum feugiat. Praesent imperdiet sollicitudin pulvinar. Pellentesque interdum sem a ligula scelerisque bibendum. Donec aliquam mattis neque quis pretium. Pellentesque felis leo, consequat nec aliquet vitae, tempor nec nisi. Curabitur ultrices leo non ligula venenatis, a viverra urna pulvinar. Morbi auctor semper tellus sit amet gravida. Curabitur accumsan convallis aliquet. Proin hendrerit eros quis ultricies feugiat. 
	Vestibulum scelerisque enim rutrum nisi blandit, eget commodo nunc ultrices. Vivamus  </p>
							</div>
							<div class="columns-row clear">
								<div class="columns-col columns-col-6">
									<ul class="list-type list-type-splash">
										<li><i></i>Suspendisse vel quam leo nam leo orci, tincidunt</li>
										<li><i></i>Vestibulum ac mi eleifend, rhoncus lectus ut</li>
										<li><i></i>Nullam ut massa vehicula volutpat enim et vehicula</li>
									</ul>
								</div>
								<div class="columns-col columns-col-6">
									<ul class="list-type list-type-splash">
										<li><i></i>Suspendisse vel quam leo nam leo orci, tincidunt</li>
										<li><i></i>Vestibulum ac mi eleifend, rhoncus lectus ut</li>
										<li><i></i>Nullam ut massa vehicula volutpat enim et vehicula</li>
									</ul>
								</div>
							</div>
							<div class="post-info clear">
								<span><i class="fa fa-calendar"></i> March 22, 2016</span>
								<span><i class="fa fa-edit"></i> Admin</span>
								<span><i class="fa fa-comment"></i> 2 Coments</span>
								<span><i class="fa fa-bookmark"></i> Audio</span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
						</div>
						<!-- blog item list -->
						<!-- blog item music -->
						<div class="item clear">
							<div class="media-block splash">
								<div class="picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="#" class="cws-slide-left fancy fa fa-headphones"></a>
										<a href="images/blog-withsidebar-1.jpg" class="fancy fa fa-search"></a>
										<a href="#" class="cws-slide-right fa fa-heart"></a>
									</div>
									<div class="music">
										<img src="images/blog-withsidebar-1.jpg" alt>
										<audio controls>
											<source src="audio/audio.mp3">
										</audio>
									</div>
								</div>	
							</div>
							<div class="date">22 march</div>
							<div class="item-header">
								<h3>Sed gravida neque mi, sed rutrum nibh ullamcorper quis.</h3>
							</div>
							<div class="content">
								<p>Maecenas ac velit condimentum, condimentum ante at, sodales justo. Vivamus suscipit nunc ut condimentum feugiat. Praesent imperdiet sollicitudin pulvinar. Pellentesque interdum sem a ligula scelerisque bibendum. Donec aliquam mattis neque quis pretium. Pellentesque felis leo, consequat nec aliquet vitae, tempor nec nisi. Curabitur ultrices leo non ligula venenatis, a viverra urna pulvinar. Morbi auctor semper tellus sit amet gravida. Curabitur accumsan convallis aliquet. Proin hendrerit eros quis ultricies feugiat. 
	Vestibulum scelerisque enim rutrum nisi blandit, eget commodo nunc ultrices. Vivamus  </p>
							</div>
							<div class="post-info clear">
								<span><i class="fa fa-calendar"></i> March 22, 2016</span>
								<span><i class="fa fa-edit"></i> Admin</span>
								<span><i class="fa fa-comment"></i> 2 Coments</span>
								<span><i class="fa fa-bookmark"></i> Audio</span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<aside class="grid-col grid-col-3 sidebar">
				<!-- widget search -->
				<div id="search" class="widget widget_search">
					<form method="get" class="search-form" action="http://wp.com/">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:"></label>
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>
				<!-- widget search -->
				<!-- follow widget -->
				<div id="text-3" class="widget widget_text">
					<div class="widget-title">Follow & subscribe</div>
					<div class="textwidget">
						<div class="follow-icon">
							<a href="#"><div class="contact-round blue-follow-icon"><i class="fa fa-twitter"></i></div></a>
							<a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/"><div class="contact-round hot-follow-icon"><i class="fa fa-rss" title="RSS"></i></div></a>
							<a href="#"><div class="contact-round blue-follow-icon"><i class="fa fa-skype"></i></div></a>
							<a href="#"><div class="contact-round red-follow-icon"><i class="fa fa-youtube"></i></div></a>
							<a href="#"><div class="contact-round blue-follow-icon"><i class="fa fa-facebook"></i></div></a>
						</div>
					</div>
				</div>
				<!-- follow widget -->
				<hr class="divider-green">
				<!-- categories widget -->
				<div id="categories" class="widget widget_categories">
					<div class="widget-title">Categories</div>
					<ul>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Another Category</a> (1) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Blogroll</a> (7) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Community</a> (1) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Daily</a> (2) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Graphics</a> (2) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Journal</a> (1) </li>
						<li class="cat-item cat-item-1 current-cat"><a href="#">Photography</a> (1) </li>
					</ul>
				</div>
				<!-- categories widget -->
				<hr class="divider-green">
				<!-- recent comments widget -->
				<div class="widget widget-recent-comments clear">
					<div class="widget-title">Our Comments</div>
					<div class="carousel-nav">
						<div class="carousel-button">
							<div class="prev"><i class="fa fa-chevron-left"></i></div>
							<div class="next"><i class="fa fa-chevron-right"></i></div>
						</div>
					</div>
					<div id="recent-comments" class="owl-carousel owl-widget">
							<ul>
								<li><p>21.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>19.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>16.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
							</ul>
						
							<ul>
								<li><p>09.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>02.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>29.12.2015</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
							</ul>
						
							<ul>
								<li><p>20.12.2015</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>15.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
								<li><p>11.01.2016</p><p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p></li>
							</ul>
						
					</div>
				</div>
				<!-- recent comments widget -->
				<hr class="divider-green">
				<!-- text widget -->
				<div id="text" class="widget widget_text">
					<div class="widget-title">Text Widget</div>
					<div class="textwidget">
						<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor. Praesent dapibus aliquam erat, nec faucibus quam posuere eget. Vestibulum a accumsan.<br/><br/>
Vestibulum a libero eu eros pulvinar congue dictum in nunc. Duis eget velit quis elit volutpat consequat a sed sem. Mauris sollicitudin lacinia eros et.</p>
					</div>
				</div>
				<!-- text widget -->
				<hr class="divider-green">
				<!-- recent post widget -->
				<div class="widget widget-recent-posts">
					<div class="widget-title">Recent Posts</div>
					<div class="carousel-nav">
						<div class="carousel-button">
							<div class="prev"><i class="fa fa-chevron-left"></i></div>
							<div class="next"><i class="fa fa-chevron-right"></i></div>
						</div>
					</div>
					<div id="recent-posts-carousel" class="owl-carousel owl-widget">
						<div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-1.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>29.12.2015</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-2.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>21.01.2016</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-3.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>12.01.2016</p>
							</div>
						</div>
						<div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-4.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>01.01.2016</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-5.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>11.11.2015</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-6.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>01.11.2015</p>
							</div>
						</div>
						<div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-7.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>31.10.2015</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-8.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>12.10.2015</p>
							</div>
							<div class="recent-post-item clear">
								<div class="recent-post-icon">
									<div class="border-img">
										<a href="blog-single-post.html"><div class="window-tabs">
											<div class="overflow-block"></div><img src="images/recent-posts/recent-post-9.jpg" alt></div>
										</a>
									</div>
								</div>
								<p>Maecenas sit amet tortor ipsum. Sed ut semper dolor.</p>
								<p>08.10.2015</p>
							</div>
						</div>
					</div>
				</div>
				<!-- recent post widget -->
				<hr class="divider-green">
				<!-- archives widget -->
				<div id="archives" class="widget widget_archive">
					<div class="widget-title">Archives</div>
					<ul>
						<li><a href="http://wp.com/?m=201612">July</a></li>
						<li><a href="http://wp.com/?m=201612">August</a></li>
						<li><a href="http://wp.com/?m=201612">September</a></li>
						<li><a href="http://wp.com/?m=201612">October</a></li>
						<li><a href="http://wp.com/?m=201612">November</a></li>
						<li><a href="http://wp.com/?m=201612">December</a></li>
					</ul>
				</div>
				<!-- archives widget -->
				<hr class="divider-green">
				<!-- widget calendar -->
				<div class="widget widget-calendar">
					<div class="widget-title">Calendar</div>
					<div id="calendar"></div>
				</div>
				<!--/ widget calendar -->
				<hr class="divider-green">
				<!-- meta widget -->
				<div id="meta" class="widget widget_meta">
					<div class="widget-title">Meta</div>
					<ul>
						<li><a href="#">Log out</a></li>
						<li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
					</ul>
				</div>
				<!-- meta widget -->
				<hr class="divider-green">
				<!-- widget twitter -->
				<div class="widget widget-twitter">
					<div class="widget-title">Latest Twitters</div>
					<ul class="latest-tweets latest-tweets-alt"></ul>
				</div>
				<!--/ widget twitter -->
				<hr class="divider-green">
				<!-- tags widget -->
				<div id="tag_cloud-2" class="widget widget_tag_cloud">
					<div class="widget-title">Tags</div>
					<div class="tagcloud">
					<?php wp_tag_cloud( $args ); ?>
						<!--ul>
							<li><a href="#">Daily</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Ilustration</a></li>
							<li><a href="#">Journal</a></li>
							<li><a href="#">Label</a></li>
							<li><a href="#">Photo</a></li>
							<li><a href="#">Professional</a></li>
							<li><a href="#">Show</a></li>
							<li><a href="#">Sound</a></li>
							<li><a href="#">Sounds</a></li>
							<li><a href="#">Tv</a></li>
							<li><a href="#">Video</a></li>
						</ul-->
					</div>
				</div>
				<!-- tags widget -->
				<hr class="divider-green">
				<!-- gallery widget -->
				<div class="widget widget-gallery">
					<div class="widget-title">Mini Gallery</div>
					<div class="carousel-nav">
						<div class="carousel-button">
							<div class="prev"><i class="fa fa-chevron-left"></i></div>
							<div class="next"><i class="fa fa-chevron-right"></i></div>
						</div>
					</div>
					<div id="carousel-gallery-widget" class="owl-carousel owl-widget">
						<div class="item-gallery-image picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="#" class="cws-slide-left fancy fa fa-link"></a>
								<a href="images/portfolio_three/four-columns-5@2x.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-slide-right fa fa-heart"></a>
							</div>
							<img src="images/portfolio_three/four-columns-5.jpg" alt="">
						</div>
						<div class="item-gallery-image picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="#" class="cws-slide-left fancy fa fa-link"></a>
								<a href="images/portfolio_three/four-columns-6@2x.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-slide-right fa fa-heart"></a>
							</div>
							<img src="images/portfolio_three/four-columns-6.jpg" alt="">
						</div>
						<div class="item-gallery-image picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="#" class="cws-slide-left fancy fa fa-link"></a>
								<a href="images/portfolio_three/four-columns-8@2x.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-slide-right fa fa-heart"></a>
							</div>
							<img src="images/portfolio_three/four-columns-8.jpg" alt="">
						</div>
						<div class="item-gallery-image picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="#" class="cws-slide-left fancy fa fa-link"></a>
								<a href="images/portfolio_three/four-columns-9@2x.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-slide-right fa fa-heart"></a>
							</div>
							<img src="images/portfolio_three/four-columns-9.jpg" alt="">
						</div>
						<div class="item-gallery-image picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="#" class="cws-slide-left fancy fa fa-link"></a>
								<a href="images/portfolio_three/four-columns-10@2x.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-slide-right fa fa-heart"></a>
							</div>
							<img src="images/portfolio_three/four-columns-10.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- gallery widget -->
				<hr class="divider-green">
				<!-- flickr widget -->
				<div class="widget widget_flickr">
					<div class="widget-title">Flickr</div>
					<ul id="flickr-badge" class="clear"></ul>
				</div>
				<!-- flickr widget -->
				<hr class="divider-green">
			</aside>
		</div>
	</div>
	<!--/ page content -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="grid-row clear">
			<div class="them-mask"></div>
			<div class="subscribe-header">subscribe</div>
			<form action="#" class="clear">
				<input type="email" placeholder="Your Email Address">
				<button type="submit" class="button-send">Send</button>
			</form>
		</div>
	</div>
	<!--/ subscribe  -->
	<!-- page footer  -->
	<footer id="footer">
		<div class="grid-row clear">
			<div class="footer">
				<div id="copyright">Copyright<span> Splashes</span> 2016-All Rights Reserved</div>
				<a href="index.html" class="footer-logo"><img src="images/logo.png" alt=""></a>
				<div class="social">
					<a href=""><div class="contact-round"><i class="fa fa-twitter"></i></div></a>
					<a href=""><div class="contact-round"><i class="fa fa-facebook"></i></div></a>
					<a href=""><div class="contact-round"><i class="fa fa-skype"></i></div></a>
					<a href=""><div class="contact-round"><i class="fa fa-rss"></i></div></a>
					<a href=""><div class="contact-round"><i class="fa fa-linkedin"></i></div></a>
				</div>
			</div>
		</div>
	</footer>
	<!--/ page footer  -->
	<a href="#" id="scroll-top" class="scroll-top"><i class="fa fa-angle-up"></i></a>
	
	<!-- scripts -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.owl.carousel.js"></script>
	
	<script src="js/main.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/jquery.tweet.js"></script>
	<script src="js/jflickrfeed.min.js"></script>
	<!--/ scripts -->
</body>
</html>