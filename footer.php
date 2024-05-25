<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( SWELL_Theme::is_show_sidebar() ) {
	get_sidebar();
}
?>
</div>
<?php
	$SETTING = SWELL_Theme::get_setting();

	if ( SWELL_Theme::is_use( 'pjax' ) ) echo '</div>'; // End : Barba[data-barba="container"]

	// フッター前ウィジェット
	if ( is_active_sidebar( 'before_footer' ) ) :
		echo '<div id="before_footer_widget" class="w-beforeFooter">';
		if ( ! SWELL_Theme::is_use( 'ajax_footer' ) ) :
			SWELL_Theme::get_parts( 'parts/footer/before_footer' );
		endif;
		echo '</div>';
	endif;

	// ぱんくず
	if ( 'top' !== $SETTING['pos_breadcrumb'] ) :
		SWELL_Theme::get_parts( 'parts/breadcrumb' );
	endif;
?>
<footer id="footer" class="l-footer">
	<?php if ( ! SWELL_Theme::is_use( 'ajax_footer' ) ) SWELL_Theme::get_parts( 'parts/footer/footer_contents' ); ?>
</footer>
<?php
	// 固定フッターメニュー
	if ( has_nav_menu( 'fix_bottom_menu' ) ) :
		$cache_key = $SETTING['cache_bottom_menu'] ? 'fix_bottom_menu' : '';
		SWELL_Theme::get_parts( 'parts/footer/fix_menu', null, $cache_key );
	endif;

	// 固定ボタン
	SWELL_Theme::get_parts( 'parts/footer/fix_btns' );

	// モーダル
	SWELL_Theme::get_parts( 'parts/footer/modals' );
?>
</div><!--/ #all_wrapp-->
<?php
wp_footer();
echo $SETTING['foot_code']; // phpcs:ignore
?>
<script src = "https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
var swiper1 = new Swiper('.mainvisual .swiper-container', {
  loop: true,
  speed: 1500,            //追加（スライドスピード）
  effect: 'fade',         //追加（フェードエフェクトを適用する）
  // autoplay: {
  //   delay: 2000,
  // },
});

const swiper2 = new Swiper(".living-things .swiper", {
  // ページネーションが必要なら追加
  pagination: {
    el: ".swiper-pagination"
  },
  // ナビボタンが必要なら追加
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1.5,
	spaceBetween: 10,
	centeredSlides: true,
  // loop: true,
	breakpoints: {
    1025: {
      slidesPerView: 3.5,
			centeredSlides: false,
    }
  }
});

const swiper3 = new Swiper(".swiper-container", {
  // ページネーションが必要なら追加
  loop: true,
  speed: 1500,            //追加（スライドスピード）
  effect: 'fade',         //追加（フェードエフェクトを適用する）
  autoplay: {
    delay: 2000,
  },
});
</script>
</body></html>
