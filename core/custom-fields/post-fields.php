<?php

$course_cpt = new StoutLogic\AcfBuilder\FieldsBuilder('Course Settings');
$course_cpt
    ->addText('time')
    ->addTaxonomy('course_type_tax', [
        'label' => 'Select Course Type',
        'instructions' => "You can select this course's type.",
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'taxonomy' => 'course_type',
        'field_type' => 'select',
        'allow_null' => 0,
        'add_term' => 1,
        'save_terms' => 0,
        'load_terms' => 0,
        'return_format' => 'object',
        'multiple' => 0,
        ])
    ->addTaxonomy('campuses_tax', [
        'label' => 'Select Campuses',
        'instructions' => 'You can select campuses which this course is available.',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'taxonomy' => 'campus',
        'field_type' => 'checkbox',
        'allow_null' => 0,
        'add_term' => 1,
        'save_terms' => 0,
        'load_terms' => 0,
        'return_format' => 'object',
        'multiple' => 0,
        ])
    ->setLocation('post_type', '==', 'course');

add_action('acf/init', function() use ($course_cpt) {
   acf_add_local_field_group($course_cpt->build());
});

?>
