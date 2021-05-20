<?php get_header(); ?>
<div class="container">
    <h1 class="mb-5">La culture, chez vous !</h1>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <article class="post">
                        <h5><?php the_title(); ?></h5>
                        <?php the_post_thumbnail(); ?>"
                        <p class="post__meta">
                            Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                            par <?php the_author(); ?> • <?php comments_number(); ?>
                        </p>

                        <?php the_excerpt(); ?>

                        <p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
                        </p>
                </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>