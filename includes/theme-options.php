<?php
require_once get_template_directory() . '/includes/options-config.php';

	if( ! class_exists('Nuptial_Customizer_API_Wrapper') ) {
			require_once get_template_directory() . '/admin/class.nuptial-customizer-api-wrapper.php';
	}


Nuptial_Customizer_API_Wrapper::getInstance($options);
