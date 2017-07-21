<?php

$tags = wp_get_post_tags(get_the_ID());
$last_tag = end($tags);

?>

<div class="fw-pl-25@m fw-pl-80@l">
    <article class="fw-border-bottom-1 fw-border-style-solid fw-border-color-grey-light fw-pb-40">
        <a href="<?php the_permalink(get_the_ID());?>"><p class="fw-font-medium fw-fz-22 fw-text-uppercase fw-mb-35 fw-color-black"><?=the_title();?></p></a>
        <div class="fw-flex fw-flex-column fw-flex-row@m">
            <div class="fw-flex-shrink-1 fw-max-width-420 fw-width-1-1">
                <div class=" fw-flex">
                    <div class="fw-flex-shrink-no fw-flex-grow-no">
                        <div class="fw-width-46 fw-border-2 fw-border-style-solid fw-border-color-yellow fw-color-yellow">
                            <div class="fw-width-1-1 fw-border-box fw-pt-10 fw-pb-10 fw-pl-5 fw-pr-5 fw-text-center">
                                <p class="fw-fz-21 fw-text-uppercase"><?=get_the_date('d', get_the_ID());?></p>
                                <p class="fw-fz-10 fw-text-uppercase fw-mt-5"><?=get_the_date('M.', get_the_ID());?></p>
                            </div>
                            <div class="fw-width-1-1 fw-border-top-2 fw-border-style-solid fw-border-color-yellow fw-border-box fw-pt-5 fw-pb-5 fw-pl-5 fw-pr-5">
                                <p class="fw-flex fw-flex-middle fw-flex-center">
                                    <span class="fw-fz-12 fw-mr-5"><?=comments_number(0);?></span> <i class="fa fa-comment"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="fw-flex-grow-1 fw-ml-15">
                        <div class="fw-width-1-1 fw-max-width-355 fw-box-proportional-100">
                            <img src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""
                                 class="fw-image-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="fw-flex-grow-1 fw-flex-shrink-2 fw-ml-35@m fw-mt-35@xs fw-mt-0@m">
                <div class="fw-border-box fw-pt-35@l">
                    <p class="fw-line-height-1-2 fw-fz-15 fw-line-height-1-5"><?the_excerpt();?></p>
                    <div class="fw-flex fw-flex-middle fw-flex-wrap">
                        <p class="fw-color-grey fw-fz-15 fw-mr-25 fw-mt-20">Автор:
                            <a href="#" class="fw-color-blue-light"><?=the_author_meta(first_name);?></a>
                        <?php if ($tags):?>
                            <p class="fw-color-grey fw-fz-15 fw-mt-20">Теги:
                                <?php foreach ($tags as $tag): ?>
                                    <a href="#" class="fw-color-blue-light"><?=$tag->name;?><?php if ($tag != $last_tag): echo ', '; endif;?></a>
                                <?php endforeach;?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="fw-mt-40">
                        <div class="fw-mt-40">
                            <a href="<?php the_permalink(get_the_ID());?>" class="button button-yellow">Прочитать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>