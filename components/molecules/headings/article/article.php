<?php

global $allow_break_tag;

$class      = $args['class'] ?? '';
$post_title = $args['title'] ?? '';

if ( empty( $post_title ) ) {
	return;
}
?>

<div class="m__headings__article <?php echo esc_attr( $class ); ?>">

	<h1 class="h1">
		<?php echo wp_kses( $post_title, $allow_break_tag ); ?>
	</h1>

</div>
