<?php

add_action( 'after_setup_theme', 'code_beauty_setup' );
function code_beauty_setup() {
	add_theme_support( 'title-tag' );
	register_nav_menus( array( 'Header Navigation' => 'Header Navigation', ) );
}

add_action( 'wp_enqueue_scripts', 'code_beauty_scripts' );
function code_beauty_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), 1.0 );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap', 'normalize'),1.0 );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

function pagination( $pages = 1, $range = 2, $show_only = false ) {

	$pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;

	//表示テキスト
	$text_first   = "« 最初へ";
	$text_before  = "‹ 前へ";
	$text_next    = "次へ ›";
	$text_last    = "最後へ »";

	if ( $show_only && $pages === 1 ) {
		// １ページのみで表示設定が true の時
		echo '<div class="pagination"><span class="current">1</span></div>';
		return;
	}

	if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

	if ( 1 !== $pages ) {
		//２ページ以上の時
		echo '<div class="pagination"><span>Page ', $paged ,' of ', $pages ,'</span>';
		if ( $paged > $range + 1 ) {
			// 「最初へ」 の表示
			echo '<a href="', get_pagenum_link(1) ,'">', $text_first ,'</a>';
		}
		if ( $paged > 1 ) {
			// 「前へ」 の表示
			echo '<a href="', get_pagenum_link( $paged - 1 ) ,'">', $text_before ,'</a>';
		}
		for ( $i = 1; $i <= $pages; $i++ ) {

			if ( $i <= $paged + $range && $i >= $paged - $range ) {
				// $paged +- $range 以内であればページ番号を出力
				if ( $paged === $i ) {
					echo '<span class="current">', $i ,'</span>';
				} else {
					echo '<a href="', get_pagenum_link( $i ) ,'" class="inactive">', $i ,'</a>';
				}
			}

		}
		if ( $paged < $pages ) {
			// 「次へ」 の表示
			echo '<a href="', get_pagenum_link( $paged + 1 ) ,'">', $text_next ,'</a>';
		}
		if ( $paged + $range < $pages ) {
			// 「最後へ」 の表示
			echo '<a href="', get_pagenum_link( $pages ) ,'">', $text_last ,'</a>';
		}
		echo '</div>', "\n";
	}
}