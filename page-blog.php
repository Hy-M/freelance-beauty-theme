<?php get_header(); ?>
		<section id="banner" class="banner--sm">
			<h1 class="banner--heading banner--heading-emphasis banner--sm-heading">
				Welcome to my blog
			</h1>
			<p class="banner--tagline">
				Beauty and business related content
			</p>
		</section>
		<main class="main--bloglist">
			<section class="section posts">
				<section class="section cards">
				<?php 
					$current_page = get_query_var('paged') ? get_query_var('paged'):1;
                    $args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'paged' => $current_page
                    );

					$blogposts = new WP_Query($args);
                    
                    while($blogposts->have_posts()) {
                        $blogposts->the_post();

                ?>
					<div class="cards--card">
						<div class="cards--card-image">
							<a href="<?php the_permalink();?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="" />
							</a>
						</div>
						<div class="cards--card-description">
							<a href="<?php the_permalink();?>">
								<h4 class="h4">
									<?php the_title();?>
								</h4>
							</a>
							<p class="p--subtext">By <?php the_author();?> on <?php the_time('F j, Y'); ?> in <a href="#"><?php echo get_the_category_list(', ');?></a></p>
							<p>
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
							</p>
							<a class="btn--secondary cards--card-btn" href="<?php the_permalink(); ?>">Read more</a>
						</div>
                    </div>
                    
					<?php } wp_reset_query();?>
				</section>
			</section>
			<section class="section--pagination">
					<?php 
						echo paginate_links( 
							array(
								"current" => $current_page,
								"total" => $blogposts->max_num_pages
							) 
						);
					?>
			</section>
		</main>

<?php get_footer(); ?>