<?php

// registrar css e js

function revojus_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
}

add_action('wp_enqueue_scripts', 'revojus_styles');

function revojus_scripts()
{
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], 1.0, true);
    wp_enqueue_script('form_feedback', get_template_directory_uri() . '/dist/js/formFeedback.js', [], 1.0, true);
    if (is_front_page()) {
        wp_enqueue_script('index', get_template_directory_uri() . '/dist/js/index.js', [], 1.0, true);
    }
}
add_action('wp_enqueue_scripts', 'revojus_scripts');

// menu

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


// custom post type

function custom_post_type_planos()
{
    register_post_type('planos', array(
        'label' => 'Planos',
        'description' => 'Planos de serviço para os advogados interessados na revojus',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'planos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

        'labels' => array(
            'name' => 'Planos',
            'singular_name' => 'Plano',
            'menu_name' => 'Planos',
            'add_new' => 'Adicionar novo',
            'add_new_item' => 'Adicionar novo plano',
            'edit' => 'Editar',
            'edit_item' => 'Editar plano',
            'new_item' => 'Novo plano',
            'view' => 'Ver planos',
            'view_item' => 'Ver plano',
            'search_items' => 'Procurar planos',
            'not_found' => 'Nenhum Plano Encontrado',
            'not_found_in_trash' => 'Nenhum Plano Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_planos');

// ACF options page

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}
