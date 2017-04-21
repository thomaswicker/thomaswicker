		</footer>

		<?php wp_footer(); ?>

		<!-- Magical Spells -->
		<script>
			//Initializing Foundation
			$(document).foundation();

			$(window).load(function() {
				$('.masonry-container').masonry({
					itemSelector: '.portfolio-item'
				});

				$('.masonry-container-photo').masonry({
					itemSelector: '.photo'
				});
			});

			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
	</body>
</html>
