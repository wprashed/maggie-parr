<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;



function maggieCarbon_portfolio_metabox(){
    Container::make("post_meta",__('Porfolio Meta', 'maggie'))
    ->where('post_type', '=', 'portfolio')
    ->set_priority('high')
    ->add_fields([
        Field::make('text','ct_portfolio_date',__('Portfolio Date','maggie')),
        Field::make('text','ct_portfolio_tag',__('Portfolio Tags','maggie')),
        Field::make('text','ct_portfolio_client',__('Portfolio Client','maggie')),
        Field::make( 'complex', 'crb_slides', 'Slides' )
            ->add_fields( array(
                Field::make( 'image', 'image', 'Image' ),
            ) ),
    ]);
}
add_action('carbon_fields_register_fields', 'maggieCarbon_portfolio_metabox');


function maggieCarbon_service_metabox(){
    Container::make("post_meta",__('Service Meta', 'maggie'))
    ->where('post_type', '=', 'service')
    ->set_priority('high')
    ->add_fields([
        Field::make('rich_text','ct_service_details',__('Portfolio Date','maggie')),
    ]);
}
add_action('carbon_fields_register_fields', 'maggieCarbon_service_metabox');

