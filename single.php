<?php get_header(); 
    while(have_posts()) {
        the_post();
?>
<!-- Running the single blog post page -->
	<section id="banner" class="banner--xs banner--xs-blogpage" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID());?>); background-color: rgba(248, 223, 155, 0.3); background-blend-mode: lighten;">
		<h1 class="banner--heading banner--heading-emphasis">
			<?php the_title();?>
		</h1>
		<p class="banner--tagline">
        By <?php the_author();?> on <?php the_time('F j, Y'); ?> in <a href="#"><?php echo get_the_category_list(', ');?></a>
		</p>
	</section>
	<main>
		<section class="section post">
			<p class="p post--text">
				<?php the_content();?>
			</p>
		</section>
		<section class="section--comments">
            <section class="comments--form">
            <?php 
                $fields = array(
                    'author' => '<input class="comments--form-input" placeholder="Your name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author']) . '" size="30"' . $aria_req . '/></p>',
                    'email' => '<input class="comments--form-input" placeholder="Your email address" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email']) . '" size="30"' . $aria_req . '/></p>',
                );

                $args = array(
                    'title_reply' => 'Share your thoughts',
                    'fields' => $fields,
                    'comment_field' => '<textarea class="comments--form-textarea" placeholder="Your comments" id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea>',
                    'comment_notes_before' => '<p class="p--subtext comments--form-text">Your email address will not be displayed. All fields are required.</p>'
                );
            
                comment_form($args);
                $comments_number = get_comments_number();
                ?>
                </section>
                <?php
                if($comments_number != 0) { ?>
                    <section class="comments">
                        <h3 class="h3 comments--heading">What others are saying</h3>
                        <ol class="comments--list">
                            <?php 
                                $comments = get_comments(array(
                                    'post_id' => $post_ID,
                                    'status' => 'approve'
                                ));
                                wp_list_comments(array(
                                    'per_page' => 10
                                ), $comments);
                            ?>
                        </ol>
                    </section>

                <?php } ?>
		</section>
<?php } ?>
	</main>

<?php get_footer(); ?>