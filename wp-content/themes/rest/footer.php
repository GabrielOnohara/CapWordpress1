<footer>
			<nav class="nav-footer">
			<ul>
			<?php
			$args = array(
				'menu' => 'principal',
				'container' => false,
			);
			wp_nav_menu($args);
			?>
			</ul>
			</nav>

			<p>Rest © <?php echo date("Y");?>. Alguns direitos reservados.</p>
            
		</footer>
        <!-- Footer Wordpress -->
        <?php wp_footer();?>
	</body>
</html>