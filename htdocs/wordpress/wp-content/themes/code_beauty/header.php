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
            <h1>naoki-is.me</h1>
            <p>WordPress / Web developer’s Blog</p>
        </a>
        <div class="collapse navbar-collapse row justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WordPress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Other</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>
</header>
<div class="container row">