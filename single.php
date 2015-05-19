<?php get_header(); ?>
<div class="blog">
	<section class="hero">
		<div class="container">
			<h1>Resources</h1>
		</div>
	</section>
	<section class="stripe">
		<div class="container">
			<h2><?php
$category = get_the_category();
if ($category[0]->cat_name == "Article") { echo "Digby in the News"; } else { echo $category[0]->cat_name; } ?></h2>
			<h3><?php the_title(); ?></h3>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<?php $link = get_post_custom_values('link') ?>
			<?php if ( $link ) { ?>
				<hr />
				<?php foreach ( $link as $key => $value ) { ?>
					<a href="<?php echo $value; ?>" target="_blank" title="<?php the_title(); ?>"><span class="glyphicon glyphicon-link"></span> <?php the_title(); ?></a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
