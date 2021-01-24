<?php
function gp_cpt()
{
    register_post_type('skill',array(
        'capability_type' =>'skill',
        'map_meta_cap' => true,
        'supports'=>array('title','editor','excerpt'),
        'rewrite' => array('slug'=>'skills'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'Skills',
            'add_new_item'=>'add new skill',
            'edit_item' => 'edit skill',
            'all_items' => 'All Skills',
            'singular_name' =>'Skill'
        ),
        'menu_icon'=> 'dashicons-lightbulb'
    ));

    register_post_type('course',array(
        'capability_type' =>'course',
        'map_meta_cap' => true,
        'supports'=>array('title','editor','thumbnail','comments'),
        'rewrite' => array('slug'=>'courses'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'Courses',
            'add_new_item'=>'add new course',
            'edit_item' => 'edit course',
            'all_items' => 'All courses',
            'singular_name' =>'Course',
            
        ),
        'menu_icon'=> 'dashicons-category',
        'show_in_rest' => true
    ));

    register_post_type('chapter',array(
        'capability_type' =>'chapter',
        'map_meta_cap' => true,
        'supports'=>array('title','editor'),
        'rewrite' => array('slug'=>'chapters'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'Chapters',
            'add_new_item'=>'add new chapter',
            'edit_item' => 'edit chapter',
            'all_items' => 'All chapters',
            'singular_name' =>'Chapter',
           
        ),
        'menu_icon'=> 'dashicons-tag',
        'show_in_rest' => true
    ));

    register_post_type('tuto',array(
        'capability_type' =>'tuto',
        'map_meta_cap' => true,
        'supports'=>array('title','editor','thumbnail','comments'),
        'rewrite' => array('slug'=>'tutos'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'tutos',
            'add_new_item'=>'add new tuto',
            'edit_item' => 'edit tuto',
            'all_items' => 'All tutos',
            'singular_name' =>'tuto',
           
        ),
        'menu_icon'=> 'dashicons-video-alt3',
        'show_in_rest' => true
    ));

    register_post_type('mvideo',array(
        'capability_type' =>'mvideo',
        'map_meta_cap' => true,
        'supports'=>array('title','editor','thumbnail','comments'),
        'rewrite' => array('slug'=>'motivation-video'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'Mvideos',
            'add_new_item'=>'add new mvideo',
            'edit_item' => 'edit mvideo',
            'all_items' => 'All mvideo',
            'singular_name' =>'mvideo',
           
        ),
        'menu_icon'=> 'dashicons-video-alt2',
        'show_in_rest' => true
    ));
    register_post_type('faqcat',array(
        'capability_type' =>'faqcat',
        'map_meta_cap' => true,
        'supports'=>array('title','editor'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'faqcats',
            'add_new_item'=>'add new faqcat',
            'edit_item' => 'edit faqcat',
            'all_items' => 'All faqcat',
            'singular_name' =>'faqcat',
           
        ),
        'menu_icon'=> 'dashicons-category',
        
    ));
    register_post_type('faqans',array(
        'capability_type' =>'faqans',
        'map_meta_cap' => true,
        'supports'=>array('title','editor'),
        'public'=>true,
        'has_archive'=> true,
        'labels' => array(
            'name'=>'faqanss',
            'add_new_item'=>'add new faqans',
            'edit_item' => 'edit faqans',
            'all_items' => 'All faqans',
            'singular_name' =>'faqans',
           
        ),
        'menu_icon'=> 'dashicons-yes-alt',
        
    ));
}

add_action('init','gp_cpt');
