<?php
/*
* Template Name: front-page
* Template for displaying the front page of the site
*/
?>
<?php get_header(); ?>

<img class="img-fluid mx-auto d-flex" src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg"
	alt="Banner of page">
<div class="intro text-center mt-5 mb-5 pb-5">
	<h1 style="font-family:'Source Serif Pro', serif; font-weight:500; font-size: 110px;">La Une !</h1>
	<p style="font-family: 'Arial'; font-size: 23px;">
		Le journal Le Pays, vous souhaite la bienvenue sur son site <br> représentant l'actualité sportive et
		culturelle de nos régions
	</p>
	<hr class="style2"> <br>
	<hr class="style3">
	</hr>
</div>
<!-- First container -->
<div class="container pb-3">

	<!-- Last 3 Posts -->
	<?php $args = array(
		'posts_per_page' => 3,
		'order' => 'DESC'
	); ?>

	<?php $rp = new WP_Query( $args ); ?>
	<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
		<?php if($rp->have_posts()) :
    			while($rp->have_posts()) : $rp->the_post(); ?>
		<div class="col">
			<div class="card h-100">
				<article class="post">
					<div class="card-body">
						<h4 class="card-title" style="font-family:'Source Serif Pro', serif; font-weight:bold;">
							<?php the_title(); ?></h4>
						<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail(); ?>
						<p class="card-text post__meta" style="font-family:Arial;">
							Publié le <?php the_time(get_option('date_format')); ?>
							par <?php the_author(); ?> • <?php comments_number(); ?>
						</p>
						<?php	
					} ?>
						<div style="font-family:'Source Serif Pro', serif; font-size: 18px;">
							<?php the_excerpt(); ?>
						</div>
						<p>
							<a href="<?php the_permalink(); ?>" class="btn btn-success post__link">Lire la suite</a>
						</p>
					</div>
				</article>
			</div>
		</div>

		<?php endwhile;
        ?>
		<?php wp_reset_postdata(); // always always remember to reset postdata when using a custom query, very important
			endif; ?>
	</div>
</div>
<!-- Second container -->
<div class="container content pb-3 mt-5 pt-3">
		<h2 class="mb-5 text-center">A ne SURTOUT pas manquer !</h2>

		<!-- Last 3 Events -->
		<?php $args = array(
		'post_type' => 'tribe_events',
		'posts_per_page' => 3,
		'order' => 'DESC'
	); ?>

		<?php $rp = new WP_Query( $args ); ?>
		<div class="card mb-3" style="max-width: 100%;">
			<?php if($rp->have_posts()) :
    			while($rp->have_posts()) : $rp->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="row g-0 m-2" style="border: 0.5px solid #e8e8e4;">
				<div class="col-md-4 p-3">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="col-md-8 mt-3">
					<div class="card-body">
						<h4 class="card-title" style="font-family:'Source Serif Pro', serif; font-weight:bold;">
							<?php the_title(); ?></h4>
						<p class="card-text post__meta" style="font-family:Arial;">
							Publié le <?php the_time(get_option('date_format')); ?>
							<div style="font-family:'Source Serif Pro', serif; font-size: 18px;">
							<?php the_excerpt(); ?>
						</div>
						</p>
						<?php	
					} ?>
						<p>
							<a href="<?php the_permalink(); ?>" class="btn btn-outline-success post__link">Lire la suite</a>
						</p>
					</div>
					</article>
				</div>
			</div>

			<?php endwhile;
        ?>
			<?php wp_reset_postdata(); // always always remember to reset postdata when using a custom query, very important
			endif; ?>
		</div>


	</div>
<?php get_footer(); ?>