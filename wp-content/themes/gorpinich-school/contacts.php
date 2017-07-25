<?php

/**
 * template name: Контакты
 */

get_header(); ?>

    <div class="content">
        <!-- Block content -->

        <div class="fw-pt-40 fw-pt-80@l fw-pb-40 fw-pb-80@l fw-bg-color-grey-lighter">
            <div class="container">
                <div class="fw-pl-25@m fw-pl-80@l">
                    <div class="fw-mb-30">
                        <ul class="l-breadcrumbs l-breadcrumbs-dark">
                            <li class="l-breadcrumbs__item"><a href="/" class="l-breadcrumbs__link">Главная</a></li>
                            <li class="l-breadcrumbs__item"><span class="l-breadcrumbs__text">Контакты</span></li>
                        </ul>
                    </div>
                    <div class="fw-mt-20">
                        <p class="fw-font-roboto-condensed fw-font-bold fw-text-uppercase fw-fz-24 fw-fz-32@s fw-fz-54@m fw-line-height-1-2">Контакты</p>
                    </div>
                    <div class="contacts-grid fw-mt-40 fw-mt-60@l">
                        <div>
                            <div class="fw-flex fw-flex-top">
                                <div class="fw-flex-shrink-no fw-mr-15 fw-fz-44"><i
                                        class="fa fa-map-marker fw-color-blue"></i></div>
                                <div class="fw-flex-grow-1">
                                    <p class="fw-font-bold fw-fz-24 fw-line-height-1-2">г. С-Пб <br>Ленинский
                                        проспект,
                                        153
                                    </p>
                                    <p class="fw-mt-10 fw-fz-16">пн-пт с 10:00 до 21:00, сб-вс с 11:00 до 19:00</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="fw-flex fw-flex-middle fw-mb-10">
                                <div class="fw-flex-shrink-no fw-mr-15 fw-fz-26"><i class="fa fa-phone fw-color-yellow"></i></div>
                                <div class="fw-flex-grow-1">
                                    <a href="tel:+7 (812) 500-20-79"><p class="fw-font-bold fw-fz-24 fw-line-height-1-2 fw-color-black">8 (800) 775 58 37</p></a>
                                </div>
                            </div>
                            <div class="fw-flex fw-flex-middle fw-mt-10">
                                <div class="fw-flex-shrink-no fw-mr-15 fw-fz-22"><i class="fa fa-envelope fw-color-green"></i></div>
                                <div class="fw-flex-grow-1">
                                    <a href="mailto:info@-advance-club.ru"><p class="fw-font-bold fw-fz-24 fw-line-height-1-2 fw-color-black fw-text-underline">info@gorpinich-school.ru</p></a>
                                </div>
                            </div>
                            <div class="fw-flex fw-flex-middle fw-mt-12">
                                <div class="fw-flex-shrink-no fw-mr-15 fw-fz-26"><i class="fa fa-skype fw-color-blue-light"></i></div>
                                <div class="fw-flex-grow-1">
                                    <p class="fw-font-bold fw-fz-24 fw-line-height-1-2 fw-color-black fw-mt-inverse-2">niki_anna_</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" class="fw-width-1-1 fw-height-1-1 fw-bg-color-white"></div>
<?php
get_footer();