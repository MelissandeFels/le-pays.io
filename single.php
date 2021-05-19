<?php
/*
* Template for displaying a post when you click on button link
*/
?>
<?php get_header(); ?>
<div class="container">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <article class="post p-3">
    <div class="d-flex">
      <div class="mb-5"><?php the_post_thumbnail('art'); ?></div>
      <div class="d-flex flex-column">
        <h1 class="m-3" style="font-family:'Source Serif Pro', serif; font-weight:bold;"><?php the_title(); ?></h1>

        <div class="post__meta d-flex m-3">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
          <p class="p-3">
            Publié le <?php the_date(); ?>
            par <?php the_author(); ?>
            <?php the_category(); ?> <br>
            <?php the_tags(); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="post__content" style="font-family:'Source Serif Pro', serif;font-size:23px">
      <?php the_content(); ?>
    </div>
  </article>

  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>