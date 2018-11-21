<?php
/**
 * License Control for the Customizer
 *
 * @package GT Workout
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays a custom License control. Allows to switch fonts for particular elements on the theme.
	 */
	class GT_Workout_Customize_License_Control extends WP_Customize_Control {

		/**
		 * Declare the control type. Critical for JS constructor.
		 *
		 * @var string
		 */
		public $type = 'gt_workout_license_key';

		/**
		 * Localization Strings.
		 *
		 * @var array
		 */
		public $l10n = array();

		/**
		 * License Status.
		 *
		 * @var array
		 */
		public $status = '';

		/**
		 * Setup Font Control
		 *
		 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
		 * @param String               $id      Control ID.
		 * @param array                $args    Arguments to override class property defaults.
		 * @return void
		 */
		public function __construct( $manager, $id, $args = array() ) {

			// Make Buttons translateable.
			$this->l10n = array(
				'activate'     => esc_html__( 'Activate License', 'gt-workout' ),
				'deactivate'   => esc_html__( 'Deactivate License', 'gt-workout' ),
				'loading'      => esc_html__( 'Loading...', 'gt-workout' ),
				'valid'        => esc_html__( 'Active', 'gt-workout' ),
				'invalid'      => esc_html__( 'Invalid', 'gt-workout' ),
				'expired'      => esc_html__( 'Expired', 'gt-workout' ),
				'inactive'     => esc_html__( 'Inactive', 'gt-workout' ),
				'valid_desc'   => esc_html__( 'You are receiving updates.', 'gt-workout' ),
				'invalid_desc' => esc_html__( 'Please make sure you have not reached site limits and/or expiration date.', 'gt-workout' ),
				'expired_desc' => esc_html__( 'Your license has expired, renew today to continue getting updates and support!', 'gt-workout' ),
			);

			// Set License status.
			$this->status = gt_workout_get_option( 'license_status' );

			parent::__construct( $manager, $id, $args );
		}

		/**
		 * Display Control
		 *
		 * @return void
		 */
		public function render_content() {

			$l10n = json_encode( $this->l10n );
			?>

			<div class="customize-license-control" data-l10n="<?php echo esc_attr( $l10n ); ?>" data-status="<?php echo esc_attr( $this->status ); ?>">

				<span class="customize-control-title"><?php echo esc_html__( 'License Status', 'gt-workout' ); ?></span>
				<div class="license-status"></div>
				<div class="license-description description"></div>

				<label class="customize-control-title">
					<?php echo esc_html( $this->label ); ?>
				</label>

				<input id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" type="text" value="<?php echo esc_attr( $this->value() ); ?>">

				<div class="actions"></div>

			</div>

			<?php
		}
	}

endif;
