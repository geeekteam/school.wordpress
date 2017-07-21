<?php

/**
 * template name: Главная
 */

get_header(); ?>

    <div class="content">
        <!-- Block content -->

        <div class="fw-pt-40 fw-pt-80@m fw-pt-150@l fw-pb-40 fw-pb-80@m fw-bg-cover fw-bg-center fw-bg-no-repeat" data-parallax style="background-image: url('<?php echo get_template_directory_uri();?>/images/welcome-image.jpg')">
            <div class="container">
                <div class="fw-pl-25@m fw-pl-80@l">
                    <div class="fw-max-width-700">
                        <p class="fw-font-roboto-condensed fw-font-bold fw-color-white fw-text-uppercase fw-fz-24 fw-fz-32@s fw-fz-52@m fw-line-height-1-2">Онлайн-обучение английскому языку из любой точки планеты</p>
                        <p class="fw-font-roboto fw-fz-18 fw-color-white fw-mt-30">Делаем изучение языка интересным и эффективным!</p>
                        <div class="fw-mt-30 fw-mt-50@m"><a href="#" class="button button-red button-center js-open-popup" data-popup-target="callback-popup">Записаться на пробный урок</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="after-parallax-container">
            <div class="fw-bg-color-white fw-pb-30 fw-pt-30">
                <div class="container">
                    <div class="fw-grid fw-grid-20 fw-grid-center">
                        <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                            <div class="fw-flex fw-flex-column fw-flex-middle fw-width-1-1">
                                <div class="fw-height-50"><i class="icon icon-ruler"></i></div>
                                <div class="fw-mt-10">
                                    <p class="fw-fz-15 fw-text-center fw-line-height-1-5">Занятия <strong>от 150
                                            рублей</strong>. Дешевле, чем билет в кино!</p>
                                </div>
                            </div>
                        </div>
                        <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                            <div class="fw-flex fw-flex-column fw-flex-middle fw-width-1-1">
                                <div class="fw-height-50"><i class="icon icon-arrow-back"></i></div>
                                <div class="fw-mt-10">
                                    <p class="fw-fz-15 fw-text-center fw-line-height-1-5"><strong>Вернем 150% стоимости
                                            курса</strong>, если Вы не заговорите на английском</p>
                                </div>
                            </div>
                        </div>
                        <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                            <div class="fw-flex fw-flex-column fw-flex-middle fw-width-1-1">
                                <div class="fw-height-50"><i class="icon icon-chat"></i></div>
                                <div class="fw-mt-10">
                                    <p class="fw-fz-15 fw-text-center fw-line-height-1-5">Наши преподаватели <strong>живут
                                            или жили за рубежом</strong> и регулярно общаются с носителями языка</p>
                                </div>
                            </div>
                        </div>
                        <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                            <div class="fw-flex fw-flex-column fw-flex-middle fw-width-1-1">
                                <div class="fw-height-50"><i class="icon icon-book"></i></div>
                                <div class="fw-mt-10">
                                    <p class="fw-fz-15 fw-text-center fw-line-height-1-5">Уникальная методика быстрого
                                        запоминания <strong>5 000 базовых слов и фраз</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="fw-grid fw-grid-15 fw-mt-15">
                    <div class="fw-width-1-1 fw-width-1-2@m fw-grid">
                        <div class="fw-bg-cover fw-bg-no-repeat fw-bg-center fw-min-height-240 fw-flex fw-width-1-1"
                             style="background-image: url('<?php echo get_template_directory_uri();?>/images/thumbnail.s-services.1.jpg')">
                            <div class="fw-flex fw-flex-column fw-pt-20 fw-pl-20 fw-pr-20 fw-pt-45@l fw-pl-50@l fw-border-box fw-width-1-1">
                                <p class="fw-font-medium fw-fz-24 fw-line-height-1-2 fw-color-white">Английский для
                                    туристов</p>
                                <p class="fw-fz-15 fw-line-height-1-2 fw-color-white fw-mt-20 fw-mb-20">Готовимся к отпуску
                                    за 2 недели: чтобы избежать комичных ситуаций и не дать себя обмануть</p>
                                <div class="fw-mt-auto fw-text-right"><a href="/school-for-tourists"
                                                                         class="button button-yellow article__button fw-mr-inverse-20">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="fw-mt-15 fw-bg-cover fw-bg-no-repeat fw-bg-center fw-min-height-240 fw-flex fw-width-1-1"
                             style="background-image: url('<?php echo get_template_directory_uri();?>/images/thumbnail.s-services.2.jpg')">
                            <div class="fw-flex fw-flex-column fw-pt-20 fw-pl-20 fw-pr-20 fw-pt-45@l fw-pl-50@l fw-border-box fw-width-1-1">
                                <p class="fw-font-medium fw-fz-24 fw-line-height-1-2 fw-color-white">Бизнес - английский</p>
                                <p class="fw-fz-15 fw-line-height-1-2 fw-color-white fw-mt-20 fw-mb-20">Адаптируем программу
                                    под любой бизнес и сферу деятельности</p>
                                <div class="fw-mt-auto fw-text-right"><a href="/business-english"
                                                                         class="button button-yellow article__button fw-mr-inverse-20">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="fw-mt-15 fw-bg-cover fw-bg-no-repeat fw-bg-center fw-min-height-240 fw-flex fw-width-1-1"
                             style="background-image: url('<?php echo get_template_directory_uri();?>/images/thumbnail.s-services.3.jpg')">
                            <div class="fw-flex fw-flex-column fw-pt-20 fw-pl-20 fw-pr-20 fw-pt-45@l fw-pl-50@l fw-border-box fw-width-1-1">
                                <p class="fw-font-medium fw-fz-24 fw-line-height-1-2 fw-color-white">Готовые курсы</p>
                                <p class="fw-fz-15 fw-line-height-1-2 fw-color-white fw-mt-20 fw-mb-20">Материалы и задания,
                                    с которыми Вы сможете заниматься где угодно и когда угодно</p>
                                <div class="fw-mt-auto fw-text-right"><a href="/shop"
                                                                         class="button button-yellow article__button fw-mr-inverse-20">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-width-1-1 fw-width-1-2@m fw-grid">
                        <div class="fw-bg-cover fw-bg-no-repeat fw-bg-center fw-min-height-495 fw-flex"
                             style="background-image: url('<?php echo get_template_directory_uri();?>/images/thumbnail.s-services.4.jpg')">
                            <div class="fw-flex fw-flex-column fw-pt-20 fw-pl-20 fw-pr-20 fw-pt-45@l fw-pl-50@l fw-border-box fw-width-1-1 fw-mt-auto">
                                <p class="fw-font-medium fw-fz-24 fw-line-height-1-2 fw-color-white">Онлайн обучение</p>
                                <p class="fw-fz-15 fw-line-height-1-2 fw-color-white fw-mt-20 fw-mb-20">Онлайн-обучение
                                    позволяет не довольствоваться низкоэффективными курсами только потому, что они находятся
                                    около Вашего дома, а делать выбор в пользу рабочих методик.</p>
                                <div class="fw-mt-auto fw-text-right"><a href="/online-courses"
                                                                         class="button button-yellow article__button fw-mr-inverse-20">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="fw-mt-15 fw-bg-cover fw-bg-no-repeat fw-bg-center fw-min-height-240 fw-flex fw-width-1-1"
                             style="background-image: url('<?php echo get_template_directory_uri();?>/images/thumbnail.s-services.5.jpg')">
                            <div class="fw-flex fw-flex-column fw-pt-20 fw-pl-20 fw-pr-20 fw-pt-45@l fw-pl-50@l fw-border-box fw-width-1-1">
                                <p class="fw-font-medium fw-fz-24 fw-line-height-1-2 fw-color-white">Удобный личный
                                    кабинет</p>
                                <p class="fw-fz-15 fw-line-height-1-2 fw-color-white fw-mt-20 fw-mb-20">Когда не нужно
                                    участвовать в ежедневной схватке с хитрым интерфейсом</p>
                                <div class="fw-mt-auto fw-text-right"><a href="http://lk.gorpinich-online.ru/cms/system/login" target="_blank"
                                                                         class="button button-yellow article__button fw-mr-inverse-20">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="s-school-facts">
                <img src="<?php echo get_template_directory_uri();?>/images/pages/thumbnail-facts.jpg" alt="" class="s-school-facts__image">
                <div class="container">
                    <div class="s-school-facts__box">
                        <ul class="l-checkmark">
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>14 лет работы</strong>, чтобы сделать методику совершенной</span></p></li>
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Более <strong>2 тысяч учеников</strong> «с нуля» свободно говорят на языке</span></p></li>
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Более <strong>500</strong> человек <strong>получилим повышение</strong> благодаря нашим курса</span></p></li>
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>98% учеников</strong> поддерживаютсвязь с преподавателями</span></p></li>
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>1000%</strong> именно настолько наши выпускники стали увереннее в себе</span></p></li>
                            <li><p class="fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>95 из 100</strong> выпускников рекомендуют нас</span></p></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="fw-mt-30">
                <div class="container">
                    <p class="fw-font-roboto fw-font-bold fw-color-black fw-fz-24 fw-mb-30 fw-text-center">Онлайн курсы в
                        школе Веры Горпинич: цифры и факты</p>
                </div>
                <div class="fw-pr-15 fw-pr-30@s fw-pl-15 fw-pl-30@s fw-pt-30 fw-pb-30 fw-bg-color-blue">
                    <div class="container">
                        <div class="fw-grid fw-grid-30">
                            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l fw-text-center fw-flex fw-flex-column">
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-fz-50 fw-mb-20 fw-color-white">
                                    3</p>
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-color-yellow fw-fz-18 fw-mb-20">
                                    месяца</p>
                                <p class="fw-font-gotham-pro fw-fz-14 fw-color-white fw-line-height-1-2">столько длится средний курс онлайн</p>
                            </div>
                            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l fw-text-center fw-flex fw-flex-column">
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-fz-50 fw-mb-20 fw-color-white">
                                    15</p>
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-color-yellow fw-fz-18 fw-mb-20">
                                    минут в день</p>
                                <p class="fw-font-gotham-pro fw-fz-14 fw-color-white fw-line-height-1-2">своего времени Вы тратите на
                                    занятия</p>
                            </div>
                            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l fw-text-center fw-flex fw-flex-column">
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-fz-50 fw-mb-20 fw-color-white">
                                    300</p>
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-color-yellow fw-fz-18 fw-mb-20">
                                    минут в неделю</p>
                                <p class="fw-font-gotham-pro fw-fz-14 fw-color-white fw-line-height-1-2">в среднем тратит наш учащийся</p>
                            </div>
                            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l fw-text-center fw-flex fw-flex-column">
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-fz-50 fw-mb-20 fw-color-white">
                                    10 000</p>
                                <p class="fw-font-merriweather fw-font-bold fw-font-italic fw-color-yellow fw-fz-18 fw-mb-20">
                                    довольных учеников</p>
                                <p class="fw-font-gotham-pro fw-fz-14 fw-color-white fw-line-height-1-2">закончили наши курсы с успехом</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-vg-courses">
                    <div class="container">
                        <div class="s-vg-courses__grid">
                            <div>
                                <div class="p-user">
                                    <img src="<?php echo get_template_directory_uri();?>/images/vera-gorpinich-thumbnail.jpg" alt="" class="p-user__thumbnail">

                                    <p class="p-user__name">Вера Горпинич</p>

                                </div>
                            </div>
                            <div>
                                <div class="fw-pl-15 fw-pl-60@m fw-pt-40 fw-pt-60@m fw-pb-40 fw-pb-60@m fw-pr-15 fw-pr-30@m">
                                    <p class="fw-font-medium fw-fz-24">Автор курса</p>
                                    <div class="fw-flex fw-mt-30">
                                        <div class="fw-flex-shrink-no fw-mr-15"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.medal.png" alt=""></div>
                                        <p class="fw-flex-grow-1 fw-line-height-1-5 fw-mt-inverse-5">Основатель онлайн-школы «Школа Веры Горпинич»,
                                            выпускниками которой стали более 6 000 человек</p>
                                    </div>
                                    <div class="fw-flex fw-mt-30">
                                        <div class="fw-flex-shrink-no fw-mr-15"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.medal.png" alt=""></div>
                                        <p class="fw-flex-grow-1 fw-line-height-1-5 fw-mt-inverse-5">Несколько лет жила за границей, имеет большой опыт общения с носителями языка,
                                            регулярно практикуется с англоязычными друзьями, чтобы быть в курсе его
                                            динамики. Автор курсов быстрого и эффективного изучения разговорного
                                            английского, делового английского, английского для туристов</p>
                                    </div>
                                    <div class="fw-flex fw-mt-30">
                                        <div class="fw-flex-shrink-no fw-mr-15"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.medal.png" alt=""></div>
                                        <p class="fw-flex-grow-1 fw-line-height-1-5 fw-mt-inverse-5">Регулярно проводит бесплатные семинары, которые посетили более 50 000 человек</p>
                                    </div>
                                </div>
                                <div class="s-vg-courses__media s-vg-courses__media--frame">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mZS6euPXlMI?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-mt-15">
                <div class="s-ask-question">
                    <div class="container">
                        <div class="s-ask-question__box">
                            <p>ОСТАЛИСЬ ВОПРОСЫ ПО КУРСАМ?</p>
                            <a href="#" class="button button-yellow js-open-popup" data-popup-target="ask-question">задать вопрос</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fw-mt-15">
                <div class="container">
                    <div class="fw-bg-color-white fw-pt-40 fw-pr-15 fw-pl-15 fw-pl-80@m fw-flex fw-flex-column">
                        <div class="fw-grid fw-grid-middle fw-grid-20 fw-grid-50@l">
                            <div class="fw-width-1-1 fw-width-2-5@l"><p
                                    class="fw-font-roboto fw-font-medium fw-fz-24 fw-color-black">Школа иностранных
                                    языков как школа успеха!</p></div>
                            <div class="fw-width-1-1 fw-width-3-5@l"><p
                                    class="fw-font-merriweather fw-font-italic fw-fz-15 fw-color-black fw-line-height-1-5">
                                    Знание иностранного языка рушит барьеры, делает цели достижимыми, а жизнь –
                                    разнообразной. Наши выпускники подтвердят это, ведь они могут:</p></div>
                        </div>
                        <div class="fw-grid fw-grid-20 fw-grid-50@m fw-mt-30 fw-mt-50@m">
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>14 лет работы</strong>,
                                чтобы сделать методику совершенной</span></p></div>
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Более <strong>2 тысяч
                                        учеников</strong> «с нуля» свободно говорят на языке</span></p></div>
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block">Более <strong>500</strong>
                                    человек <strong>получилим повышение</strong> благодаря нашим курса</span></p></div>
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>98% учеников</strong>
                                    поддерживаютсвязь с преподавателями</span></p></div>
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>1000%</strong> именно
                                    настолько наши выпускники стали увереннее в себе</span></p></div>
                            <div class="fw-width-1-1 fw-width-1-2@m"><p class="fw-check-mark fw-line-height-1-5"><span class="fw-mt-inverse-2 fw-block"><strong>95 из 100</strong>
                                    выпускников рекомендуют нас</span></p></div>
                        </div>
                        <div class="fw-mt-auto fw-text-right"><a href="/about-school"
                                                                 class="button button-arrow button-yellow fw-mt-60 fw-mr-inverse-15">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
