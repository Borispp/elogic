<?php
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;

	$childcats = get_categories('child_of=2&hide_empty=1');

	// foreach ($childcats as $key => $value) {
	// 	echo $value->cat_name."<br/>";
	// }
	$catalog_wp_link = get_category_link(2);
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<ul id="inner-sidebar-menu">
	<li <?php if ($category_id == 3) echo 'class="inner-sidebar-menu-active"';?> id="inner-sidebar-menu-urology">
		<h2><a href="<?php echo get_category_link($childcats[2]->term_id ); ?>"><?php echo $childcats[2]->cat_name; ?></a></h2>
		<p><?php echo $childcats[2]->category_description; ?></p>
	</li>
	<li <?php if ($category_id == 4) echo 'class="inner-sidebar-menu-active"';?> id="inner-sidebar-menu-gynaecology">
		<h2><a href="<?php echo get_category_link($childcats[0]->term_id ); ?>"><?php echo $childcats[0]->cat_name; ?></a></h2>
		<p><?php echo $childcats[0]->category_description; ?></p>
	</li>
	<li <?php if ($category_id == 5) echo 'class="inner-sidebar-menu-active"';?> id="inner-sidebar-menu-uruflometr">
		<h2><a href="<?php echo get_category_link($childcats[3]->term_id ); ?>"><?php echo $childcats[3]->cat_name; ?></a></h2>
		<p><?php echo $childcats[3]->category_description; ?></p>
	</li>
	<li <?php if ($category_id == 6 && $catalog_wp_link != $actual_link) echo 'class="inner-sidebar-menu-active"';?> id="inner-sidebar-menu-material">
		<h2><a href="<?php echo get_category_link($childcats[1]->term_id ); ?>"><?php echo $childcats[1]->cat_name; ?></a></h2>
		<p><?php echo $childcats[1]->category_description; ?></p>
	</li>
</ul>
<div id="inner-sidebar-note">
	<span>Примечание:</span>
	<p>В стоимость аппаратов входит обучение у разработчика аппаратов и автора методик лечения, подробные методические материалы по применению аппаратов в медицинской практике, а также "обучающий" DVD-диск.</p>
</div>