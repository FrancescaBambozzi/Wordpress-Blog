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
				 <div class="entry-meta"> <!--to add the date the post-->
	             <time class="entry-time"><?php echo get_the_date(); ?></time>
         </div>
		    	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  </header>

		<div class="entry-summary">
			<?php if ( has_post_thumbnail() ) : ?> <!--call to display featured image-->
           <figure><?php the_post_thumbnail('full'); ?></figure>
       <?php endif; ?>
			  <?php the_content(); ?>
		</div>

		<footer class="entry-footer">
			 <div class="entry-meta">
				<span class="entry-terms comments author">
					Written by <?php the_author(); //put the name of the author of the post ?>
			/
					Posted in <?php the_category(', '); //label the post under a category ?>
			/
					<a href="<?php comments_link(); ?>"><?php comments_number( '<span>No Comments</span>', '1 Comment', '% comments' ); ?></a>
				</span>
			</div>
		</footer>

	</div>
</article>
