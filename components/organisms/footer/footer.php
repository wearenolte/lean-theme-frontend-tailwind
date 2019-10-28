<?php

$copyright = $args['copyright'] ?? '';

$copyright = str_replace( '%YEAR%', date( 'Y' ), $copyright );
?>

<footer
	class="o__footer text-center mt-5"
	itemscope
	itemtype="http://schema.org/WPFooter">

	<div class="container">
		<p class="o__footer__copyright"><?php echo esc_html( $copyright ); ?></p>
	</div>

</footer>
