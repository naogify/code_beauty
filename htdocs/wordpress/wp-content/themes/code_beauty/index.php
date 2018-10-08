<?php
get_header(); ?>
    <main class="col-8">
        <!-- [ 記事のループ ] -->
	    <?php if ( have_posts() ) { ?>
		    <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <ul class="navbar-nav">
                        <li class="nav-item"><?php  the_time('Y-n-j'); ?></li>
                        <li class="nav-item"><?php the_category(','); ?></li>
                        <li class="nav-item"><?php the_tags(); ?></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                </article>
		    <?php endwhile; ?>
	    <?php } ?>
        <article>
            <button type="button" class="btn btn-outline-secondary">Older Posts</button>
        </article>
    </main>
<?php
get_footer();