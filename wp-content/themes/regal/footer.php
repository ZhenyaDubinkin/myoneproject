<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regal
 */

?>

<!-- Подвал -->
<footer class="main_margin">
    <div class="cont">
        <div class="top flex">
            <div class="column">
                <div class="logo"><a href="<?= get_site_url() ?>"><img src="<?php the_field('logo') ?>" alt=""></a></div>
            </div>

            <div class="column">
                <div class="wrap_menu">
                    <div class="menu flex">
                        <div class="item long"><a href="#" class="scroll_link" data-anchor="#catalog"><?php _e('Каталог', 'regal') ?></a></div>
                        <div class="item"><a href="#" class="scroll_link" data-anchor="#faq"><?php _e('FAQ', 'regal') ?></a></div>
                        <div class="item"><a href="#" class="modal_link" data-content="#purchase_modal"><?php _e('Закупка', 'regal') ?></a></div>
                        <div class="item"><a href="#" class="modal_link" data-content="#vacancy_modal"><?php _e('Вакансии', 'regal') ?></a></div>
                        <div class="item"><a href="#" class="scroll_link" data-anchor="#contacts"><?php _e('Контакты', 'regal') ?></a></div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="contact">
	                <?php $phones = get_field('phone') ?>
                    <div class="tel"><a href="tel:<?= $phones['telefon_v_formate'] ?>"><?= $phones['vidimyj_telefon'] ?></a></div>
                    <div class="mail"><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></div>
                </div>
            </div>
        </div>

        <div class="bottom flex">
            <div class="link">
                <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank" class="button_text">
                    <?php _e('Политика конфиденциальности', 'regal') ?>
                    <span class="icon">
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.00279 3.12643L1.12922 10L3.78117e-07 8.87078L6.87357 1.99721L0.815373 1.99721L0.815373 0.4L9.6 0.4L9.6 9.18463L8.0028 9.18463L8.00279 3.12723L8.00279 3.12643Z" fill="currentColor"></path>
									</svg>
								</span>
                </a>
            </div>

            <div class="developer">
                <?php _e('Разработано в <a href="https://kvin.agency" target="_blank">KVIN.AGENCY</a>', 'regal') ?>
            </div>
        </div>
    </div>
</footer>
<!-- End Подвал -->
</div>

<div class="supports_error">
    <?php _e('Ваш браузер устарел рекомендуем обновить его до последней версии<br/> или использовать другой более современный.', 'regal') ?>
</div>


<div class="overlay"></div>


<section class="modal" id="purchase_modal">
    <div class="grid flex">
        <div class="col_l">
            <div class="images flex">
                <div class="item">
                    <div class="img">
                        <img data-src="<?= _TPL_DIR ?>/assets/images/form_img.jpg" alt="" class="lozad">
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <img data-src="<?= _TPL_DIR ?>/assets/images/form_img2.jpg" alt="" class="lozad">
                    </div>
                </div>
            </div>
        </div>

        <div class="col_r">
            <div class="modal_title"><?php _e('Закупаем фанерный кряж', 'regal') ?></div>

            <div class="modal_desc"><?php _e('Наш завод закупает фанерный кряж <b>диаметром от&nbsp;18&nbsp;см</b> на&nbsp;постоянной основе. Качество сырья должно соответствовать <b>ГОСТ 9462-88</b>', 'regal') ?></div>


            <div class="modal_data">
                <form action="#" class="form">
                    <div class="line_form">
                        <div class="field special">
                            <input type="text" name="name" value="" class="input" placeholder="">

                            <div class="label"><?php _e('Ваше имя', 'regal') ?></div>
                        </div>
                    </div>

                    <div class="line_form">
                        <div class="field special">
                            <input type="tel" name="tel" value="" class="input" placeholder="" required>

                            <div class="label"><?php _e('Телефон', 'regal') ?></div>
                        </div>
                    </div>

                    <div class="line_submit flex">
                        <div class="submit">
                            <button type="submit" class="submit_btn main_button"><?php _e('Отправить', 'regal') ?></button>
                        </div>

                        <div class="agree"><?php _e('Нажимая на кнопку вы даёте согласие на обработку', 'regal') ?> <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank"><?php _e('персональных данных', 'regal') ?></a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="modal modal_price" id="price_modal">
    <div class="modal_title"><?php _e('Узнайте стоимость', 'regal') ?></div>

    <div class="modal_data">
        <form action="#" class="form">
            <div class="line_form">
                <div class="field special">
                    <input type="text" name="name" value="" class="input" placeholder="">

                    <div class="label"><?php _e('Ваше имя', 'regal') ?></div>
                </div>
            </div>

            <div class="line_form">
                <div class="field special">
                    <input type="tel" name="tel" value="" class="input" placeholder="" required>

                    <div class="label"><?php _e('Телефон', 'regal') ?></div>
                </div>
            </div>

            <div class="line_submit flex">
                <div class="submit">
                    <button type="submit" class="submit_btn main_button"><?php _e('Отправить', 'regal') ?></button>
                </div>

                <div class="agree"><?php _e('Нажимая на кнопку вы даёте согласие на обработку', 'regal') ?> <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank"><?php _e('персональных данных', 'regal') ?></a></div>
            </div>
        </form>
    </div>
</section>


<section class="modal modal_price" id="callback_modal">
    <div class="modal_title"><?php _e('Оставьте заявку', 'regal') ?></div>

    <div class="modal_data">
        <form action="#" class="form">
            <div class="line_form">
                <div class="field special">
                    <input type="text" name="name" value="" class="input" placeholder="">

                    <div class="label"><?php _e('Ваше имя', 'regal') ?></div>
                </div>
            </div>

            <div class="line_form">
                <div class="field special">
                    <input type="tel" name="tel" value="" class="input" placeholder="" required>

                    <div class="label"><?php _e('Телефон', 'regal') ?></div>
                </div>
            </div>

            <div class="line_submit flex">
                <div class="submit">
                    <button type="submit" class="submit_btn main_button"><?php _e('Отправить', 'regal') ?></button>
                </div>

                <div class="agree"><?php _e('Нажимая на кнопку вы даёте согласие на обработку', 'regal') ?> <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank"><?php _e('персональных данных', 'regal') ?></a></div>
            </div>
        </form>
    </div>
</section>


<section class="modal modal_price" id="scheme_modal">
    <div class="modal_title"><?php _e('Получить схему погрузки', 'regal') ?></div>

    <div class="modal_data">
        <form action="#" class="form">
            <div class="line_form">
                <div class="field special">
                    <input type="text" name="name" value="" class="input" placeholder="">

                    <div class="label"><?php _e('Ваше имя', 'regal') ?></div>
                </div>
            </div>

            <div class="line_form">
                <div class="field special">
                    <input type="tel" name="tel" value="" class="input" placeholder="" required>

                    <div class="label"><?php _e('Телефон', 'regal') ?></div>
                </div>
            </div>

            <div class="line_submit flex">
                <div class="submit">
                    <button type="submit" class="submit_btn main_button"><?php _e('Отправить', 'regal') ?></button>
                </div>

                <div class="agree"><?php _e('Нажимая на кнопку вы даёте согласие на обработку', 'regal') ?> <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank"><?php _e('персональных данных', 'regal') ?></a></div>
            </div>
        </form>
    </div>
</section>


<section class="modal modal_vacancy" id="vacancy_modal">
    <div class="grid flex">
        <div class="col_l">
            <div class="modal_title"><?php _e('Вакансии', 'regal') ?></div>

            <div class="modal_desc"><?php _e('Хотите интересную и стабильную работу, профессиональное развитие? <br>Рассмотрим кандидатов с многолетним опытом и только начинающих карьеру. <br>Открытые вакансии: <b>кладовщик, стропальщик, техник по ремонту оборудования</b>', 'regal') ?></div>


            <div class="modal_data">
                <form action="#" class="form">
                    <div class="line_form">
                        <div class="field special">
                            <input type="text" name="name" value="" class="input" placeholder="">

                            <div class="label"><?php _e('Ваше имя', 'regal') ?></div>
                        </div>
                    </div>

                    <div class="line_form">
                        <div class="field special">
                            <input type="tel" name="tel" value="" class="input" placeholder="" required>

                            <div class="label"><?php _e('Телефон', 'regal') ?></div>
                        </div>
                    </div>

                    <div class="line_submit flex">
                        <div class="submit">
                            <button type="submit" class="submit_btn main_button">Отправить</button>
                        </div>

                        <div class="agree"><?php _e('Нажимая на кнопку вы даёте согласие на обработку', 'regal') ?> <a href="<?php the_field('fajl_s_politikoj_konfidenczialnosti') ?>" target="_blank"><?php _e('персональных данных', 'regal') ?></a></div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col_r">
            <div class="img">
                <img data-src="<?= _TPL_DIR ?>assets/images/worker2.jpg" alt="" class="lozad">
            </div>
        </div>
    </div>
</section>


<!-- Подключение javascript файлов -->

<?php wp_footer(); ?>

<script src="http://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&amp;lang=ru-RU"></script>
<script>
    $(document).ready(function(){

        inView.offset(200)

        if( $('#map').length ) {
            inView('#map')
                .on('enter', function(el){
                    if (!$('#map').hasClass('loaded')) {
                        ymaps.ready(init);

                        $('#map').addClass('loaded')
                    }
                })
        }
    });

    //карта
    function init(){
        var myMap = new ymaps.Map("map", {
                center: [58.52104616839499, 49.45081614696517],
                zoom: 13
            }),
            myPlacemark = new ymaps.Placemark([58.52104616839499, 49.45081614696517],{
            }, {
                iconImageHref: 'images/ic_marker.svg',
                iconImageSize: [26, 34],
                iconImageOffset: [-13, -34],
            })

        myMap.geoObjects.add(myPlacemark)
    }
</script>
</body>
</html>