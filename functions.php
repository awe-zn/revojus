<?php

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
