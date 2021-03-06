<!DOCTYPE html>
<html lang="fr">

<head>
    <title>JOURNAL Le Pays</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
            <button class="btn btn-success me-md-2" type="button" style="font-family:'Source Serif Pro';font-size:18px;">
                <a href="<?php echo include( get_template_directory_uri() . '/connect.php' ); ?>" style="color:white;">
                    Se connecter
                </a>
            </button>
        </div>
        <div class="col-12 mt-5">
            <a href="<?php echo home_url( '/' ); ?>">
                <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                    alt="Logo Le Pays" style="width:20rem;">
            </a>
        </div>
        <hr class="style1">
        </hr>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">
                        <?php wp_nav_menu( array('theme_location' => 'main' )); ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <?php if ( is_active_sidebar( 'in-header-widget-area' ) ) { ?>

    <aside class="in-header widget-area right" role="complementary">
        <?php dynamic_sidebar( 'in-header-widget-area' ); ?>
    </aside>

    <?php }