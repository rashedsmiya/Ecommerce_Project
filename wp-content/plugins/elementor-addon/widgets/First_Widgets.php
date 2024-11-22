<?php

class First_Widgets extends \Elementor\Widget_Base {

	public function get_name() { 
		return 'elementor_addons_first_widgets';
	}

	public function get_title() {
		return esc_html__( 'First Widget', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>
		<p> Hello World </p>
		<?php
	}

	protected function content_template() {
		?>
		<p> Hello World </p>
		<?php
	}
}




