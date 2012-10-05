<?php get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>
<div id="main">
	<div class="<?= CONTAINER_CLASSES; ?>">
	<? get_template_part('parts/breadcrumb'); // el loado breadcrumbo ?>
		<div class="<?= ROW_CLASSES ?>">
			<? get_template_part('parts/sidebar-left'); // el loado left sidebaro ?>			
			<div class="span<?= MAIN_SIZE ?>">
				<?php if ( have_posts() ): the_post(); ?>
				
				<h2>Author Archives: <?php echo get_the_author() ; ?></h2>
				
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h3>About <?php echo get_the_author() ; ?></h3>
				<?php the_author_meta( 'description' ); ?>
				<?php endif; ?>
				
				<ol>
				<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
					<li>
						<article>
							<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<time datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
							<?php the_content(); ?>
						</article>
					</li>
				<?php endwhile; ?>
				</ol>
				
				<?php else: ?>
				<h2>No posts to display for <?php echo get_the_author() ; ?></h2>	
				<?php endif; ?>
			</div><!-- /MAIN_SIZE -->
			<? get_template_part('parts/sidebar-right'); // el loado right sidebaro ?>
		</div><!-- /ROW_CLASSES -->	
	</div><!-- /CONTAINER_CLASSES -->
</div><!-- /main -->	
<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>