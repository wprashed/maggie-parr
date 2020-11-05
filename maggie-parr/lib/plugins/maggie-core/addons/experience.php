<?php

class maggie_Experience extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'maggie-experience';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Home Project Block', 'maggie-core' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-briefcase';
	}

	//	Widget Categories

	public function get_categories() {
		return [ 'maggie_addons' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_content_controls();
		$this->register_style_controls();
	}

	// Widget Controls 

	function register_content_controls() {

		// Controls

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content Controls', 'maggie-core' ),
			]
		);

		// Title Normal

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Title', 'maggie-core' ),
				'default'     => __( 'Signature Pieces for Individuals and Companies', 'maggie-core' ),
			]
		);

		// Subtitle

		$this->add_control(
			'subtitle',
			[
				'label'     => __( 'Subtitle', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Subtitle', 'maggie-core' ),
				'default'     => __( 'Do you want a signature artwork for your home or office? Do you want to create an amazing visual presentation to secure funding or sell a project? Wouldnt it be great to work with an accomplished artist who will help you develop your vision? Then click on Individuals or Companies to find out how! ', 'maggie-core' ),
			]
		);

		$this->end_controls_section();

		// Pricing Tabel

		$this->start_controls_section(
			'experiences_control',
			[
				'label' => __( 'Service Type', 'maggie-core' ),
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'field_name',
			[
				'label'     => __( 'Service Name', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Name', 'maggie-core' ),
				'default'     => __( 'For Individuals', 'maggie-core' ),
			]
		);

		$repeater->add_control(
			'client_name',
			[
				'label'     => __( 'Service Link', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Link', 'maggie-core' ),
				'default'     => __( '#', 'maggie-core' ),
			]
		);

		$repeater->add_control(
			'client_image',
			[
				'label' => __( 'Service Image', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Services', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'projects_control',
			[
				'label' => __( 'Projects Slider', 'maggie-core' ),
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'project_name',
			[
				'label'     => __( 'Project Name', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Name', 'maggie-core' ),
				'default'     => __( 'Birds', 'maggie-core' ),
			]
		);

		$repeater->add_control(
			'project_type',
			[
				'label'     => __( 'Project Type', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Name', 'maggie-core' ),
				'default'     => __( 'Personal', 'maggie-core' ),
			]
		);

		$repeater->add_control(
			'project_link',
			[
				'label'     => __( 'Project Link', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Link', 'maggie-core' ),
				'default'     => __( '#', 'maggie-core' ),
			]
		);

		$repeater->add_control(
			'project_image',
			[
				'label' => __( 'Project Image', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'projects',
			[
				'label' => __( 'Projects', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();

	}

	// Style Control

	protected function register_style_controls() {

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style Controls', 'maggie-core' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'maggie-core' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .maggie_experience',
			]
		);

		// Padding

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .maggie_experience' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Margin

		$this->add_control(
			'margin',
			[
				'label' => __( 'Margin', 'maggie-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .maggie_experience' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Title

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'maggie-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#011a3e',
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'maggie-core' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Subtitle

		$this->add_control(
			'subtitle_color',
			[
				'label'     => __( 'Subtitle Color', 'maggie-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#7a808d',
				'selectors' => [
					'{{WRAPPER}} .subtitle' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'subtitle_typography',
				'label'    => __( 'Subtitle Typography', 'maggie-core' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .subtitle',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'testimonial_style_section',
			[
				'label' => __( 'Textimonial Style Controls', 'maggie-core' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Name

		$this->add_control(
			'client_price_color',
			[
				'label'     => __( 'Field Name Color', 'maggie-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#011a3e',
				'selectors' => [
					'{{WRAPPER}} .field' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'client_price_typography',
				'label'    => __( 'Field Name Typography', 'maggie-core' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .field',
			]
		);

		// Feature

		$this->add_control(
			'client_features_color',
			[
				'label'     => __( 'Client Name Color', 'maggie-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#7a808d',
				'selectors' => [
					'{{WRAPPER}} .client' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'client_features_typography',
				'label'    => __( 'Client Name Typography', 'maggie-core' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .client',
			]
		);

		// Designation

		$this->add_control(
			'client_duration_color',
			[
				'label'     => __( 'Duration Color', 'maggie-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#feb000',
				'selectors' => [
					'{{WRAPPER}} .duration' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'client_duration_typography',
				'label'    => __( 'Duration Typography', 'maggie-core' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .duration',
			]
		);


		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();

		?>
		<!-- ============================================================= SECTION – LATEST WORKS ============================================================= -->
		
		<section id="latest-works" class="light-bg">
				<div class="container inner">
					
					<div class="row">
						<div class="col-lg-8 col-md-9 mx-auto text-center">
							<header>
								<h1><?php echo $settings['title'] ?></h1>
								<p><?php echo $settings['subtitle'] ?></p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
				 
					<div class="row">
						<?php if ( $settings['list'] ) {
							foreach (  $settings['list'] as $item ) {
						?>
						<div class="col-md-6 inner-top-sm">
							<figure>
							
								<div class="icon-overlay icn-link">
									<a href="<?php echo $item['client_name'] ?>"><img src="<?php echo $item['client_image']['url'] ?>" alt=""></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption class="bordered no-top-border">
									<div class="info">
										<h3><a href="<?php echo $item['client_name'] ?>"><?php echo $item['field_name'] ?></a></h3>
									</div><!-- /.info -->
								</figcaption>
								
							</figure>
						</div><!-- /.col -->
						<?php } } ?>
					</div><!-- /.row -->
					
					<div class="row inner-top-sm">
						<div id="owl-latest-works" class="owl-carousel owl-item-gap">
							<?php if ( $settings['projects'] ) {
								foreach (  $settings['projects'] as $project ) {
							?>
							<div class="item">
								<a href="<?php echo $project['project_link'] ?>">
									<figure>
										<figcaption class="text-overlay">
											<div class="info">
												<h4><?php echo $project['project_name'] ?></h4>
												<p><?php echo $project['project_type'] ?></p>
											</div><!-- /.info -->
										</figcaption>
										<img src="<?php echo $project['project_image']['url'] ?>" alt="">
									</figure>
								</a>
							</div><!-- /.item -->
							<?php } } ?>
						</div><!-- /.owl-carousel -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – LATEST WORKS : END ============================================================= -->
		<?php
	}
}