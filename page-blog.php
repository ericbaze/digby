<?php get_header(); ?>
<div class="blog">
	<section class="hero">
		<div class="container">
			<h1>Resources</h1>
		</div>
	</section>
	<section class="stripe">
		<div class="container">
			<h2>The Digby Blog</h2>
			<div class="row">
				<div class="col-md-9">
					<?php query_posts('&showposts=10'); ?>
					<article>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<strong><?php the_date(); ?></strong>
							<p class="lead"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
						<?php endwhile; ?>
						<?php endif; ?>
						<br/><br/>
					</article>
				</div>
				<div class="col-md-3">
					<aside>
	 					<?php dynamic_sidebar( 'blog' ); ?>
	 				</aside>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>