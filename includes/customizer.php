<?php

/*Creating custom option to our Customizer*/
function guide_customize_register( $wp_customize ) {
  
    $wp_customize->add_panel('homepage',array(
            'title' =>__('Homepage' ) ,
            'description' => '', 
            'priority' =>10, 
    ) );
    
    $wp_customize->add_panel('footer',array(
            'title' =>__('Footer' ) ,
            'description' => '', 
            'priority' =>10, 
    ) );
    
     $wp_customize->add_section( 'logo' , array(
            'title'   => 'Logo',
            'panel'   => 'homepage',
        ) );

        $wp_customize->add_section( 'banner' , array(
            'title'   => 'Titles',
            'panel'   => 'homepage',
        ) );

        $wp_customize->add_section( 'mid_banner' , array(
            'title'   => 'Banner titles',
            'panel'   => 'homepage',
        ) );
        $wp_customize->add_section( 'University' , array(
            'title'   => 'University',
            'panel'   => 'homepage',
        ) );

     $wp_customize->add_setting('logo', array(
        

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'    => __('Logo '),
        'section'  => 'logo',
        'settings' => 'logo',
        
    )));



    $wp_customize->add_setting( 'heading', array(
        'default'           => __( 'Discover your advanture with joy you deserve' ),
        'sanitize_callback' => 'esc_attr'
   ) );
   
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
       'heading',
           array(
               'label'    => __( 'Heading Text' ),
               'section'  => 'banner',
               'settings' => 'heading',
               'type'     => 'text'
           )
       )
   );
   
       $wp_customize->add_setting( 'paragraph', array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt' ),
        'sanitize_callback' => 'esc_attr'
   ) );
   
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
       'paragraph',
           array(
               'label'    => __( 'Paragraph' ),
               'section'  => 'banner',
               'settings' => 'paragraph',
               'type'     => 'text'
           )
       )
   );

   
   $wp_customize->add_setting( 'UniversityName1', array(
    'default'           => __( 'Pokhara' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'UniversityName1',
       array(
           'label'    => __( 'UniversityName1' ),
           'section'  => 'University',
           'settings' => 'UniversityName1',
           'type'     => 'text'
       )
   )
);



$wp_customize->add_setting( 'UniversityName2', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'UniversityName2',
       array(
           'label'    => __( 'UniversityName2' ),
           'section'  => 'University',
           'settings' => 'UniversityName2',
           'type'     => 'text'
       )
   )
);



$wp_customize->add_setting( 'UniversityName3', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'UniversityName3',
       array(
           'label'    => __( 'UniversityName3' ),
           'section'  => 'University',
           'settings' => 'UniversityName3',
           'type'     => 'text'
       )
   )
);


$wp_customize->add_setting( 'UniversityName4', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'UniversityName4',
       array(
           'label'    => __( 'UniversityName4' ),
           'section'  => 'University',
           'settings' => 'UniversityName4',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'banner1_title', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'banner1_title',
       array(
           'label'    => __( 'banner1 title' ),
           'section'  => 'mid_banner',
           'settings' => 'banner1_title',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'banner1_text', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'banner1_text',
       array(
           'label'    => __( 'banner1 text' ),
           'section'  => 'mid_banner',
           'settings' => 'banner1_text',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'banner2_title', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'banner2_title',
       array(
           'label'    => __( 'banner2 title' ),
           'section'  => 'mid_banner',
           'settings' => 'banner2_title',
           'type'     => 'text'
       )
   )
);


$wp_customize->add_setting( 'banner2_text', array(
    'default'           => __( 'Tribhuvan' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'banner2_text',
       array(
           'label'    => __( 'banner2 text' ),
           'section'  => 'mid_banner',
           'settings' => 'banner2_text',
           'type'     => 'text'
       )
   )
);

    $wp_customize->add_section( 'homefooter' , array(
            'title'   => 'Footer Links',
            'panel'   => 'footer',
        ) );

    $wp_customize->add_setting( 'link1', array(
         'default'           => __( '' ),
         'sanitize_callback' => 'esc_attr'
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'link1',
            array(
                'label'    => __( 'link1' ),
                'section'  => 'homefooter',
                'settings' => 'link1',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting( 'link2', array(
        'default'           => __( '' ),
        'sanitize_callback' => 'esc_attr'
   ) );
   
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
       'link2',
           array(
               'label'    => __( 'link2' ),
               'section'  => 'homefooter',
               'settings' => 'link2',
               'type'     => 'text'
           )
       )
   );


   $wp_customize->add_setting( 'link3', array(
    'default'           => __( '' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'link3',
       array(
           'label'    => __( 'link3' ),
           'section'  => 'homefooter',
           'settings' => 'link3',
           'type'     => 'text'
       )
   )
);


$wp_customize->add_setting( 'link4', array(
    'default'           => __( '' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'link4',
       array(
           'label'    => __( 'link4' ),
           'section'  => 'homefooter',
           'settings' => 'link4',
           'type'     => 'text'
       )
   )
);



$wp_customize->add_section( 'socialicon_links' , array(
    'title'   => 'Social Icon Links',
    'panel'   => 'footer',
) );


$wp_customize->add_setting( 'facebook', array(
    'default'           => __( 'https://www.facebook.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'facebook',
       array(
           'label'    => __( 'Facebok Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'facebook',
           'type'     => 'text'
       )
   )
);


$wp_customize->add_setting( 'instagram', array(
    'default'           => __( 'https://www.instagram.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'instagram',
       array(
           'label'    => __( 'Instagram Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'instagram',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'twitter', array(
    'default'           => __( 'https://www.twitter.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'twitter',
       array(
           'label'    => __( 'Twitter Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'twitter',
           'type'     => 'text'
       )
   )
);


$wp_customize->add_setting( 'LinkIn', array(
    'default'           => __( 'https://www.linkin.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'LinkIn',
       array(
           'label'    => __( 'LinkIn Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'LinkIn',
           'type'     => 'text'
       )
   )
);

       
       }

add_action( 'customize_register', 'guide_customize_register' );