<?php

class Elementor_Addons_Heading extends \Elementor\Widget_Base {

	public function get_name() {
		return 'elementor_addons_heading';
	}

	public function get_title() {
		return esc_html__( 'Heading (Jewal)', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-heading';
	}

	public function get_categories() {
		return [ 'jewel-khan','akrame' ];
	}

	public function get_keywords() {
		return [ 'text', 'content' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title Section', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),   
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
				'separator' => 'before'
			]
		);

		$this->add_control(
			'title_link',
			[
				'label' => esc_html__( 'Title Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Title Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .title' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
                group_name:\Elementor\Group_Control_Typography::get_type(),
                args:[
                        'name' => 'content_typegraphy',
                        'selector' =>'{{WRAPPER}}.title a',
            ]
        );

		$this->start_controls_tabs(
			'style_title_tabs'
		);

		
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'textdomain' ),
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'style_normal_tab_2',
			[ 
				'label' => esc_html__( 'Hover', 'textdomain' ),
			]
		);

        $this->add_control(
            'hover_text_color',
            [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a'  => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'normal_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'normal_border_color',
            [
                'label' => esc_html__( 'Border Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            group_name:\Elementor\Group_Control_Typography::get_type(),
            args:[
                'name' => 'normal_box_shadow',
                'selector' =>'{{WRAPPER}}.title a',
            ]
        );

		$this->end_controls_tab();
		
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
		
		$settings = $this->get_settings_for_display();
		?>
		<style>

			h1 a{
				color: red;
				background-color: green;
			}

		</style>

			<h1>
				<a href="#">
					This is a Heading
				</a>
			</h1>

			<h1>
				<a href="<?php echo $settings['title_link']['url'] ?>">
					<?php echo $settings['title']?>
				</a>
			</h1>  
		<?php 
	}

}

