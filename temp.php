<?php $data = carbon_get_post_meta( get_the_ID(), 'gks_slider' ); ?>
<?php if ( ! empty( $data ) ): ?>
	<?php foreach ( $data as $item ): ?>
		<?php echo $item['slide_main_number'] ?>
		<?php echo $item['slide_slogan_text'] ?>
		<?php echo $item['slide_second_number'] ?>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_theme_option( 'stg_top_text_calculator' ) ) { ?>
    <a class="calc scrollTop" href="#calc-block">
		<?php echo carbon_get_theme_option( 'stg_top_text_calculator' ); ?>
    </a>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_post_meta( get_the_ID(), 'about__second_right_head' ) ) { ?>
    <div class="about__advantage_head">
		<?php echo carbon_get_post_meta( get_the_ID(), 'about__second_right_head' ); ?>
    </div>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php $brand_carousel = carbon_get_post_meta( get_the_ID(), 'brand_carousel' ); ?>
<?php if ( ! empty( $brand_carousel ) ): ?>
	<?php foreach ( $brand_carousel as $item ): ?>
        <div class="brand">
			<?php echo $item['brand_carousel_img'] ?>
        </div>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->


<div class="site-branding">
	<?php
	the_custom_logo();
	if ( is_front_page() && is_home() ) :
		?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php
	else :
		?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	<?php
	endif;
	$ineed_print_description = get_bloginfo( 'description', 'display' );
	if ( $ineed_print_description || is_customize_preview() ) :
		?>
        <p class="site-description"><?php echo $ineed_print_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>
</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ineed-print' ); ?></button>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #site-navigation -->


<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ineed-print' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'ineed-print' ), 'WordPress' );
			?>
        </a>
        <span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'ineed-print' ), 'ineed-print', '<a href="http://---">---</a>' );
		?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->


<style>
    a[data-hover="nwl-id-1"] {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail( $post_id = null, $size = 'post-thumbnail' ); ?>') no-repeat;
        background-size: cover;
        transition: background ease-in-out 300ms;
    }

    a[data-hover="nwl-id-1"]:hover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo get_the_post_thumbnail( $post_id = null, $size = 'post-thumbnail'); ?>') no-repeat;
        background-size: cover;
        transition: background ease-in-out 300ms;
    }
</style>

<?php
global $post;
$args    = array( 'numberposts' => 4, 'category' => 1, 'orderby' => 'date' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) {
	setup_postdata( $post );
	?>
    <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'); background-color: #2644a6; ">
                            <span class="tidings__links">
                                <span class="tidings__links_date">
                                    <?php echo get_the_date( 'j F Y' ); ?>
                                </span>
                                <span class="tidings__links_head">
                                    <?php the_title(); ?>
                                </span>
                            </span>
    </a>
	<?php
}
wp_reset_postdata();
?>

<div class="contain-purchase">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="purchase">
                    <div class="purchase__head">
                        <h2>Стоимость печати</h2>
                    </div>
                    <div class="purchase__calc">
                        <img class="img-fluid" src="/wp-content/themes/ineed-print/assets/img/image_3.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-md-1">
                <div class="purchase__convince">
                    <div class="purchase__convince_info">
                        <div class="purchase__convince_info-ico">
                            <img src="/wp-content/themes/ineed-print/assets/img/ico_1.svg" alt="img">
                        </div>
                        <div class="purchase__convince_info-txt">
                            Обсуждаем задачу и рассчитываем стоимость
                        </div>
                    </div>
                    <div class="purchase__convince_block">
                        <img src="/wp-content/themes/ineed-print/assets/img/pointer_right.svg" alt="img">
                    </div>
                    <div class="purchase__convince_info">
                        <div class="purchase__convince_info-ico">
                            <img src="/wp-content/themes/ineed-print/assets/img/ico_2.svg" alt="img">
                        </div>
                        <div class="purchase__convince_info-txt">
                            Высылаем итоговый файл для печати – согласовываем макеты, размеры
                        </div>
                    </div>
                    <div class="purchase__convince_block">
                        <img src="/wp-content/themes/ineed-print/assets/img/pointer_right.svg" alt="img">
                    </div>
                    <div class="purchase__convince_info">
                        <div class="purchase__convince_info-ico">
                            <img src="/wp-content/themes/ineed-print/assets/img/ico_3.svg" alt="img">
                        </div>
                        <div class="purchase__convince_info-txt">
                            Высылаем счет на оплату
                        </div>
                    </div>
                    <div class="purchase__convince_block">
                        <img src="/wp-content/themes/ineed-print/assets/img/pointer_right.svg" alt="img">
                    </div>
                    <div class="purchase__convince_info">
                        <div class="purchase__convince_info-ico">
                            <img class="img-fluid" src="/wp-content/themes/ineed-print/assets/img/ico_4.svg" alt="img">
                        </div>
                        <div class="purchase__convince_info-txt">
                            Печатаем и сообщаем о готовности
                        </div>
                    </div>
                    <div class="purchase__convince_block">
                        <img src="/wp-content/themes/ineed-print/assets/img/pointer_right.svg" alt="img">
                    </div>
                    <div class="purchase__convince_info">
                        <div class="purchase__convince_info-ico">
                            <img src="/wp-content/themes/ineed-print/assets/img/ico_5.svg" alt="img">
                        </div>
                        <div class="purchase__convince_info-txt">
                            Привозим курьером или ждем вас в гости круглосуточно
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

