<?php
get_header(); ?>
    <main class="col-8">
        <!-- [ 記事のループ ] -->
	    <?php query_posts('posts_per_page=2'); ?>
        <?php if ( have_posts() ) : ?>
		    <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <ul class="navbar-nav">
                        <li class="nav-item"><?php  the_time('Y-n-j'); ?></li>
                        <li class="nav-item"><i class="fas fa-folder"></i><?php the_category( ',' ); ?></li>
                        <li class="nav-item"><i class="fas fa-tag"></i><?php the_tags( '' ); ?></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                </article>
		    <?php endwhile; ?>
	    <?php else: ?>
            <h2>__( 'There is No post.', 'code_beauty' )</h2>
	    <?php endif; ?>
        <article>
	        <?php next_posts_link(); ?>
	        <?php previous_posts_link(); ?>

            <!--            <button type="button" class="btn btn-outline-secondary">-->
<!--	        --><?php //the_posts_pagination(
//		        array(
//			        'prev_text' => __( 'Older Posts', 'code_beauty' ),
//			        'next_text' => __( 'Prev Posts', 'code_beauty' ),
//		        )
//	        ); ?>
            <!--            </button>-->
        </article>
    </main>
<?php
get_footer();