<?php
/**
* The default template for displaying content
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Skillcrush_Starter
* @since Skillcrush Starter 2.0
*/
?>

<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<time class="entry-time"><?php echo get_the_date(); ?></time>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-summary">
			<?php the_content(); ?>
		</div>
		<footer class="entry-footer">
			<span class="entry-terms">
				Written by <?php the_author(); ?> / 
				Posted in <?php the_category(', '); ?> /
				<a href="<?php comments_link(); ?>"><?php comments_number( '<span>No Comments</span>', '1 Comment', '% comments' ); ?></a>
			</span>
		</footer>
	</div>
</article>
