<?php
	setcookie("firsttime", 1, mktime (0, 0, 0, 12, 31, 2025));

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('name'); ?><?php wp_title('|'); ?>">
	<meta name="keywords" content="<?php bloginfo('name'); ?><?php wp_title('|'); ?>">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png" type="image/x-icon" />


	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php if(!$_COOKIE["firsttime"]) { echo 'class="preview_active"';} ?>>
<?php if(!$_COOKIE["firsttime"]): ?>
	<div class="preview">

		<h1 class="headline-2 -headlineHow"><span>УЗНАЙ БОЛЬШЕ О ТОМ</span> КАК ЭТО РАБОТАЕТ</h1>

		<div class="preview--steps -intro -showPreview">
			<h1 class="headline-2">МЫ РЕШИМ ВСЕ ВАШИ ПРОБЛЕМЫ <br> С ОЧИСТКОЙ СТОЧНЫХ И БЫТОВЫХ ВОД</h1>
			<p class="preview--description">проще говоря, решим проблему канализации</p>
			<p><a href="#" class="btn-more nextPreview" data-next="step1">Как это работает</a></p>
			<p><a href="#" class="tosite">Перейти сразу на сайт</a></p>
		</div>

		<div class="preview--steps -step1 -hidePreviewRight">
			<h2 class="preview--headline">ШАГ 1. ИСПОЛЬЗУЙТЕ ВОДУ ПО НАЗНАЧЕНИЮ</h2>
			<p class="preview--description" style="width: 660px">Вся сантехника и бытовые приборы (стиральная машина, посудомоечная машина и т.п.) соединяется с системой “Ecologic” с помощью уже существующего в здании трубопровода.</p>
			<p><a href="#" class="btn-more -arrow nextPreview" data-next="step2">Следующий шаг</a></p>
		</div>

		<div class="preview--steps -step2 -hidePreviewRight">
			<h2 class="preview--headline">ШАГ 2. ОЧИСТКА ВОДЫ</h2>
			<p class="preview--description"> Бытовые и сточные воды попадают в станцию биологической очистки, в которой используется анаэробно-аэробный метод фильтрации. При завершении, вода очищена на 95%.</p>
			<p><a href="#" class="btn-more -arrow nextPreview" data-next="step3">Следующий шаг</a></p>
		</div>

		<div class="preview--steps -step3 -hidePreviewRight">
			<h2 class="preview--headline">ШАГ 3. ВТОРИЧНОЕ ИСПОЛЬЗОВАНИЕ ВОДЫ</h2>
			<p class="preview--description">После биологической очистки вода попадает в резервуар. Степень очистки позволяет вам использовать её вторично, но только для технических целей. Для потребления она не пригодна.</p>
			<p><a href="#" class="btn-more -arrow nextPreview" data-next="step4">Следующий шаг</a></p>
		</div>

		<div class="preview--steps -step4 -hidePreviewRight">
			<h2 class="preview--headline">ШАГ 4. ОТВОД ИЗЛИШКОВ ВОДЫ В ПОЧВУ</h2>
			<p class="preview--description">Резервуар оснащён водяным насосом. Когда уровень технической воды достигает определённого значения, автоматически включается насос, который перекачивает излишки воды в дренажную систему. В самой системе вода проходит дополнительную фильтрацию и уже в почву попадает на 99% чистой.</p>
			<p><a href="#" class="btn-more">СВЯЗАТЬСЯ С КОНСУЛЬТАНТОМ</a></p>
			<p><a href="#" class="tosite">Перейти сразу на сайт</a></p>
		</div>

		<div class="base-col preview--images">
			<img src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="" class="step1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/step2.png" alt="" class="step2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/step3.png" alt="" class="step3">
			<img src="<?php echo get_template_directory_uri(); ?>/images/step4.png" alt="" class="step4">
		</div>
	</div>
	<?php endif; ?>

	<div class="wrapper">
	<!-- HEADER -->
		<header class="header <?php if ($GLOBALS['white']) { echo $GLOBALS['white']; } ?>">
			<div class="base-col">
				<a href="#" class="header__logo">
					<?php
						if ($GLOBALS['white']) {
							echo '<img src="'.get_template_directory_uri().'/images/logo_2.png" alt="logo">';
						} else {
							echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="logo">';
						}
					?>
				</a>

				<?php
					$defaults = array(
					'theme_location'  => '',
					'menu'            => 'Header Menu',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => 'header--menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="header__nav %2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults );
			?>
				<!-- <div class="header__nav">
					<a href="http://www.elogic.md/" class="header__nav-select">Acasa</a>
					<a href="http://www.elogic.md/description.html" class="header__nav-select">Descriere</a>
					<a href="http://www.elogic.md/history.html" class="header__nav-select">Istoric</a>
					<a href="#" class="header__nav-select">Prețuri</a>
					<a href="http://www.elogic.md/news.html" class="header__nav-select">Noutăţi</a>
					<a href="http://www.elogic.md/help_page.html" class="header__nav-select">Întrebări</a>
					<a href="tel:+37367575390" class="header__nav-select">+373 (67) 57 53 90</a>
				</div>
			</div> -->
		</header>
