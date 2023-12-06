<?php

	show_admin_bar(true);

	require_once("lib/navigation.php");
	require_once("lib/enqueue-assets.php");
	require_once("lib/sidebars.php");
	require_once("lib/customize.php");


	function add_custom_dashboard_widget() {
		wp_add_dashboard_widget('ica_custom_dashboard_widget', 'Custom Dashboard Widget', 'custom_dashboard_widget');
	}

?>