<?php
/**
 * The template for displaying the footer
 */
?>
<?php
	global $childcats;
	global $childcats_history;
	global $childcats_order;
	global $childcats_contacts;
?>

</html>

<!-- BLOCK 7 -->
<section class="section -call_me">
	<div class="base-col">
		<form action="" method="post">
			<!-- <span class="form-text" id="abonent">Aboneaza-te la noutati</span> -->
			<span class="form-text -hide" id="abonentSuccess">Vă mulţumesc</span>
			<input class="form-input" type="text" name="" placeholder="Aboneaza-te la noutati" id="subscribeEmail">
			<input class="form-submit" type="submit" name="" value="ABONEAZA-MA" id="subscribeButton">
		</form>
	</div>
</section>

<!-- FOOTER -->
<footer class="footer">
	<div class="base-col">
	<ul class="footer__list">
		<li class="footer-col copyright">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_2.png" alt="logo"></a><br>
				<span>© 2016 All rights reserved.</span>
				<div class="social_buttons">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ok.png" alt=""></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.png" alt=""></a>
				</div>
			</li>
			<li class="footer-col contacts">
				<span>Contacte</span>
				<table>
					<tr>
						<td>Tel/fax:</td>
						<td><a href="tel:+37322990981" class="cont_number">+373 (22) 99 09 81</a></td>
					</tr>
					<tr>
						<td>GSM:</td>
						<td><a href="tel:+37367575390" class="cont_number">+373 (67) 57 53 90</a></td>
					</tr>
					<tr>
						<td>E-Mail:</td>
						<td><a href="mailto:office@ecologic-md.net" class="cont_mail">office@ecologic-md.net</a></td>
					</tr>
				</table>
			</li>
			<li class="footer-col help">
				<span>Ajutor</span>
				<p>Aveţi nevoie de ajutor? Don't hesitate to ask us something. Email is directly <a href="mailto:office@ecologic-md.net" class="cont_mail">office@ecologic-md.net</a> or call us at<br> <a href="tel:+37322990981" class="cont_number">+373 (22) 99 09 81</a> and <a href="tel:+37367575390" class="cont_number">+373 (67) 57 53 90</a></p>
			</li>
		</ul>
		<div class="difiz_label">
			<a href="http://difiz.com"><img src="<?php echo get_template_directory_uri(); ?>/images/difiz_logo.png" alt=""></a><br><span>Design by difiz.com</span>
		</div>
	</div>
</footer>
</div>


<div id="overlay" class="-hide"></div>
<div class="popup -hide" id="order">
	<a href="#" class="close"></a>
	<h3 class="popup__header">Comandă acum</h3>
	<p class="popup__text">Lăsați nr. de telefon și revenim cu un sunet timp de 10 minute</p>
	<form class="popup__form" action="" method="post">
		<div class="field">
			<label class="popup_label" for="username">Nume</label>
			<input class="popup_input" type="text" name="username" id="username" placeholder="Alexandr">
		</div>
		<div class="field">
			<label class="popup_label" for="userphone">Telefon</label>
			<input class="popup_input" type="tel" name="userphone" id="userphone" placeholder="069577453">
			<div class="tooltip"><span>Pentru ca să revenim la dumneavoastră cu un apel telefonic, este nevoie să indicați numărul de telefon</span></div>
		</div>

		<div class="field selectType" id="nisip">
			<label class="popup_label" for="system_type">Sistema</label>
			<select class="popup_select" name="system_type" id="system_type">
					<option value="id1" class="nisip">Nisip: Econom €1025</option>
					<option value="id2" class="nisip">Nisip: Medium €1225</option>
					<option value="id3" class="nisip">Nisip: Premium €1395</option>
					<option value="id4" class="nisip">Nisip: Full €1525</option>
					<option value="id5" class="argila">Argila: Econom €1185</option>
					<option value="id6" class="argila">Argila: Medium €1440</option>
					<option value="id7" class="argila">Argila: Premium €1700</option>
					<option value="id8" class="argila">Argila: Full €1850</option>
			</select>
		</div>
		<input class="popup-submit" type="submit" name="" value="PLASATI COMANDA">
	</form>

	<div class="success -hide">
		<h2>Vă mulţumesc pentru scrisoarea dumneavoastră. Revenim cu un sunet timp de 10 minute.</h2>
	</div>
	<span class="calltoapel">sau sunaţi-ne</span>
	<p class="popup__number">+373 (67) 57 53 90</p>
	<p class="popup__work_time">Zile de lucru Luni - Simbata. de la 9:00 pana la 20:00</p>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
