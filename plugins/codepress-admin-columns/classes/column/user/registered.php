<?php

/**
 * CPAC_Column_User_Registered
 *
 * @since 2.0.0
 */
class CPAC_Column_User_Registered extends CPAC_Column {

	function __construct( $storage_model ) {

		// define properties
		$this->properties['type']	 = 'column-user_registered';
		$this->properties['label']	 = __( 'Registered', 'cpac' );

		$this->options['date_format'] = '';

		parent::__construct( $storage_model );
	}

	/**
	 * @see CPAC_Column::get_value()
	 * @since 2.0.0
	 */
	function get_value( $user_id ) {

		$userdata = get_userdata( $user_id );

		return $this->get_date( $userdata->user_registered, $this->options->date_format );
	}

	/**
	 * @see CPAC_Column::display_settings()
	 * @since 2.0.0
	 */
	function display_settings() {

		$this->display_field_date_format();
	}
}