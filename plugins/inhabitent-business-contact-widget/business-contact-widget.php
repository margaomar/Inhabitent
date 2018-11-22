<?php
/**
 * Inhabitent Business Contact Widget
 *
 * The Business Contact Widget for edit business contact on custom made theme.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Inhabitent Business Contact Widget
 * @author    Marga Omar <margaomar@gmail.com>
 * @license   GPL-2.0+
 * @link      http://margaomar.com
 * @copyright 2015 Marga Omar 
 *
 * @wordpress-plugin
 * Plugin Name:       Inhabitent Business Contact Widget
 * Plugin URI:        www.redacademy.com/inhabitent
 * Description:       A Business Contact Widget for edit business Contact on custom made theme
 * Version:           1.0.0
 * Author:            Marga Omar
 * Author URI:        http://margaomar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'Widget_Name' to the name of your plugin
class Business_Inhabitent_Contact_Widget extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'business_contact_widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Business Contact Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Business Contact Widget for edit business contact on custom made theme.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );

		$phone = empty( $instance['phone'] ) ? '' : apply_filters( 'widget_title', $instance['phone'] );
		
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_title', $instance['email'] );
		
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_title', $instance['address'] );

		$facebook = empty( $instance['facebook'] ) ? '' : apply_filters( 'widget_title', $instance['facebook'] );

		$twitter = empty( $instance['twitter'] ) ? '' : apply_filters( 'widget_title', $instance['twitter'] );

		$google = empty( $instance['google'] ) ? '' : apply_filters( 'widget_title', $instance['google'] );

		
		// TODO: other fields go here...

		ob_start(); //

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['phone'] = strip_tags( $new_instance['phone'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['address'] = strip_tags( $new_instance['address'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['google'] = strip_tags( $new_instance['google'] );

		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business Contact',
				'phone' => '',
				'email' => '',
				'address' => '',
				'facebook' => '',
				'twitter' => '',
				'google' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$phone = strip_tags( $instance['phone'] );
		$email = strip_tags( $instance['email'] );
		$address = strip_tags( $instance['address'] );
		$facebook = strip_tags( $instance['facebook'] );
		$twitter = strip_tags( $instance['twitter'] );
		$google = strip_tags( $instance['google'] );
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Business_Inhabitent_Contact_Widget' );
});
