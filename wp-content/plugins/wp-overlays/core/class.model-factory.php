<?php
/**
 * Model Factory Class
 * @author Flipper Code <hello@flippercode.com>
 * @package Posts
 */

if ( ! class_exists( 'FactoryModelWOP' ) ) {

	/**
	 * Model Factory Class
	 * @author Flipper Code <hello@flippercode.com>
	 * @package 2.0.0
	 * @package Posts
	 */
	class FactoryModelWOP extends AbstractFactoryFlipperCode{
		/**
		 * FactoryModel constructer.
		 */
		public function __construct() {

		}
		/**
		 * Create model object by passing object type.
		 * @param  string $objectType Object Type.
		 * @return object         Return class object.
		 */
		public function create_object($objectType) {
			switch ( $objectType ) {

				default:
					require_once( WOP_MODEL.$objectType.'/model.'.$objectType.'.php' );
					$object = 'wop_Model_'.$objectType;

				return new $object();
				break;
			}

		}

	}
}
