<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$starter_sites = array(
    'marketing' => array(
        'title'          => __( 'Marketing', 'creativ-demo-importer' ), 
        'is_pro'         => false,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'marketing' ),
        'categories'     => array( 'marketing' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-marketing.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-marketing/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'marketing-pro' => array(
        'title'          => __( 'Marketing Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'marketing' ),
        'categories'     => array( 'marketing' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-marketing-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-marketing-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-marketing-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'portfolio-pro' => array(
        'title'          => __( 'Portfolio Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'portfolio' ),
        'categories'     => array( 'portfolio' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-portfolio-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-portfolio-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-portfolio-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-portfolio-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-portfolio-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'charity-pro' => array(
        'title'          => __( 'Charity Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'charity' ),
        'categories'     => array( 'charity' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-charity-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-charity-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-charity-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-charity-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-charity-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'medical-pro' => array(
        'title'          => __( 'Medical Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'medical' ),
        'categories'     => array( 'medical' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-medical-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-medical-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-medical-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-medical-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-medical-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'music-pro' => array(
        'title'          => __( 'Music Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'music' ),
        'categories'     => array( 'music' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-music-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-music-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-music-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-music-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-music-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
            array(
                'name' => __( 'Music Player for Elementor', 'creativ-demo-importer' ),
                'slug' => 'music-player-for-elementor',
            ),
        ),
    ),
    'kindergarten-pro' => array(
        'title'          => __( 'Kindergarten Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'kindergarten' ),
        'categories'     => array( 'kindergarten' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-kindergarten-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-kindergarten-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-kindergarten-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-kindergarten-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-kindergarten-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'restaurant-pro' => array(
        'title'          => __( 'Restaurant Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'restaurant' ),
        'categories'     => array( 'restaurant' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-restaurant-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-restaurant-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-restaurant-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-restaurant-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-restaurant-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'travel-pro' => array(
        'title'          => __( 'Travel Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'travel' ),
        'categories'     => array( 'travel' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-travel-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-travel-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-travel-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-travel-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-travel-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'construction-pro' => array(
        'title'          => __( 'Construction Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'construction' ),
        'categories'     => array( 'construction' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-construction-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-construction-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-construction-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-construction-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-construction-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'education-pro' => array(
        'title'          => __( 'Education Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'education' ),
        'categories'     => array( 'education' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-education-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-education-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-education-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-education-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-education-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'finance-pro' => array(
        'title'          => __( 'Finance Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'finance' ),
        'categories'     => array( 'business' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-finance-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-finance-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-finance-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-finance-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-finance-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'business-pro' => array(
        'title'          => __( 'Business Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'business' ),
        'categories'     => array( 'business' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-business-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-business-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-business-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-business-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-business-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'agency-pro' => array(
        'title'          => __( 'Agency Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'agency' ),
        'categories'     => array( 'business' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-agency-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-agency-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-agency-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-agency-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-agency-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
    'corporate-pro' => array(
        'title'          => __( 'Corporate Pro', 'creativ-demo-importer' ), 
        'is_pro'         => true,
        'type'           => 'elementor',
        'author'         => __( 'Creativ Themes', 'creativ-demo-importer' ),
        'keywords'       => array( 'mavix', 'corporate' ),
        'categories'     => array( 'business' ),
        'template_url'   => array(
            'content' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-corporate-pro/content.json',
            'options' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-corporate-pro/options.json',
            'widgets' => CREATIV_DEMO_IMPORTER_URL. 'includes/starter-sites/json/mavix-corporate-pro/widgets.json',
        ),
        'screenshot_url' => CREATIV_DEMO_IMPORTER_URL.'assets/img/mavix-corporate-pro.jpg',
        'demo_url'       => 'https://creativthemes.com/theme-demo/mavix-corporate-pro/',
        'pro_url'        => 'https://www.creativthemes.com/mavix-pro/',
        'plugins'        => array(
            array(
                'name' => __( 'Kirki', 'creativ-demo-importer' ),
                'slug' => 'kirki',
            ),
            array(
                'name' => __( 'Elementor', 'creativ-demo-importer' ),
                'slug' => 'elementor',
            ),
            array(
                'name' => __( 'ElementsKit Lite', 'creativ-demo-importer' ),
                'slug' => 'elementskit-lite',
            ),
        ),
    ),
);