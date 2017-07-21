<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gorpinich-school
 */

$tags = wp_get_post_tags(get_the_ID());
$last_tag = end($tags);

?>

<div class="content">

    <div class="fw-pt-40 fw-pt-80@l fw-pb-40 fw-pb-80@l fw-bg-cover fw-bg-center fw-bg-no-repeat" data-parallax
         style="background-image: url('<?php echo get_template_directory_uri();?>/images/pages/blog/bg.jpg')">
        <div class="container">
            <div class="fw-pl-25@m fw-pl-80@l">
                <div class="fw-mb-50">
                    <ul class="l-breadcrumbs">
                        <li class="l-breadcrumbs__item"><a href="/" class="l-breadcrumbs__link">Главная</a></li>
                        <li class="l-breadcrumbs__item"><span class="l-breadcrumbs__text">Блог</span></li>
                    </ul>
                </div>
                <div class="fw-max-width-700">
                    <p class="fw-font-roboto-condensed fw-font-bold fw-color-white fw-text-uppercase fw-fz-24 fw-fz-32@s fw-fz-54@m fw-line-height-1-2">
                        Блог</p>
                </div>
            </div>
        </div>
    </div>

    <div class="after-parallax-container">
        <div class="fw-mt-15 fw-bg-color-white fw-pt-40 fw-pt-60@m fw-pb-60 fw-pb-100@m">
            <div class="container">
                <div class="fw-pl-25@m fw-pl-80@l">
                    <article class="fw-border-bottom-0 fw-border-style-solid fw-border-color-grey-light fw-pb-40">
                        <p class="fw-font-medium fw-fz-22 fw-text-uppercase fw-mb-35 fw-color-black"><?php the_title();?></p>
                        <div class="fw-flex fw-flex-column fw-flex-row@m">
                            <div class="fw-flex-shrink-1 fw-max-width-420 fw-width-1-1">
                                <div class=" fw-flex">
                                    <div class="fw-flex-shrink-no fw-flex-grow-no">
                                        <div class="fw-width-46 fw-border-2 fw-border-style-solid fw-border-color-yellow fw-color-yellow">
                                            <div class="fw-width-1-1 fw-border-box fw-pt-10 fw-pb-10 fw-pl-5 fw-pr-5 fw-text-center">
                                                <p class="fw-fz-21 fw-text-uppercase"><?php the_date('d')?></p>
                                                <p class="fw-fz-10 fw-text-uppercase fw-mt-5"><?php the_date('m.')?></p>
                                            </div>
                                            <div class="fw-width-1-1 fw-border-top-2 fw-border-style-solid fw-border-color-yellow fw-border-box fw-pt-5 fw-pb-5 fw-pl-5 fw-pr-5">
                                                <p class="fw-flex fw-flex-middle fw-flex-center">
                                                    <span class="fw-fz-12 fw-mr-5"><?=comments_number(0);?></span>
                                                    <i class="fa fa-comment"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-flex-grow-1 fw-ml-15">
                                        <div class="fw-width-1-1 fw-max-width-355 fw-box-proportional-100">
                                            <img src="<?php the_post_thumbnail(); ?>" alt=""
                                                 class="fw-image-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-flex-grow-1 fw-flex-shrink-2 fw-ml-35@m fw-mt-35@xs fw-mt-0@m">
                                <div class="blog-article__content fw-border-box fw-line-height-1-5 fw-fz-15">
                                    <?php the_content();?>
                                </div>
                                <div class="fw-flex fw-flex-middle fw-flex-wrap">
                                    <p class="fw-color-grey fw-fz-15 fw-mr-25 fw-mt-20">Автор:
                                        <a href="#" class="fw-color-blue-light"><?=the_author_meta(first_name);?></a>
                                    <p class="fw-color-grey fw-fz-15 fw-mt-20">Теги:
                                        <?php foreach ($tags as $tag): ?>
                                            <a href="#" class="fw-color-blue-light"><?=$tag->name;?><?php if ($tag != $last_tag): echo ', '; endif;?></a>
                                        <?php endforeach;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
<!--        --><?php //if ( comments_open() || get_comments_number() ) :
//        comments_template();
//        endif; ?>
    </div>

