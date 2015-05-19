<?php
	/*
	Template Name: Search Page
	*/
	get_header();
?>

<div class="container">
	<h1><?php printf( __( 'Search Results for: %s' ), '“' . get_search_query() . '”' ); ?></h1>
	<?php if ( have_posts() ) : ?>
		<ul>
			<?php while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>

<?php get_footer(); ?>