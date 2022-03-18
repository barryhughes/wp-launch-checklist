<?php

namespace Kanopi\Kanopi_Launch_Checklist;

/**
 * Fired during plugin uninstall (deactivation & deletion).
 *
 * This class defines all code necessary to run during the plugin's uninstall.
 *
 * @since      1.0.0
 * @package    Kanopi_Launch_Checklist
 * @subpackage Kanopi_Launch_Checklist/includes
 * @author     Kanopi Studios <support@kanopistudios.com>
 */
class Uninstaller {

	/**
	 * Handle removal of plugin settings.
	 */
	public function uninstall() {
		$settings = get_option( KANOPI_LAUNCH_CHECKLIST_SLUG . '_settings' );
		if ( isset( $settings['delete_checklist_settings'] ) && 1 === (int) $settings['delete_checklist_settings'] ) {
			delete_option( KANOPI_LAUNCH_CHECKLIST_SLUG . '_values' );
			delete_option( KANOPI_LAUNCH_CHECKLIST_SLUG . '_settings' );
		}
	}

}
