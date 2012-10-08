<?php
/*
 *  User custom styles
 */

define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
header('Content-type: text/css');
?>
/* === Body Font === */
body {
	font-family: <?php echo get_theme_option('body_font'); ?>;
	font-size: <?php echo get_theme_option('body_font_size'); ?>px;
}

/* === Headings Font === */
@font-face {
	font-family: "<?php echo get_theme_option('heading_font'); ?>";
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.eot");
	src: url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.eot?#iefix") format("embedded-opentype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.woff") format('woff'), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.ttf") format("truetype"), url("font/<?php echo strtolower( get_theme_option('heading_font') ); ?>/webfont.svg#<?php echo get_theme_option('heading_font'); ?>") format("svg");
	font-weight: normal;
	font-style: normal;
}

#menu ul li a,
#home_top_logos #site_ribbon,
#home_slider_bottom h3,
#hello_welcome,
#home_about_desc_left h3,
#home_about_listing ul li h2,
#home_about_listing ul li h3,
#portfolio_section_desc_left h3,
#filter_menu label,
.title_quote,
#blog_section_desc_left h3,
#blog_section_listing ul li .date,
.post_title,
.blog_section_sidebar h3,
.retro_search .submit,
#contact_section_desc_left h3,
#contact_fields h3,
#contact_fields_right #submit,
.form-submit #submit,
#blog_section .section_inn h1,
#single .section_inn h1,
.blog_comments h3,
#contact_form_success_message h1,
.nivo-caption h3 {
	font-family: "<?php echo get_theme_option('heading_font'); ?>";
}

/* === Header Section === */
#menu ul li {
	font-size: <?php echo get_theme_option('menu_size'); ?>px;
}

<?php if ( get_theme_option('sticky_menu') ) : ?>

#header {
	position: fixed;
	top: 0;
}

<?php endif; ?>

<?php if ( get_theme_option('logo') ) : ?>

<!-- #menu ul li {
	width: 192px;
}
#menu ul .second {
	margin-right: 91px;
}
#menu ul .third {
	margin-left: 91px;
} -->

<?php endif; ?>

/* === Sections === */
.section_label {
	font-size: <?php echo get_theme_option('label_size'); ?>px;
}

/* === Home Section === */
<?php if ( ! get_theme_option('sticky_menu') ) : ?>

#home_section {
	padding-top: 0;
	margin-top: -3px;
}

<?php endif; ?>

/* === About Section === */
#home_about_desc_left {
	width: <?php echo get_theme_option('about_label_width'); ?>px;
}
#home_about_desc_right {
	width: <?php echo get_theme_option('about_intro_width'); ?>px;
}


/* === Contact Section === */
#contact_section_desc_left {
	width: <?php echo get_theme_option('contact_label_width'); ?>px;
}
#contact_section_desc_right {
	width: <?php echo get_theme_option('contact_intro_width'); ?>px;
}

<?php if ( get_theme_option('contact_intro_icons') ) : ?>

#contact_section_desc_right p {
	padding-left:35px;
	background:url(images/symbols/address_bg.png) left top no-repeat;
}
#contact_section_desc_right .phon_no {
	background:url(images/symbols/phon_no_bg.png) left top no-repeat;
}
#contact_section_desc_right .email {
	background:url(images/symbols/msg_bg.png) left top no-repeat;
}

<?php endif; ?>

/* === Custom Styles === */
<?php echo get_theme_option('css_code'); ?>