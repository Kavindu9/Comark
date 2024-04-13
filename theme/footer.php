<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comark-mv
 */

?>

	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>


<script>

const button = document.querySelector('#menu-button');
const menu = document.querySelector('#navbar-solid-bg');


button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});

// Close mobile menu
function closeMobileMenu() {
    menu.classList.add("hidden");
}



var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});

</script>




</body>
</html>
