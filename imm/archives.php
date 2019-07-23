<?php get_header(); ?>

	<div class="container">

		<!-- this code chunk will detect what type of archive you want, and show the right header -->
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Archive for the ‘<?php single_cat_title(); ?>’ Category:</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Posts Tagged ‘<?php single_tag_title(); ?>’</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive for <?php the_time('Y'); ?>:</h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && 
		!empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
		<?php } ?>

		<!-- let's put each result as a li, so we'll start the ul here, before the loop -->
		<ul>

		// run the loop
	    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		    // build the template for each result listing
		    <li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></li>

		// end the loop, execute else statement if no posts match criteria
	    <?php endwhile; else: ?>
	    	<?php _e('Sorry, no posts matched your criteria.'); ?>
	    <?php endif; ?> 
	
		<!-- we're done the list of results, so let's close the ul here, after the loop -->
		</ul>

	</div>

<?php get_footer(); ?>