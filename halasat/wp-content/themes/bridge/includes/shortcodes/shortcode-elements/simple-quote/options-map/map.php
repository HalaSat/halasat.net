<?php

if(!function_exists('qode_simple_quote_map')) {
    function qode_simple_quote_map() {

		$panel = qode_add_admin_panel(array(
            'title' => esc_html__('Simple Quote', 'qode'),
            'name'  => 'panel_simple_quote',
            'page'  => 'elementsPage'
        ));


        $text_group = qode_add_admin_group(array(
            'name'			=> 'text_group',
            'title'			=> esc_html__('Simple Quote Text', 'qode'),
            'description'	=> esc_html__('Setup font options for simple quote text', 'qode'),
            'parent'		=> $panel
        ));

        $text_row = qode_add_admin_row(array(
            'name' => 'text_row',
            'next' => true,
            'parent' => $text_group
        ));

		qode_add_admin_field(array(
			'parent'        => $text_row,
			'type'          => 'fontsimple',
			'name'          => 'sq_text_font_family',
			'default_value' => '',
			'label'         => esc_html__('Font Family', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row,
			'type'          => 'textsimple',
			'name'          => 'sq_text_font_size',
			'default_value' => '',
			'label'         => esc_html__('Font Size', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_text_font_weight',
			'default_value' => '',
			'options'		=> qode_get_font_weight_array(),
			'label'         => esc_html__('Font Weight', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row,
			'type'          => 'textsimple',
			'name'          => 'sq_text_line_height',
			'default_value' => '',
			'label'         => esc_html__('Line Height', 'qode')
		));
		

		$text_row2 = qode_add_admin_row(array(
			'name' => 'text_row2',
			'next' => true,
			'parent' => $text_group
		));

		qode_add_admin_field(array(
			'parent'        => $text_row2,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_text_font_style',
			'options'		=> qode_get_font_style_array(),
			'default_value' => '',
			'label'         => esc_html__('Font Style', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row2,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_text_text_transform',
			'options'		=> qode_get_text_transform_array(),
			'default_value' => '',
			'label'         => esc_html__('Text Transform', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row2,
			'type'          => 'textsimple',
			'name'          => 'sq_text_letter_spacing',
			'default_value' => '',
			'label'         => esc_html__('Letter Spacing', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $text_row2,
			'type'          => 'colorsimple',
			'name'          => 'sq_text_color',
			'default_value' => '',
			'label'         => esc_html__('Color', 'qode')
		));



		$author_group = qode_add_admin_group(array(
            'name'			=> 'author_group',
            'title'			=> esc_html__('Simple Quote Author', 'qode'),
            'description'	=> esc_html__('Setup font options for simple quote author', 'qode'),
            'parent'		=> $panel
        ));

        $author_row = qode_add_admin_row(array(
            'name' => 'author_row',
            'next' => true,
            'parent' => $author_group
        ));

		qode_add_admin_field(array(
			'parent'        => $author_row,
			'type'          => 'fontsimple',
			'name'          => 'sq_author_font_family',
			'default_value' => '',
			'label'         => esc_html__('Font Family', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row,
			'type'          => 'textsimple',
			'name'          => 'sq_author_font_size',
			'default_value' => '',
			'label'         => esc_html__('Font Size', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_author_font_weight',
			'default_value' => '',
			'options'		=> qode_get_font_weight_array(),
			'label'         => esc_html__('Font Weight', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row,
			'type'          => 'textsimple',
			'name'          => 'sq_author_line_height',
			'default_value' => '',
			'label'         => esc_html__('Line Height', 'qode')
		));
		

		$author_row2 = qode_add_admin_row(array(
			'name' => 'author_row2',
			'next' => true,
			'parent' => $author_group
		));

		qode_add_admin_field(array(
			'parent'        => $author_row2,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_author_font_style',
			'options'		=> qode_get_font_style_array(),
			'default_value' => '',
			'label'         => esc_html__('Font Style', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row2,
			'type'          => 'selectblanksimple',
			'name'          => 'sq_author_text_transform',
			'options'		=> qode_get_text_transform_array(),
			'default_value' => '',
			'label'         => esc_html__('Text Transform', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row2,
			'type'          => 'textsimple',
			'name'          => 'sq_author_letter_spacing',
			'default_value' => '',
			'label'         => esc_html__('Letter Spacing', 'qode')
		));
		qode_add_admin_field(array(
			'parent'        => $author_row2,
			'type'          => 'colorsimple',
			'name'          => 'sq_author_color',
			'default_value' => '',
			'label'         => esc_html__('Color', 'qode')
		));
	}

    add_action('qode_options_elements_page_map', 'qode_simple_quote_map');
}