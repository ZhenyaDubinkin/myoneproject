<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
    <!--  jQuery fix  -->
    <script>const $ = jQuery</script>
    <!--  /jQuery fix  -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K5PCDW8');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5PCDW8" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrap">
    <div class="main">
        <!-- Шапка -->
        <header>
            <div class="cont flex">
                <div class="logo"><a href="<?= get_site_url() ?>"><img src="<?php the_field('logo') ?>" alt="FKRegal"></a></div>

                <div class="wrap_menu">
                    <button type="button" class="mob_menu_link">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <nav class="menu flex">
                        <div class="item"><button type="button" class="scroll_link" data-anchor="#catalog"><?php _e('Каталог', 'regal') ?></button></div>
                        <div class="item"><button type="button" class="modal_link" data-content="#purchase_modal"><?php _e('Закупка', 'regal') ?></button></div>
                        <div class="item"><button type="button" class="scroll_link" data-anchor="#faq"><?php _e('FAQ', 'regal') ?></button></div>
                        <div class="item"><button type="button" class="modal_link" data-content="#vacancy_modal"><?php _e('Вакансии', 'regal') ?></button></div>
                        <div class="item"><button type="button" class="scroll_link" data-anchor="#contacts"><?php _e('Контакты', 'regal') ?></button></div>

<!--                        <div class="item hidden_desk">-->
<!--                            <ul class="language flex">-->
<!--	                            --><?php //pll_the_languages();?>
<!--                            </ul>-->
<!--                        </div>-->
                    </nav>
                </div>

<!--                <ul class="language flex">-->
<!--	                --><?php //pll_the_languages();?>
<!--                </ul>-->

                <div class="contact">
                    <?php $phones = get_field('phone') ?>
                    <div class="tel"><a href="tel:<?= $phones['telefon_v_formate'] ?>"><?= $phones['vidimyj_telefon'] ?></a></div>
                    <div class="mail"><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></div>
                </div>
            </div>
        </header>
        <!-- End Шапка -->
