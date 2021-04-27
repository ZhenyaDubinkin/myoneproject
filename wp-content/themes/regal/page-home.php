<?php
/**
 * Template name: Главная страница
 */
get_header();
?>

	<!-- Основная часть -->
	<section class="main_banner">
        <img src="<?php the_field('fonovoe_izobrazhenie_s1')?>" alt="" class="bg">
		<img src="<?= _TPL_DIR ?>/assets/images/abs_sun.svg" alt="" class="abs">

		<div class="cont" style="opacity: 0;">
			<div class="lines">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="columns flex">
				<div class="col_l">
					<div class="subtitle"><?php the_field('podzagolovok_s1')?></div>

					<div class="title"><?php the_field('zagolovok_s1')?></div>

					<?php the_field('preimushhestva_s1')?>

					<div class="buttons flex">
						<div class="link">
							<button type="button" class="main_button modal_link" data-content="#price_modal"><?php _e('Запросить цены', 'regal') ?></button>
						</div>

						<div class="link">
							<button type="button" class="button_text scroll_link" data-anchor="#catalog">
								<?php _e('Смотреть продукцию', 'regal') ?>
								<span class="icon">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00279 3.12643L1.12922 10L3.78117e-07 8.87078L6.87357 1.99721L0.815373 1.99721L0.815373 0.4L9.6 0.4L9.6 9.18463L8.0028 9.18463L8.00279 3.12723L8.00279 3.12643Z" fill="currentColor"/>
                                    </svg>
                                </span>
							</button>
						</div>
					</div>
				</div>

				<div class="col_r">
					<div class="box_info">
						<div class="box">
							<div class="link flex">
								<span><?php _e('ФК', 'regal') ?></span>

								<div class="icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.007 6.81607L2.82306 24L-2.468e-07 21.1769L17.1839 3.99301L2.03843 3.99302L2.03843 1.91994e-06L24 0L24 21.9616L20.007 21.9616L20.007 6.81807L20.007 6.81607Z" fill="white"/>
									</svg>
								</div>
							</div>
						</div>

						<span class="text"><?php the_field('tekst_v_vyezzhayushhem_bloke_s1')?></span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="catalog" class="catalog main_margin" data-aos="fade">
		<img data-src="<?= _TPL_DIR ?>/assets/images/abs_plywood.svg" alt="Wood" class="abs lozad">

		<img data-src="<?= _TPL_DIR ?>/assets/images/abs_plywood2.svg" alt="Wood" class="abs abs2 lozad">

		<div class="cont">
			<div class="left">
				<div class="main_title"><?php the_field('zagolovok_s2')?></div>

				<div class="note"><?php the_field('podzagolovok_s2')?></div>
			</div>

			<div class="right">
				<div class="wrap_table">
					<table>
						<tr>
							<th><?php _e('Толщина, мм', 'regal') ?></th>
							<th class="hide-sm"><?php _e('Размер, мм', 'regal') ?></th>
							<th><?php _e('Кол-во листов в пачке, шт', 'regal') ?></th>
							<th><?php _e('Сорт', 'regal') ?></th>
							<th></th>
						</tr>
                        <?php while( have_rows('tablicza_s2') ) : the_row(); ?>
                            <tr>
                                <td class="sheet-name"><?php the_sub_field('tolshhina') ?></td>

                                <td class="hide-sm"><?php the_sub_field('razmer') ?></td>

                                <td><?php the_sub_field('kol-vo_listov_v_pachke') ?></td>

                                <td>
                                    <div class="select_wrap">
                                        <select>
                                            <option><?php _e('Выбрать сорт', 'regal') ?></option>
	                                        <?php while( have_rows('sort') ) : the_row(); ?>
                                                <option value="<?php the_sub_field('imya') ?>"><?php the_sub_field('imya') ?></option>
	                                        <?php endwhile; ?>
                                        </select>
                                    </div>
                                </td>

                                <td>
                                    <button type="button" class="modal_link" data-content="#price_modal">
                                        <?php _e('Узнать цену', 'regal') ?>
                                        <span class="icon">
													<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.00277 6.95358L1.1292 13.8271L-2.39406e-05 12.6979L6.87355 5.82435L0.815349 5.82435L0.815349 4.22715L9.59997 4.22715L9.59998 13.0118L8.00277 13.0118L8.00277 6.95438L8.00277 6.95358Z" fill="currentColor"/>
													</svg>
												</span>
                                    </button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
					</table>
				</div>
			</div>

			<div class="left">
				<div class="info">
					<?php the_field('tekst_s2')?>
				</div>

				<div class="link"><button type="button" class="main_button modal_link" data-content="#callback_modal"><?php _e('Оставить заявку', 'regal') ?></button></div>
			</div>

			<div class="clear"></div>
		</div>
	</section>


	<section class="how_to_order main_margin" data-aos="fade">
		<img data-src="<?= _TPL_DIR ?>/assets/images/abs_plywood3.svg" alt="Wood" class="abs lozad">

		<div class="cont">
			<div class="main_title"><?php the_field('zagolovok_s3') ?></div>

			<div class="grid">
                <?php while( have_rows('punkty_s3') ) : the_row(); ?>
                    <div class="item">
                        <div class="line flex">
                            <div class="title"><?php the_sub_field('zagolovok') ?></div>

                            <div class="number"><?php the_sub_field('nomer') ?></div>
                        </div>

                        <div class="text_block">
	                        <?php the_sub_field('tekst') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
			</div>

			<div class="link"><button type="button" class="main_button modal_link" data-content="#callback_modal"><?php _e('Оставить заявку', 'regal') ?></button></div>
		</div>
	</section>


	<section class="use_sector main_margin" data-aos="fade">
		<div class="cont">
			<div class="main_title"><?php the_field('zagolovok_s4') ?></div>
		</div>

		<div class="cont big">
			<div class="grid flex">
				<?php while( have_rows('punkty_s4') ) : the_row(); ?>
                    <div class="item">
                        <img data-src="<?php the_sub_field('izobrazhenie') ?>" alt="" class="lozad bg">

                        <div class="data">
                            <div class="title"><?php the_sub_field('zagolovok') ?></div>

                            <div class="text"><?php the_sub_field('tekst') ?></div>

                            <div class="arrow">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3724 14.4053L1.81823e-07 2.03288L2.0326 0.000272775L14.405 12.3727L14.405 1.46794L17.28 1.46794L17.28 17.2803L1.46767 17.2803L1.46767 14.4053L12.371 14.4053L12.3724 14.4053Z" fill="currentColor"/>
                                </svg>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>


	<section id="faq" class="faq main_margin" data-aos="fade">
		<div class="cont">
			<div class="tabs_container flex">
				<div class="col_tabs">
					<div class="main_title"><?php _e('Вопрос') ?></div>

					<div class="tabs flex">
						<?php
						$a = 1;
						while( have_rows('voprosy_s5') ) : the_row(); ?>
                            <div class="item">
                                <button type="button" data-content="#tab<?= $a ?>" data-level="level1" <?php if ($a === 1) {echo 'class="active"'; } ?>>
                                    <span><?php the_sub_field('vopros') ?></span>

                                    <span class="icon">
												<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.0028 6.12643L1.12923 13L6.577e-06 11.8708L6.87358 4.99721L0.815379 4.99721L0.815379 3.4L9.60001 3.4L9.60001 12.1846L8.0028 12.1846L8.0028 6.12723L8.0028 6.12643Z" fill="#0B0B0B"/>
												</svg>
											</span>
                                </button>
                            </div>
							<?php $a++;
						endwhile; ?>
					</div>
				</div>

				<div class="data">
					<div class="title"><?php _e('Ответ', 'regal') ?></div>

					<?php
					$a = 1;
					while( have_rows('voprosy_s5') ) : the_row(); ?>
                        <div class="tab_content level1 <?php if ($a === 1) {echo 'active'; } ?>" id="tab<?= $a ?>">
                            <div class="text_block">
	                            <?php the_sub_field('otvet') ?>
                            </div>
                        </div>
						<?php $a++;
					endwhile; ?>
				</div>
			</div>

			<div class="accordion">
				<div class="main_title"><?php _e('Вопросы') ?></div>
				<?php

				while( have_rows('voprosy_s5') ) : the_row(); ?>
                    <div class="item">
                        <div class="title open_btn"><?php the_sub_field('vopros') ?></div>

                        <div class="data">
                            <div class="text_block">
	                            <?php the_sub_field('otvet') ?>
                            </div>
                        </div>
                    </div>
					<?php
				endwhile; ?>
			</div>
		</div>
	</section>


	<section class="logistics main_margin" data-aos="fade">
		<div class="cont">
			<div class="main_title"><?php the_field('zagolovok_s6') ?></div>

			<div class="note"><?php the_field('podzagolovok_s6') ?></div>
		</div>

		<div class="cont big">
			<div class="grid flex">
				<?php while( have_rows('elementy_s6') ) : the_row(); ?>
                    <div class="wrap_item">
                        <div class="item">
                            <img data-src="<?php the_sub_field('izobrazhenie') ?>" alt="" class="lozad bg">
                            <?php $video = get_sub_field('video') ?>
                            <video class="bg lozad" muted preload loop>
                                <source data-src="<?= $video['webm_video'] ?>" type='video/webm; codecs="vp8, vorbis"'>
                                <source data-src="<?= $video['mp4_video'] ?>" type="video/mp4">
                            </video>

                            <div class="data">
                                <div class="title"><?php the_sub_field('zagolovok_s6') ?></div>

                                <div class="link">
                                    <button type="button" class="modal_link main_button" data-content="#scheme_modal">
                                        <span class="desk"><?php _e('Получить схему погрузки', 'regal') ?></span>

                                        <span class="mob"><?php _e('Схема погрузки', 'regal')?></span>
                                    </button>
                                </div>
                            </div>

                            <div class="arrow">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3724 14.4053L1.81823e-07 2.03288L2.0326 0.000272775L14.405 12.3727L14.405 1.46794L17.28 1.46794L17.28 17.2803L1.46767 17.2803L1.46767 14.4053L12.371 14.4053L12.3724 14.4053Z" fill="currentColor"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php 	endwhile; ?>
			</div>
		</div>
	</section>


	<section class="sect_form" data-aos="fade">
		<img data-src="<?= _TPL_DIR ?>/assets/images/abs_sect_form.svg" alt="" class="abs lozad">

		<div class="cont flex">
			<div class="col_l">
				<div class="main_title"><?php the_field('zagolovok_s7') ?></div>

				<div class="note"><?php the_field('podzagolovok_s7') ?></div>
			</div>

			<div class="col_r">
				<form action="" data-submit="<?= get_site_url() ?>/success.php" class="form">
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
	</section>


	<section class="sect_about main_margin" data-aos="fade">
		<div class="cont">
			<div class="main_title"><?php the_field('zagolovok_s8') ?></div>

			<div class="grid flex">
				<div class="col_l">
					<div class="note"><?php the_field('podzagolovok_s8') ?></div>

					<?php the_field('preimushhestva_s8') ?>

<!--					<a href="--><?php //the_field('pervoe_izobrazhenie_s8') ?><!--" class="item fancy_img">-->
<!--						<div class="img"><img data-src="--><?php //the_field('pervoe_izobrazhenie_s8') ?><!--" alt="" class="lozad"></div>-->
<!---->
<!--						<div class="line_wrap">-->
<!--							<div class="line_name flex">-->
<!--								<div class="name">--><?php //the_field('opisanie_izobrazheniya_s8') ?><!--</div>-->
<!---->
<!--								<div class="icon">-->
<!--									<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--										<path d="M9.79813 11.9546L0.323181 2.47961L1.87977 0.923019L11.3547 10.398L11.3547 2.04698L13.5564 2.04698L13.5564 14.1563L1.44714 14.1563L1.44714 11.9546L9.79703 11.9546L9.79813 11.9546Z" fill="#414141"/>-->
<!--									</svg>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</a>-->
				</div>

				<div class="col_r">
					<div class="text_block">
						<?php the_field('tekst_v_pravoj_chasti_bloka_s8') ?>
					</div>
				</div>

                <div class="col_full">
                    <div class="items flex">
		                <?php while( have_rows('sertifikaty_s8') ) : the_row(); ?>
                            <a href="<?php the_sub_field('izobrazhenie') ?>" class="item fancy_img" data-fancybox="gallery">
                                <div class="img"><img data-src="<?php the_sub_field('izobrazhenie') ?>" alt="" class="lozad"></div>

                                <div class="line_wrap">
                                    <div class="line_name flex">
                                        <div class="name"><?php the_sub_field('nazvanie') ?></div>
                                        <?php if (get_sub_field('stranicza')) {?>
                                            <div class="page"><?php the_sub_field('stranicza') ?></div>
	                                    <?php } ?>
                                        <div class="icon">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.79813 11.9546L0.323181 2.47961L1.87977 0.923019L11.3547 10.398L11.3547 2.04698L13.5564 2.04698L13.5564 14.1563L1.44714 14.1563L1.44714 11.9546L9.79703 11.9546L9.79813 11.9546Z" fill="#414141"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
		                <?php endwhile; ?>
                    </div>
                </div>
			</div>
		</div>
	</section>


	<section id="contacts" class="contacts main_margin" data-aos="fade">
		<div class="cont flex">
			<div class="col_l">
				<div class="main_title"><?php the_field('zagolovok_s9') ?></div>

				<div class="adress"><?php the_field('adres_s9') ?></div>

				<div class="items">
					<?php while( have_rows('kontakty_sotrudnikov_s9') ) : the_row(); ?>
                        <div class="item flex">
                            <div class="title"><?php the_sub_field('otdel') ?></div>

                            <div class="data">
								<?php the_sub_field('informacziya_o_sotrudnike') ?>
                            </div>
                        </div>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="col_r">
				<div class="wrap_map">
					<div id="map" class="map"></div>

					<a href="https://yandex.ua/maps/46/kirov/geo/mikrorayon_lyangasovo/53180731/?lang=ru&ll=49.463231%2C58.507930&z=13" class="link" target="_blank">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.1839 20.007L-9.25673e-07 2.82306L2.82306 -1.234e-07L20.007 17.1839L20.007 2.03843L24 2.03843L24 24L2.03843 24L2.03843 20.007L17.1819 20.007L17.1839 20.007Z" fill="#0B0B0B"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Основная часть -->
	</div>

<?php
get_footer();
