<?php get_header(); ?>
<div class="news">
	<section class="hero">
		<div class="container">
			<h1>Digby News</h1>
		</div>
	</section>
	<section class="stripe">
		<div class="container">
		  <div class="row">
			<div class="col-md-6">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php $nextlink = get_post_meta($post->ID, 'nextlink', true); ?>
				<?php $nexttext = get_post_meta($post->ID, 'nexttext', true); ?>
				<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>
				<?php $upload_dir = wp_upload_dir(); ?>
				<h2>Press Releases</h2>
				<br/>
						<?php query_posts('category_name=Press Release&showposts=4'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php //get article_image (custom field) ?>
						<?php $logo = get_post_meta($post->ID, 'thumbnail', true); 
							$company = get_post_meta($post->ID, 'company', true); ?>
						<strong><?php the_date('M d, Y'); ?></strong>
													<!--<?php if (empty($logo)) {
						?>
				      <a href="<?php the_permalink(); ?>"><img src="<?php echo $upload_dir['baseurl']; ?>/press_logo_digby.png" alt="Press Release from Digby" title="Press Release from Digby" /></a>
				      <?php } else { ?>
				      <a href="<?php the_permalink(); ?>"><img src="<?php echo $upload_dir['baseurl']; ?>/press_logo_<?php echo $logo; ?>.png" alt="Press Release from <?php echo $author; ?>" title="Press Release about <?php echo $company; ?>" /></a>
				      <?php } ?>
				    <?php $logo = ""; $author = ""; ?>-->
							<p class="lead"><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a></p>
					      
				    	<?php endwhile;?>   
						<?php wp_reset_query(); ?>
						<br/>
				 <!--<a href="<?php bloginfo( 'url' ); ?>/?page_id=3528" class="btn btn-default">Press Release Archive <span class="glyphicon glyphicon-chevron-right"></span></a>-->
				 <br/><br/>
			</div>
			<div class="col-md-6">
				<h2>Digby In The News</h2>
				<br/>
				    <?php query_posts('category_name=News&showposts=6'); ?>
				    <?php while (have_posts()) : the_post(); ?>
				    <?php //get article_image (custom field) ?>
				    <?php $logo = get_post_meta($post->ID, 'thumbnail', true); ?>
				    <?php $source = get_post_meta($post->ID, 'author', true); ?>
					<!--      <?php if (empty($logo)) {
?>
      <img src="<?php echo $upload_dir['baseurl']; ?>/press_logo_newsdefault.png" alt="" title="" />
      <?php } else { ?>
      <img src="<?php echo $upload_dir['baseurl']; ?>/press_logo_<?php echo $logo; ?>.png" alt="<?php echo $source; ?>" title="<?php echo $source; ?>" />
      <?php } ?>
    <?php $logo = ""; $author = ""; ?>-->
					<strong><?php the_date('M d, Y'); ?></strong>
					<p class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php endwhile;?>
  <?php wp_reset_query(); ?>
  <!--<a href="<?php bloginfo( 'url' ); ?>/?page_id=3530"  class="btn btn-default">News Archive <span class="glyphicon glyphicon-chevron-right"></span></a></p>
  <a href="<?php echo $nextlink; ?>"><?php echo $nexttext; ?> </a>-->
</div>
		</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>

