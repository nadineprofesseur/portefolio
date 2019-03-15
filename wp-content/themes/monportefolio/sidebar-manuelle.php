			<aside class="grid-col grid-col-3 sidebar">
				<!-- widget search -->
				<div id="search" class="widget widget_search">
					<form method="get" class="search-form" action="http://wp.com/">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Chercher …" value="" name="s" title="Search for:"></label>
						<input type="submit" class="search-submit" value="Chercher">
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
					<?php 
					
						$categories = get_categories(); //print_r($categories);
						foreach($categories as $categorie)
						{
						?>
						<li class="cat-item cat-item-1 current-cat"><a href="http://localhost/portefolio/<?=$categorie->slug;?>"><?=$categorie->name;?></a> (<?=$categorie->count;?>) </li>							
						<?php
						}
					?>
					</ul>
				</div>
				<!-- categories widget -->
				<hr class="divider-green">

				<!-- archives widget -->
				<div id="archives" class="widget widget_archive">
					<div class="widget-title">Archives</div>
					<ul>
						<?php 
						//get_archives_link( $url, $text, $format = 'html', $before = '', $after = '' )
						// https://developer.wordpress.org/reference/functions/get_archives/
						$args = compact('type', 'limit', 'format', 'before', 'after', 'show_post_count');
						$archives = wp_get_archives($args); //print_r($archives);
						?>
						<!--li><a href="http://wp.com/?m=201612">July</a></li-->
					</ul>
				</div>
				<!-- archives widget -->
				<hr class="divider-green">
				<div id="meta" class="widget widget_meta">
					<div class="widget-title">Meta</div>
					<ul>
						<li><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a target="_blank" href="http://wordpress.org" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
					</ul>
				</div>
				<!-- meta widget -->
				<hr class="divider-green">
				<div id="tag_cloud-2" class="widget widget_tag_cloud">
					<div class="widget-title">Tags</div>
					<div class="tagcloud">
						<ul>
							<li><?php wp_tag_cloud( 'separator=</li><li>' ); ?></li>
						</ul>
					</div>
				</div>
				<!-- flickr widget -->
				<hr class="divider-green">
			</aside>