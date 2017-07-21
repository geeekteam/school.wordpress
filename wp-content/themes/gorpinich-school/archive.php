<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gorpinich-school
 */

get_header(); ?>

<div class="content">
    <div class="fw-pt-40 fw-pt-80@l fw-pb-40 fw-pb-80@l fw-bg-cover fw-bg-center fw-bg-no-repeat" data-parallax style="background-image: url('<?php echo get_template_directory_uri();?>/images/pages/blog/bg.jpg')">
        <div class="container">
            <div class="fw-pl-25@m fw-pl-80@l">
                <div class="fw-mb-50">
                    <ul class="l-breadcrumbs">
                        <li class="l-breadcrumbs__item"><a href="/" class="l-breadcrumbs__link">Главная</a></li>
                        <li class="l-breadcrumbs__item"><span class="l-breadcrumbs__text">Блог</span></li>
                    </ul>
                </div>
                <div class="fw-max-width-700">
                    <p class="fw-font-roboto-condensed fw-font-bold fw-color-white fw-text-uppercase fw-fz-24 fw-fz-32@s fw-fz-54@m fw-line-height-1-2">Блог</p>
                </div>
            </div>
        </div>
    </div>



    <div class="after-parallax-container">
        <div class="fw-mt-15 fw-bg-color-white fw-pt-40 fw-pt-60@m fw-pb-60 fw-pb-100@m">
            <div class="container">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'preview');
                    endwhile; ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php
get_footer();
