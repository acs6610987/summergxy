<?php
/**
 * Controller Factory Class
 * @author Flipper Code <hello@flippercode.com>
 * @package Posts
 */

if ( ! class_exists( 'FactoryControllerWOP' ) ) {

	/**
	 * Controller Factory Class
	 * @author Flipper Code <hello@flippercode.com>
	 * @package 2.0.0
	 * @package Posts
	 */
	class FactoryControllerWOP extends AbstractFactoryFlipperCode {
		/**
		 * FactoryController constructer.
		 */
		public function __construct() {
		}
		/**
		 * Create controller object by passing object type.
		 * @param  string $objectType Object Type.
		 * @return object         Return class object.
		 */
		public function create_object($objectType) {

			switch ( $objectType ) {

				default : if ( file_exists( WOP_CORE_CONTROLLER_CLASS ) ) {
						  require_once( WOP_CORE_CONTROLLER_CLASS ); }
				if ( class_exists( 'wop_Core_Controller' ) ) {
					return new wop_Core_Controller( $objectType ); }
						  break;

			}

		}

	}
}
