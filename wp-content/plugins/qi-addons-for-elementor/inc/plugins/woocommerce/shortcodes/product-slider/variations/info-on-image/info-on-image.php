<?php

if ( ! function_exists( 'qi_addons_for_elementor_add_product_slider_variation_info_on_image' ) ) {
	/**
	 * Function that add variation layout for this module
	 *
	 * @param array $variations
	 *
	 * @return array
	 */
	function qi_addons_for_elementor_add_product_slider_variation_info_on_image( $variations ) {
		$variations['info-on-image'] = esc_html__( 'Info On Image', 'qi-addons-for-elementor' );

		return $variations;
	}

	add_filter( 'qi_addons_for_elementor_filter_product_slider_layouts', 'qi_addons_for_elementor_add_product_slider_variation_info_on_image' );
}

if ( ! function_exists( 'qi_addons_for_elementor_add_product_slider_options_info_on_image' ) ) {
	/**
	 * Function that add additional options for variation layout
	 *
	 * @param array $options
	 *
	 * @return array
	 */
	function qi_addons_for_elementor_add_product_slider_options_info_on_image( $options ) {
		$info_on_image_options = array();

		$image_hover_background_color = array(
			'field_type' => 'color',
			'name'       => 'info_on_image_image_hover_background_color',
			'title'      => esc_html__( 'Image Hover Background Color', 'qi-addons-for-elementor' ),
			'group'      => esc_html__( 'Style', 'qi-addons-for-elementor' ),
			'selectors'  => array(
				'{{WRAPPER}} .qodef-item-layout--info-on-image .qodef-e-product-image-inner' => 'background-color: {{VALUE}};',
			),
			'dependency' => array(
				'show' => array(
					'layout' => array(
						'values'        => 'info-on-image',
						'default_value' => '',
					),
				),
			),
		);

		$category_margin_top = array(
			'field_type' => 'slider',
			'name'       => 'info_on_image_category_margin_top',
			'title'      => esc_html__( 'Category Margin Top', 'qi-addons-for-elementor' ),
			'group'      => esc_html__( 'Spacing Style', 'qi-addons-for-elementor' ),
			'size_units' => array( 'px', '%', 'em' ),
			'responsive' => true,
			'selectors'  => array(
				'{{WRAPPER}} .qodef-item-layout--info-on-image .qodef-e-product-categories' => 'margin-top: {{SIZE}}{{UNIT}};',
			),
			'dependency' => array(
				'show' => array(
					'layout' => array(
						'values'        => 'info-on-image',
						'default_value' => '',
					),
				),
			),
		);

		$rating_margin_top = array(
			'field_type' => 'slider',
			'name'       => 'info_on_image_rating_margin_top',
			'title'      => esc_html__( 'Rating Margin Top', 'qi-addons-for-elementor' ),
			'group'      => esc_html__( 'Spacing Style', 'qi-addons-for-elementor' ),
			'size_units' => array( 'px', '%', 'em' ),
			'responsive' => true,
			'selectors'  => array(
				'{{WRAPPER}} .qodef-item-layout--info-on-image .qodef-e-ratings' => 'margin-top: {{SIZE}}{{UNIT}};',
			),
			'dependency' => array(
				'show' => array(
					'layout' => array(
						'values'        => 'info-on-image',
						'default_value' => '',
					),
				),
			),
		);

		$info_on_image_options[] = $image_hover_background_color;
		$info_on_image_options[] = $category_margin_top;
		$info_on_image_options[] = $rating_margin_top;

		return array_merge( $options, $info_on_image_options );
	}

	add_filter( 'qi_addons_for_elementor_filter_product_slider_extra_options', 'qi_addons_for_elementor_add_product_slider_options_info_on_image' );
}
