<?php

/*
Template Name: Главная
*/

get_header();

?>
	<!-- Шапка -->
	<div class="header" style="background-image: url(<?= CFS()->get('top_backgroud'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-12">
					<div class="header-inner">
						<div class="header-catalog">
							<h2><?= CFS()->get('catalog_title'); ?></h2>
							<div class="doors">
                <?php
                  $loop = CFS()->get('catalog_loop');
                  foreach ($loop as $row){
                    ?>
                    <div class="door">
									    <div class="name" style="background-image: url(<?= $row['catalog_img']; ?>)"><?= $row['catalog_text']; ?></div>
								    </div>
                    <?php
                  }
                ?>
							</div>
							<a class="btn" href="/category/<?= CFS()->get('catalog_btn_link'); ?>"><?= CFS()->get('catalog_btn_text'); ?></a>
						</div>
						<div class="header-order">
							<h2><?= CFS()->get('order_title'); ?></h2>
							<div class="doors">
                <?php
                  $loop = CFS()->get('order_loop');
                  foreach ($loop as $row){
                    ?>
                    <div class="door">
									    <div class="name" style="background-image: url(<?= $row['order_img']; ?>)"><?= $row['order_text']; ?></div>
								    </div>
                    <?php
                  }
                ?>
							</div>
							<a class="btn" href="/<?= CFS()->get('order_btn_link'); ?>"><?= CFS()->get('order_btn_text'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Преимущества  -->
	<?php get_template_part('templates/template-parts/advantages') ?>
	<!-- О нас -->
	<div class="about" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
		<div class="container">
			<div class="row about-inner">
				<div class="col-6 col-lg-12">
					<h2><?= CFS()->get('about_title'); ?></h2>
					<p><?= CFS()->get('about_text'); ?></p>
				</div>
				<div class="col-6 col-lg-12 text-center">
					<a href="/category/<?= CFS()->get('catalog_btn_link'); ?>" class="btn"><?= CFS()->get('about_btn_text'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Популярные товары -->
	<div class="popular" style="background-image: url(img/background.jpg)">
		<div class="container">
			<div class="row popular-title">
				<h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
			</div>
			<div class="row popular-goods">
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<img src="img/сatalog/door_anglia.png" alt="Название">
					<h3>Название</h3>
					<div>45000 &#8381;</div>
					<a href="door.html" class="btn">Подробнее</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="catalog.html" class="btn">Перейти в каталог</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Форма обратной связи -->
	<div class="contacts" style="background-image: url(img/bg-contacts.png)">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-12 contacts-item">
					<h3>Закажите звонок специалиста</h3>
					<p>Вы можете заказать звонок нашего специалиста в удобное для Вас время.</p>
					<form action="">
						<input type="text" placeholder="Имя">
						<input type="text" placeholder="Телефон">
						<input type="text" placeholder="Когда позвонить?">
						<button class="btn">Заказать звонок</button>
					</form>
				</div>
				<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
					<img src="img/icons/tag.png" alt="Подробно">
					<h3>Подробно</h3>
					<p>Наши специалисты помогут Вам в выборе нужной двери.</p>
				</div>
				<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
					<img src="img/icons/clock.png" alt="Быстро">
					<h3>Быстро</h3>
					<p>Мы стараемся максимально быстро ответить на Ваш запрос.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Футер -->
  <?php get_footer(); ?>