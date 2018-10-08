<?php ?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1,">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand row justify-content-start" href="#">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p><?php bloginfo( 'description' ); ?></p>
        </a>
        <div class="collapse navbar-collapse row justify-content-end" id="navbarSupportedContent">
	        <?php
	        $args = array(
		        'theme_location' => 'Header Navigation',
		        'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav wck_nav">%3$s</ul>',
	        );
	        wp_nav_menu( $args ) ;
	        ?>


<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">About</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">WordPress</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">PHP</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Other</a>-->
<!--                </li>-->
<!--            </ul>-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>
</header>
<div class="container row">