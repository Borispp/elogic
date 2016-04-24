<?php
/**
 * Template Name: FAQ
 */
	get_header(); ?>

	<!-- BLOCK 1 -->
	<section class="section -cleaning_system" style="padding-bottom: 210px">
		<div class="base-col">
			<h1 class="headline-1 h1_var2">Cu ce va putem ajuta?</h1>
		</div>
	</section>

	<!-- BLOCK 2 QUESTIONS -->
	<section class="section -questions">
		<div class="base-col">
			<ul class="help_list" id="ecoQuest">
				<li class="help-col help_install">
					<a href="#install" class="scrolltoEco">
						<img src="<?php echo get_template_directory_uri(); ?>/images/instalarea.png" alt="">
						<span class="help__span">Instalarea</span>
					</a>
				</li>
				<li class="help-col ecology">
					<a href="#ecology" class="scrolltoEco">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ecologia.png" alt="">
						<span class="help__span">Ecologia</span>
					</a>
				</li>
				<li class="help-col care">
					<a href="#care" class="scrolltoEco">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ingrijirea.png" alt="">
						<span class="help__span">Ingrijirea</span>
					</a>
				</li>
				<li class="help-col exceptional_cases">
					<a href="#except" class="scrolltoEco">
						<img src="<?php echo get_template_directory_uri(); ?>/images/except.png" alt="">
						<span class="help__span">Cazuri exceptionale</span>
					</a>
				</li>
			</ul>

			<div class="install_details questBlock -hide" id="ecology">
				<span class="detail__head">Ecologia</span>
				<?php echo get_field('ecologic'); ?>
			</div>

			<div class="install_details questBlock -hide" id="install">
				<span class="detail__head">Instalarea</span>
				<?php echo get_field('installation'); ?>
			</div>

			<div class="install_details questBlock -hide" id="care">
				<span class="detail__head">Îngrijirea</span>
				<?php echo get_field('care'); ?>
			</div>

			<div class="install_details questBlock -hide" id="except">
				<span class="detail__head">Cazuri excepționale</span>
				<?php echo get_field('except'); ?>
			</div>

			<div class="popular_questions questBlock">
				<span class="ques__span-head">Popular questions</span>
				<?php echo get_field('popular_questions'); ?>
			</div>
			<div class="recent_questions questBlock">
				<span class="ques__span-head">Recent questions</span>
				<?php echo get_field('recent_questions'); ?>
			</div>
		</div>
	</section>

<?php
	get_footer();
?>
