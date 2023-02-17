<div class="advantages" style="background-image: url(<?= CFS()->get('bg_1'); ?>)">
		<div class="container">
			<h2><?= get_category( 5, ARRAY_A )['name'] ?></h2>
		</div>
	</div>
	<div class="advantages-cards" style="background-image: url(<?= CFS()->get('bg_2'); ?>)">
		<div class="container">
			<div class="row advantages-cards-inner">

        <?php
          $posts = get_posts([
            'numberposts' => -1, // у нас не будет ограничений по кол-ву выводимых записей (если указать 3, их будет 3)
            'category_name' => 'advantages',  // здесь надо указать слаг нашей рубрики (ярлык который указ-м при создании рубрики)
            'orderby' => 'title',  // как мы хотим отсортировать наши карточки (указали по заголовку)
            'order' => 'ASC', // в каком направлении - по возрастанию или по убыванию ('ASK' (от меньш к больш) или 'DESC')
            'post_type' => 'post', // то есть записи
            'suppress_filters' => true, // отключает работу некоторых фильтров (хуков)
          ]);
          foreach($posts as $post){
            setup_postdata( $post );
            ?>

            <div class="col-4 col-lg-6 col-sm-12 advantages-card">
              <?php the_post_thumbnail( 'adv_thumbnail'); ?>
					    <h3><?php the_title(); ?></h3>
					    <?php the_content(); ?>
				    </div>

            <?php
          }
          wp_reset_postdata(); // чтобы сбросить какие-то данные
        ?>

			</div>
		</div>
	</div>