<?php

// register css and js

function revojus_styles()
{

    //Adding stylesheets
    wp_register_style('style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0');

    //Enqueue the style
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'revojus_styles');

function revojus_scripts()
{
    wp_register_script('jquery', get_template_directory_uri() . '/dist/js/plugins/jquery.min.js', array(), '1.0');
    wp_register_script('owl_script', get_template_directory_uri() . '/dist/js/plugins/owl.carousel.min.js', array('jquery'), '1.0');
    wp_register_script('carrossel_script', get_template_directory_uri() . '/dist/js/carrossel.js', array(), '1.0');
    wp_register_script('index_script', get_template_directory_uri() . '/dist/js/index.js', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'revojus_scripts');

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

// CMB2 fields

function get_field_cmb2($key, $page_id = 0)
{
    $page_id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($page_id, $key, true);
}

function the_field_cmb2($key, $page_id)
{
    echo get_field_cmb2($key, $page_id);
}

function cmb2_fields_perguntas()
{
    $cmb = new_cmb2_box([
        'id' => 'perguntas_box',
        'title' => 'Perguntas frequentes',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-perguntas.php',
        ],
    ]);

    $perguntas_frequentes = $cmb->add_field([
        'name' => '',
        'id' => 'perguntas_frequentes',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Pergunta {#}',
            'add_button' => 'Adiconar',
            'remove_button' => 'Remover',
            'sortable' => 'true',
        ],
    ]);

    $cmb->add_group_field($perguntas_frequentes, [
        'name' => 'Pergunta',
        'id' => 'pergunta',
        'type' => 'text',
    ]);

    $cmb->add_group_field($perguntas_frequentes, [
        'name' => 'Resposta',
        'id' => 'resposta',
        'type' => 'textarea',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_perguntas');

function cmb2_fields_equipe()
{
    $cmb = new_cmb2_box([
        'id' => 'equipe',
        'title' => 'Equipe',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-equipe.php',
        ],
    ]);

    $equipe = $cmb->add_field([
        'name' => '',
        'id' => 'membros_da_equipe',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Membro {#}',
            'add_button' => 'Adiconar membro',
            'remove_button' => 'Remover membro',
            'sortable' => 'true',
        ],
    ]);

    $cmb->add_group_field($equipe, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($equipe, [
        'name' => 'Ocupação',
        'id' => 'ocupacao',
        'type' => 'text',
    ]);

    $cmb->add_group_field($equipe, [
        'name' => 'Foto',
        'id' => 'foto',
        'type' => 'file',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_equipe');
