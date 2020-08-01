<?php
/**
 * Template Name: Sidebar and widgets
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php if( is_active_sidebar('sidebar-1')): ?>
	<aside id="secondary" class="sidebar weight-area" role="complementry">
		<?php dynamic_sidebar('sidebar-1');?>
	</aside>
<?php endif; ?>