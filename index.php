<?php
/**
 * @package WordPress
 * @subpackage brave
 */
?>
<?php get_header(); ?>

<div class="content">

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'clean' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'clean' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>

<?php
// Start the Loop.
<? while (have_posts()) : the_post(); ?>
				
<article <?php post_class() ?> id="post<?php the_ID(); ?>" >
	<header>
		<time pubdate datetime="<?php the_time('c') ?>">
			<span class="month"><?php the_time('F') ?></span>,
			<span class="day"><?php the_time('d') ?></span>
			<span class="year"><?php the_time('Y') ?></span>
		</time>
		<h1 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	</header>

	<?php the_content('continue reading...'); ?>
	
	<footer>
	</footer>
						
	<section class="postcomments">
		<?php comments_template(); ?>
	</section>	
</article>

<?php endwhile; ?>
			
<nav class="postsnavigation">
	<?php posts_nav_link(); ?>
</nav>

</div> <!--end of content-->

<?php get_sidebar(); ?>		
		
<?php get_footer(); ?>