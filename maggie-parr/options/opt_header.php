<?php

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Logo', 'maggie' ),
        'id'         => 'maggie_all_logo_select',
        'icon'      => 'el el-pencil',
        'fields'     => array(

            array(
                'id'       => 'maggie_header_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Header Logo Normal', 'maggie' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__( 'Header Logo Size: 88px X 44px..', 'maggie' ),
                //'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'maggie' ),
                'default'  => array( 'url' => 'https://maggieparr.com/assets/images/logo.svg' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Contact Info', 'maggie' ),
        'id'         => 'maggie_contact_info',
        'icon'      => 'el el-envelope-alt',
        'fields'     => array(
            array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'maggie' ),
                'default'  => 'maggie@maggieparr.com.com',
            ),
            array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'maggie' ),
                'default'  => '+01 (323) 208 1226',
            ),
            array(
                'id'       => 'address',
                'type'     => 'text',
                'title'    => esc_html__( 'Address', 'maggie' ),
                'default'  => 'Sherman Oaks, CA 91411',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Social Profile', 'maggie' ),
        'id'         => 'maggie-social-profile',
        'icon'       => 'el el-dribbble',
        'fields'     => array(
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => esc_html__( 'Facebook Url', 'maggie' ),
                'default'  => 'https://www.facebook.com/',
            ),
            array(
                'id'       => 'linkedin',
                'type'     => 'text',
                'title'    => esc_html__( 'Linkedin Url', 'maggie' ),
                'default'  => 'https://www.linkedin.com/',
            ),
            array(
                'id'       => 'instagram',
                'type'     => 'text',
                'title'    => esc_html__( 'Instagram Url', 'maggie' ),
                'default'  => 'https://www.instagram.com/',
            ),
            array(
                'id'       => 'pinterest',
                'type'     => 'text',
                'title'    => esc_html__( 'Pinterest Url', 'maggie' ),
                'default'  => 'https://www.pinterest.com/',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer', 'maggie' ),
        'id'         => 'maggie-footer',
        'icon'       => 'el el-adjust-alt',
        'fields'     => array(
            array(
                'id'       => 'about-title',
                'type'     => 'text',
                'title'    => esc_html__( 'About Title', 'maggie' ),
                'default'  => 'ABOUT',
            ),
            array(
                'id'        => 'footer_about',
                'type'      => 'editor',
                'title'     => esc_html__( 'Footer About','maggie'),
                'default'   => esc_html__( 'Maggie Parr is an artist and storyteller specializing in signature pieces for individuals and companies.','maggie'),
            ),
            array(
                'id'       => 'button_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text', 'maggie' ),
                'default'  => 'Find Out More',
            ),
            array(
                'id'       => 'button',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Url', 'maggie' ),
                'default'  => 'https://www.linkedin.com/',
            ),
            array(
                'id'       => 'contact-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Contact Title', 'maggie' ),
                'default'  => 'GET IN TOUCH',
            ),
            array(
                'id'        => 'contact_about',
                'type'      => 'editor',
                'title'     => esc_html__( 'Contact Info','maggie'),
                'default'   => esc_html__( 'Parrs studio is located in Los Angeles, California. She also travels throughout the US, Europe and Asia to work on various projects.','maggie'),
            ),
            array(
                'id'       => 'subscribe-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Subscribe Title', 'maggie' ),
                'default'  => 'STAY CONNECTED',
            ),
            array(
                'id'        => 'subscribe_about',
                'type'      => 'editor',
                'title'     => esc_html__( 'Subscribe Info','maggie'),
                'default'   => esc_html__( 'Sign up to receive blog updates and newsletters about Parrs work.','maggie'),
            ),
            array(
                'id'       => 'form-shortcode',
                'type'     => 'text',
                'title'    => esc_html__( 'Form Shortcode', 'maggie' ),
                'default'  => 'shortcode',
            ),
            array(
                'id'       => 'copyright',
                'type'     => 'text',
                'title'    => esc_html__( 'Copyright ', 'maggie' ),
                'default'  => 'All images © Maggie Parr unless otherwise noted. All rights reserved.Legal Privacy',
            ),
        )
    ) );