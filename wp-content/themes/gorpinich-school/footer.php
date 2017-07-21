<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorpinich-school
 */

?>
<footer class="footer">
    <div class="container">
        <div class="footer__top fw-grid fw-grid-20">
            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                <ul class="footer__list">
                    <li>Главная</li>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/shop">Магазин</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                <ul class="footer__list">
                    <li>О школе</li>
                    <li><a href="/about-school">О школе</a></li>
                    <li><a href="/teachers">Наши преподователи</a></li>
                    <li><a href="/category/blog">Блог</a></li>
                    <li><a href="/reviews">Отзывы</a></li>
                    <li><a href="/schedule">Расписание</a></li>
                </ul>
            </div>
            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                <ul class="footer__list">
                    <li>Курсы</li>
                    <li><a href="/conversational-english">Разговорный английский</a></li>
                    <li><a href="/school-for-tourists">Английский для туристов</a></li>
                    <li><a href="/individual-courses">Индивидуальное обучение</a></li>
                    <li><a href="/best-teacher">Ведущий преподаватель</a></li>
                    <li><a href="/business-english">Деловой английский</a></li>
                </ul>
            </div>
            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                <ul class="footer__list">
                    <li>Магазин</li>
                    <li>
                        <a href=" https://vk.com/gorpinich_school" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.vk.png" alt=""></a>
                        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCPqnErNfSIVqAJYi676m3Hw" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.youtube.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="footer__copyright">&copy; 2016 – 2017  Школа иностранных языков Веры Горпинич</p>
    </div>
</footer>

<div class="popup-wrapper js-popup" data-popup="callback-popup">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Первый результат – бесплатно!</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <form action="" class="fw-width-1-1">
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Ваше имя</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-20 fw-pr-20 fw-color-black"></div>
                    </div>
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s fw-mt-20">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Телефон</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-20 fw-pr-20 fw-color-black"></div>
                    </div>
                    <div class="fw-pl-0 fw-pl-85@s fw-border-box fw-mt-20">
                        <button type="submit" class="button button-yellow button-arrow">Получить доступ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="popup-wrapper js-popup" data-popup="callback-sale">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Скидка 20 % до 22 апреля на курс всем участникам пробного вебинара!</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <form action="" class="fw-width-1-1">
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Ваше имя</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-20 fw-pr-20 fw-color-black"></div>
                    </div>
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s fw-mt-20">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Телефон</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-20 fw-pr-20 fw-color-black"></div>
                    </div>
                    <div class="fw-pl-0 fw-pl-85@s fw-border-box fw-mt-20">
                        <button type="submit" class="button button-yellow button-arrow">Получить доступ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="popup-wrapper js-popup" data-popup="ask-question">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Задать вопрос</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <form action="" class="fw-width-1-1 fw-width-2-3@s">
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Ваше имя</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-5 fw-pr-5 fw-font-roboto fw-color-black"></div>
                    </div>
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-middle@s fw-mt-20">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70"><label class="fw-fz-13 fw-color-blue-dark">Телефон</label></div>
                        <div class="fw-flex-grow-1"><input type="text" class="fw-width-1-1 fw-height-38 fw-border-box fw-pl-5 fw-pr-5 fw-font-roboto fw-color-black"></div>
                    </div>
                    <div class="fw-flex fw-flex-column fw-flex-row@s fw-flex-top@s fw-mt-20">
                        <div class="fw-flex-shrink-no fw-mr-15@s fw-mb-15 fw-mb-0@s fw-width-70 fw-mt-5@s"><label class="fw-fz-13 fw-color-blue-dark">Вопрос</label></div>
                        <div class="fw-flex-grow-1">
                            <textarea class="fw-width-1-1 fw-height-150 fw-border-box fw-pl-5 fw-pr-5 fw-pt-5 fw-pb-5 fw-font-roboto fw-color-black"></textarea>
                        </div>
                    </div>
                    <div class="fw-pl-0 fw-pl-85@s fw-border-box fw-mt-20">
                        <button type="submit" class="button button-yellow button-arrow">Получить доступ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

<script type="text/javascript">
    var map,
        myIcon;

    DG.then(function () {

        map = DG.map('map', {
            center: [59.850578, 30.303804],
            zoom: 16
        });

        map.scrollWheelZoom.disable();
        map.touchZoom.disable();

        myIcon = DG.icon({
            iconUrl: '<?php echo get_template_directory_uri();?>/images/logo.svg',
            iconSize: [55, 55]
        });

        DG.marker([59.850578, 30.303804], {
            icon: myIcon
        }).addTo(map);
    });
</script>

<?php
wp_enqueue_script('custom', get_template_directory_uri() . '/js/common.js', true);
wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js');

wp_footer();
?>

</body>
</html>
