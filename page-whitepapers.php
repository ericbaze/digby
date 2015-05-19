<?php get_header(); ?>

<div class="blog">
	<section class="hero">
		<div class="container">
			<h1>Resources</h1>
		</div>
	</section>
	<section class="stripe">
		<div class="container">
			<h2>Whitepapers</h2>
			<?php query_posts('category_name=Whitepaper&showposts=99'); ?>
			<article class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
				<br/>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-default">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				<br/><br/>
				<?php endwhile; ?>
				<?php endif; ?>
			</article>
		</div>
	</div>
</div>

<?php get_footer(); ?>