<?php
/**
 * Define schema of call-comment
 *
 * @author You <you@mail>
 * @since 0.1.0
 * @version 0.1.0
 * @copyright 2017+
 * @package call_manager
 */

namespace call_manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Handle call-model.
	 */
class My_Category_Model extends \eoxia\Term_Model  {
	/**
	 * J appel le constructeur parent .
	 */
	public function __construct( $object, $req_method = null ) {
		parent::__construct( $object, $req_method );
	}
}