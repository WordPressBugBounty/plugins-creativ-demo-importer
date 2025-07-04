<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$starter_sites = array(
    'business-pro' => array(
        'title'          => __( 'Business Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'fse', 'business' ),
        'categories'     => array( 'business' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-business/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-business/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-business/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/creativ-fse-pro-business.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/creativ-fse-pro-business/',
        'pro_url'        => 'https://www.creativthemes.com/creativ-fse-pro/',
    ),
    'education-pro' => array(
        'title'          => __( 'Education Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'fse', 'education' ),
        'categories'     => array( 'education' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-education/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-education/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/creativ-fse-pro-education/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/creativ-fse-pro-education.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/creativ-fse-pro-education/',
        'pro_url'        => 'https://www.creativthemes.com/creativ-fse-pro/',
    ),
);