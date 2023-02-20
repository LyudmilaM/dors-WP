<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
          <?php
            wp_nav_menu( [
              'theme_location' => 'bottom',
              'container' => '',
              'items_wrap' => '%3$s' // отображение элемента меню без обертки (ul)
            ] );
          ?>

          <span class="accent-color">&copy; </span> <?= bloginfo( 'name' ) ?>, 2020-<?= date('Y'); ?>

				</div>
			</div>
		</div>
	</div>
  <?php wp_footer(); ?>
</body>

</html>