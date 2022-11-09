<?php

$hero = new StoutLogic\AcfBuilder\FieldsBuilder('hero');
$hero
    ->addText('title')
    ->addWysiwyg('content')
    ->addText('subtitle')
    ->addImage('background_image')
    ->setLocation('block', '==', 'acf/hero');

add_action('acf/init', function() use ($hero) {
   acf_add_local_field_group($hero->build());
});

?>
