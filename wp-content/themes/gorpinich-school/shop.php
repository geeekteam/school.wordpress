<?php

/**
 * template name: Магазин
 */

get_header(); ?>

    <div class="content">
        <!-- Block content -->

        <div class="fw-pt-40 fw-pt-80@l fw-pb-40 fw-pb-80@l fw-bg-cover fw-bg-center fw-bg-no-repeat" data-parallax style="background-image: url('<?php echo get_template_directory_uri();?>/images/pages/shop/bg.jpg')">
            <div class="container">
                <div class="fw-pl-25@m fw-pl-80@l">
                    <div>
                        <ul class="l-breadcrumbs">
                            <li class="l-breadcrumbs__item"><a href="/" class="l-breadcrumbs__link">Главная</a></li>
                            <li class="l-breadcrumbs__item"><span class="l-breadcrumbs__text">Магазин</span></li>
                        </ul>
                    </div>
                    <div class="fw-max-width-600">
                        <p class="fw-font-roboto-condensed fw-font-bold fw-color-white fw-text-uppercase fw-fz-24 fw-fz-32@s fw-fz-44@m fw-line-height-1-2 fw-mt-35">Мы сделали
                            самостоятельную работу
                            максимально эффективной!</p>
                        <p class="fw-mt-30 fw-color-yellow fw-font-merriweather fw-font-bold fw-font-italic fw-fz-16 fw-line-height-1-2 fw-max-width-420">
                            Вы получаете полную свободу действий и можете изучать язык в любом месте, в любое время и в любом режиме
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="after-parallax-container">
            <div class="s-school-facts s-school-facts--reverse">
                <img src="<?php echo get_template_directory_uri();?>/images/pages/thumbnail-facts-2.jpg" alt="" class="s-school-facts__image">
                <div class="container">
                    <div class="s-school-facts__box">
                        <p class="fw-fz-24 fw-font-medium fw-line-height-1-2 fw-mb-40 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Записи курсов – доступное обучение
                        для самых занятых!</span></p>
                        <div class="fw-grid fw-grid-20 fw-grid-50@l">
                            <div class="fw-width-1-1 fw-width-1-2@m">
                                <p class="fw-check-mark fw-mt-20 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Интересная подача, способная увлечь любого ученика</span></p>
                            </div>
                            <div class="fw-width-1-1 fw-width-1-2@m">
                                <p class="fw-check-mark fw-mt-15 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Простое объяснение сложных грамматических конструкций в
                                    виде простейших формул</span></p>
                            </div>
                            <div class="fw-width-1-1 fw-width-1-2@m">
                                <p class="fw-check-mark fw-mt-15 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Эффективная методика самостоятельного и быстрого изучения
                                    лексики</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="fw-grid fw-grid-15 fw-mt-15">
                    <div class="fw-width-1-1 fw-width-1-2@m">
                        <div class="fw-bg-color-white fw-flex fw-flex-column fw-width-1-1">
                            <div class="fw-width-1-1 fw-height-205">
                                <img src="<?php echo get_template_directory_uri();?>/images/pages/shop/thumbnail.item.jpg" alt="" class="fw-img-cover">
                            </div>
                            <div class="fw-border-box fw-pt-20 fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l">
                                <p class="fw-fz-12 fw-color-black">Для среднего уровня и выше</p>
                                <p class="fw-fz-21 fw-font-medium fw-color-black fw-mt-15">Разница между базовым и
                                    продвинутым уровнями: нюансы и идиомы</p>
                            </div>
                            <div class="fw-border-top-1 fw-border-style-solid fw-border-color-grey-light fw-border-box fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l fw-mt-auto">
                                <div class="fw-flex fw-flex-wrap fw-flex-space-between fw-flex-middle">
                                    <div class="fw-flex-grow-1 fw-mt-20"><p class="fw-fz-20 fw-color-blue"><span
                                                class="fw-fz-22 fw-color-grey fw-mr-5 fw-text-line-through">3 000 р</span>
                                            Бесплатно</p></div>
                                    <div class="fw-flex-shrink-no fw-mt-20"><a href="#"
                                                                               class="button button-red button-small">КУПИТЬ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-width-1-1 fw-width-1-2@m">
                        <div class="fw-bg-color-white fw-flex fw-flex-column fw-width-1-1">
                            <div class="fw-width-1-1 fw-height-205">
                                <img src="<?php echo get_template_directory_uri();?>/images/pages/shop/thumbnail.item.2.jpg" alt="" class="fw-img-cover">
                            </div>
                            <div class="fw-border-box fw-pt-20 fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l">
                                <p class="fw-fz-12 fw-color-black">Курс для начинающих и вспоминающих</p>
                                <p class="fw-fz-21 fw-font-medium fw-color-black fw-mt-15">Самая долгожданная программа по
                                    быстрому старту в разговорном английском</p>
                            </div>
                            <div class="fw-border-top-1 fw-border-style-solid fw-border-color-grey-light fw-border-box fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l fw-mt-auto">
                                <div class="fw-flex fw-flex-wrap fw-flex-space-between fw-flex-middle">
                                    <div class="fw-flex-grow-1 fw-mt-20"><p class="fw-fz-20 fw-color-blue"><span
                                                class="fw-fz-22 fw-color-grey fw-mr-5 fw-text-line-through">5 000 р</span>
                                            Бесплатно</p></div>
                                    <div class="fw-flex-shrink-no fw-mt-20"><a href="#"
                                                                               class="button button-red button-small">КУПИТЬ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-width-1-1 fw-width-1-2@m">
                        <div class="fw-bg-color-white fw-flex fw-flex-column fw-width-1-1">
                            <div class="fw-width-1-1 fw-height-205">
                                <img src="<?php echo get_template_directory_uri();?>/images/pages/shop/thumbnail.item.3.jpg" alt="" class="fw-img-cover">
                            </div>
                            <div class="fw-border-box fw-pt-20 fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l">
                                <p class="fw-fz-12 fw-color-black">Запись полутарочасового вебинара</p>
                                <p class="fw-fz-21 fw-font-medium fw-color-black fw-mt-15">Как выйти замуж за иностранца:
                                    пошаговые стратегии</p>
                            </div>
                            <div class="fw-border-top-1 fw-border-style-solid fw-border-color-grey-light fw-border-box fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l fw-mt-auto">
                                <div class="fw-flex fw-flex-wrap fw-flex-space-between fw-flex-middle">
                                    <div class="fw-flex-grow-1 fw-mt-20"><p class="fw-fz-20 fw-color-blue"><span
                                                class="fw-fz-22 fw-color-grey fw-mr-5 fw-text-line-through">2 000 р</span>
                                            Бесплатно</p></div>
                                    <div class="fw-flex-shrink-no fw-mt-20"><a href="#"
                                                                               class="button button-red button-small">КУПИТЬ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-width-1-1 fw-width-1-2@m">
                        <div class="fw-bg-color-white fw-flex fw-flex-column fw-width-1-1">
                            <div class="fw-width-1-1 fw-height-205">
                                <img src="<?php echo get_template_directory_uri();?>/images/pages/shop/thumbnail.item.4.jpg" alt="" class="fw-img-cover">
                            </div>
                            <div class="fw-border-box fw-pt-20 fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l">
                                <p class="fw-fz-12 fw-color-black">Начальный уровень</p>
                                <p class="fw-fz-21 fw-font-medium fw-color-black fw-mt-15">Разговорный английский 234
                                    часа</p>
                            </div>
                            <div class="fw-border-top-1 fw-border-style-solid fw-border-color-grey-light fw-border-box fw-pb-20 fw-pl-20 fw-pr-20 fw-pl-30@l fw-pr-30@l fw-mt-auto">
                                <div class="fw-flex fw-flex-wrap fw-flex-space-between fw-flex-middle">
                                    <div class="fw-flex-grow-1 fw-mt-20"><p class="fw-fz-20 fw-color-blue"><span
                                                class="fw-fz-22 fw-color-grey fw-mr-5 fw-text-line-through">30 000 р</span>
                                            26 000 р</p></div>
                                    <div class="fw-flex-shrink-no fw-mt-20"><a href="#"
                                                                               class="button button-red button-small">КУПИТЬ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="fw-mt-15 fw-bg-color-white fw-pr-20 fw-pl-20 fw-pt-20 fw-pb-20 fw-pl-25@m fw-pl-80@l fw-pt-25@m w-pt-40 fw-pt-60@l fw-pb-40 fw-pb-60@l fw-pr-25@m">
                    <div class="fw-flex fw-flex-column fw-flex-row@m">
                        <div class="fw-flex-shrink-2 fw-width-1-1@l fw-max-width-330@m fw-mr-0 fw-mr-20@m fw-mr-50@l">
                            <p class="fw-font-medium fw-fz-24 fw-text-uppercase fw-mb-20 fw-mb-40@m fw-line-height-1-2">Кому
                                и почему стоит попробовать занятия по записям курсов школы Веры Горпинич?</p>
                            <img src="<?php echo get_template_directory_uri();?>/images/pages/shop/thumbnail.article.jpg" alt="" class="fw-max-width-percent-100">
                        </div>
                        <div class="fw-flex-shrink-5 fw-flex-grow-1 fw-mt-30 fw-mt-0@m">
                            <p class="fw-font-merriweather fw-fz-15 fw-font-light fw-font-italic fw-line-height-1-5">Записи
                                курсов – комплексные пошаговые материалы, позволяющие изучать язык без преподавателя в
                                удобном режиме. Вы сами определяете продолжительность занятий, их периодичность. В отличие
                                от онлайн-обучения, построенного на общении с преподавателем в виртуальном классе в
                                назначенное время, курсы «из коробки» не предполагают никакого расписания и контроля.</p>
                            <p class="fw-font-medium fw-fz-24 fw-text-uppercase fw-mt-30 fw-mt-40@m fw-line-height-1-2 fw-mb-20 fw-mb-30@m">
                                Такой формат обучения оптимален для людей с ненормированным и плавающим графиком, которые не
                                могут позволить себе посещать даже регулярные онлайн-занятия</p>
                            <p class="fw-check-mark fw-mt-20 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Вы не будете беспокоиться о том, что для освоения какого-либо
                                навыка Вам требуется больше времени, чем остальным ученикам курса</span></p>
                            <p class="fw-check-mark fw-mt-20 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Вам будет доступна авторская методика, с помощью которой
                                разговорный английский уже освоило больше 2000 человек</span></p>
                            <p class="fw-check-mark fw-mt-20 fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Вы будете прорабатывать материал и выполнять задания без
                                надзора в комфортном режиме</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="fw-bg-no-repeat fw-bg-center fw-bg-cover fw-border-box fw-pt-20 fw-pb-20 fw-pl-20 fw-pr-20 fw-pt-60@l fw-pb-60@l fw-pl-40@l fw-pr-40@l"
                     style="background-image: url('<?php echo get_template_directory_uri();?>/images/pages/shop/bg.form.jpg')">
                    <div class="fw-flex fw-flex-column fw-flex-row@l fw-flex-middle@l">
                        <div class="fw-width-1-1 fw-max-width-290@l fw-mr-20@l">
                            <p class="fw-font-roboto-condensed fw-font-bold fw-fz-26 fw-color-white fw-text-uppercase fw-line-height-1-2">
                                Узнайте как получить курсы бесплатно!</p>
                        </div>
                        <div class="fw-width-1-1 fw-flex-grow-1@l fw-mt-20 fw-mt-0@l">
                            <form class="fw-grid fw-grid-15">
                                <div class="fw-width-1-1 fw-width-2-5@m">
                                    <input type="text" placeholder="Телефон"
                                           class="fw-width-1-1 fw-border-box fw-height-50 fw-pl-15 fw-pr-15 fw-color-black fw-fz-15 fw-font-roboto">
                                </div>
                                <div class="fw-width-1-1 fw-width-2-5@m">
                                    <input type="text" placeholder="Имя"
                                           class="fw-width-1-1 fw-border-box fw-height-50 fw-pl-15 fw-pr-15 fw-color-black fw-fz-15 fw-font-roboto">
                                </div>
                                <div class="fw-width-1-1 fw-width-1-5@m">
                                    <button type="submit" class="button button-yellow">УЗНАТЬ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();