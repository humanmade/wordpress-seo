<?php

/**
 * This define should not exist on production.
 * Because it has to be `install --dev` in composer it is only available in non-production environments.
 * 
 * Allow for overriding any other file loaded before this one.
 */
if ( ! defined( 'YOAST_ENVIRONMENT' ) ) {
	define( 'YOAST_ENVIRONMENT', 'development' );
}
