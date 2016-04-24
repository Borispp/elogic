<?php
/**
 * Template Name: MainPage
 */

get_header(); ?>

	<!-- BLOCK 1 -->
	<section class="section -cleaning_system">
		<div class="base-col">
			<h1 class="headline-1"><?php echo get_field('headline'); ?> <span><?php echo get_field('sub_headline'); ?></span></h1>
			<a href="#moreInfo" class="btn-work scrollto">CUM LUCREAZĂ</a>
			<a href="#order" class="btn-custom_now popupLink">COMANDA ACUM</a>
		</div>
		<section class="advantages-bg">
			<div class="base-col">
				<ul class="clean_syst__advantages">
					<?php
						if( have_rows('advantages') ):
							while( have_rows('advantages') ): the_row();
								echo
									'<li class="advantages-col">
										<img src="'.get_sub_field('icon').'" class="icon"></img>
										<span>'.get_sub_field('headline').'</span>
										<p>'.get_sub_field('description').'</p>
									</li>';
							endwhile;
						endif;
					?>
				</ul>
			</div>
		</section>
	</section>
	<!-- BLOCK 2 -->
	<section class="section -ecologic_about">
		<div class="base-col">
			<h2 class="headline-2"><span><?php echo get_field('system_over_headline'); ?></span><br><?php echo get_field('system_headline'); ?></h2>
			<p class="eco_about__text"><?php echo get_field('system_description'); ?></p>
			<?php echo get_field('system_button_html'); ?>
		</div>
	</section>
	<!-- BLOCK 3 -->
	<section class="section -more_information" id="moreInfo">
		<div class="base-col">
			<div class="eco_about__realize">
				<h2 class="headline-2 -black"><span><?php echo get_field('realize_over_headline'); ?></span><br><?php echo get_field('realize_headline'); ?></h2>
				<ul class="realization_process">
					<?php
						if( have_rows('realize_process') ):
							while( have_rows('realize_process') ): the_row();
								echo
									'<li class="realize-col">
										<img src="'.get_sub_field('icon').'" class="icon"></img>
										<span>'.get_sub_field('headline').'</span>
										<p>'.get_sub_field('description').'</p>
									</li>';
							endwhile;
						endif;
					?>
				</ul>
			</div>
		</div>
	</section>
	<!-- BLOCK 4 -->
	<section class="section -custom_free">
		<div class="base-col">
			<?php echo get_field('history_block'); ?>
		</div>
	</section>
	<!-- BLOCK 5 -->
	<section class="section -price_plan" id="price_plan">
		<div class="base-col">
			<h2 class="headline-2"><span><?php echo get_field('price_list_sub_headline'); ?></span><br><?php echo get_field('price_list_headline'); ?></h2>
			<p class="price_plan--label">Selectaţi tipul de sol:</p>
			<div class="price_plan__buttons">
				<input type="radio" name="price_plan" id="nisip" checked>
				<label for="nisip" class="btn-sand" data-id="#nisipSelect">NISIP</label>
				<input type="radio" name="price_plan" id="argila">
				<label for="argila" class="btn-loam" data-id="#argilaSelect">ARGILA</label>
			</div>
			<ul class="price_plan__select" id="nisipSelect">
				<?php
					if( have_rows('nisip') ):
						$i = 0;

						while( have_rows('nisip') ): the_row();
							$i++;
							echo
								'<li class="select-col">
									<h2 class="select__name">'.get_sub_field('option_headline').'</h2>
									<span class="select__from">de la</span>
									<h3 class="select__price">'.get_sub_field('option_price').'</h3>
									'.get_sub_field('option_description').'
									<a href="#order" class="popupLink selectOptions btn-custom" data-info=\'{"type": "nisip", "select": "id'.$i.'"}\'>COMANDĂ</a>
								</li>';
						endwhile;
					endif;
				?>
			</ul>

			<ul class="price_plan__select -hide" id="argilaSelect">
				<?php
					if( have_rows('argila_options') ):
						while( have_rows('argila_options') ): the_row();
							$i++;
							echo
								'<li class="select-col">
									<h2 class="select__name">'.get_sub_field('option_headline').'</h2>
									<span class="select__from">de la</span>
									<h3 class="select__price">'.get_sub_field('option_price').'</h3>
									'.get_sub_field('option_description').'
									<a href="#order" class="popupLink selectOptions btn-custom" data-info=\'{"type": "argila", "select": "id'.$i.'"}\'>COMANDĂ</a>
								</li>';
						endwhile;
					endif;
				?>
			</ul>
		</div>
	</section>
	<!-- BLOCK 6 -->
	<!-- <section class="section -interesting_stories">
		<div class="base-col">
			<div class="block_stories">
				<h2 class="headline-2"><span>VEDEŢI</span><br>ISTORII INTERESANTE</h2>
				<div class="list_stories">
					<a href="#" class="stories-col break-wc">
						<p class="stor__strong">În luna mai la anul 2008 la Staţia cosmică internaţională s-a stricat WC.<span>
						01 Octombrie 2015 la 20:15</span></p>
					</a>
					<a href="#" class="stories-col look-up">
						<p class="stor__strong">Look Up in The Sky<span>22 Octombrie 2015 la 14:23</span></p>
					</a>
					<a href="#" class="stories-col maintenance">
						<p class="stor__strong">Protective Preventative Maintenance<span>01 Octombrie 2015 la 20:15</span></p>
					</a>
				</div>
			</div>
		</div>
	</section> -->

<?php
get_footer();
?>
