<?php
/**
 * @package WordPress
 * @subpackage clean
 */
?>
<?php get_header(); ?>
		
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
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<? while (have_posts()) : the_post(); ?>
				
<article <?php post_class() ?> id="post<?php the_ID(); ?>" >
	<header>
		<hgroup>
			<h1 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		</hgroup>
		
		<dl class="postmetadata">
			<dt>Published</dt>
			<dd><time pubdate datetime="<?php the_time('c') ?>">
			<span class="month"><?php the_time('F') ?></span>
			<span class="day"><?php the_time('d') ?></span>
			<span class="year"><?php the_time('Y') ?></span>
			</time></dd>			
			
			<dt>Comments</dt>
			<dd><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></dd>

			<dt>Categories</dt>
			<dd>
				<ul class="posttags"><li>
				<?php 
				// categories list
				the_category('</li><li>'); 
				?>
				</li></ul>
			</dd>

			<dt>Tags</dt>
			<dd>
			<?php 
			// tags list
			the_tags('<ul class="posttags"><li>','</li><li>','</li></ul>'); 
			?>	
			</dd>
		</dl>
	</header>

	<?php the_content('continue reading...'); ?>
	
	<footer>
	</footer>
						
	<section class="postcomments">
		<?php comments_template(); ?>
	</section>	
</article>

<?php endwhile; ?>
			
<nav id="postsnavigation">
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</nav>

<?php get_sidebar(); ?>		
		
<?php get_footer(); ?>