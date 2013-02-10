<?php
//
// Tabs
//
add_shortcode('bs_tabs', 'bs_tabs');
function bs_tabs($atts, $content)
{
    // Defining vars
    $id = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'id' => '' // User input
    ), $atts));
    // Convert to dual shortcodes
    $header_tabs = str_replace('[bs_tab', '[bs_tab_header', $content);
    $header_tabs = str_replace('[/bs_tab', '[/bs_tab_header', $header_tabs);
    $content_tabs = str_replace('[bs_tab', '[bs_tab_content', $content);
    $content_tabs = str_replace('[/bs_tab', '[/bs_tab_content', $content_tabs);
    $header = '<ul class="twitter_bs nav nav-tabs" id="' . $id . '">' . do_shortcode($header_tabs) . '</ul>';
    $content = '<div class="twitter_bs tab-content">' . do_shortcode($content_tabs) . '</div>';
    return $header . $content;
}


add_shortcode('bs_tab_header', 'bs_tab_header');
function bs_tab_header($atts, $content)
{
    // Defining vars
    $id = '';
    $title = '';
    $active = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'id' => '', // User input
        'title' => '', // User input
        'active' => '' // null, true
    ), $atts));
    if ($active === 'true') {
        $active = 'active';
    }
    return '<li class="' . $active . '"><a href="#' . $id . '"  data-toggle="tab">' . $title . '</a></li>';

}

add_shortcode('bs_tab_content', 'bs_tab_content');
function bs_tab_content($atts, $content)
{
    // Defining vars
    $id = '';
    $active = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'id' => '',
        'active' => ''
    ), $atts));
    if ($active === 'true') {
        $active = 'active';
    }
    return '<div class="tab-pane ' . $active . '" id="' . $id . '">' . do_shortcode($content) . '</div>';
}

//
// Tooltips
//
add_shortcode('bs_tooltip', 'bs_tooltip');
function bs_tooltip($atts, $content)
{
    // Defining vars
    $placement = '';
    $tooltip = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'placement' => 'top', // null, top, bottom, left, right
        'tooltip' => '' // User input
    ), $atts));
    return '<a href="#" class="twitter_bs bs_tooltip" title="' . $tooltip . '" data-placement="' . $placement . '">' . do_shortcode($content) . '</a>';
}

//
// PopOver
//
add_shortcode('bs_popover', 'bs_popover');
function bs_popover($atts, $content)
{
    // Defining vars
    $placement = '';
    $tooltip = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'placement' => 'top', // null, top, bottom, left, right
        'tooltip' => '' // User input
    ), $atts));
    return '<a href="#" class="twitter_bs bs_popover" title="' . $tooltip . '" data-placement="' . $placement . '">' . do_shortcode($content) . '</a>';
}

//
// Accordion
//
add_shortcode('bs_accordion', 'bs_accordion');
function bs_accordion($atts, $content)
{
    // Defining vars
    $id = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'id' => '' // User input
    ), $atts));
    return '<div class="accordion">' . do_shortcode($content) . '</div>';
}

add_shortcode('bs_accordion_tab', 'bs_accordion_tab');
function bs_accordion_tab($atts, $content)
{
    // Defining vars
    $title = '';
    $id = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    $active = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'title' => '', // User input
        'active' => '' // null, true
    ), $atts));
    if ($active === 'true') {
        $active = 'in';
    }
    $header = '<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" href="#' . $id . '">' . $title . '</a></div>';
    $collapse = '<div class="accordion-body collapse ' . $active . '" id="' . $id . '"><div class="accordion-inner">' . do_shortcode($content) . '</div></div>';
    return '<div class="accordion-group">' . $header . $collapse . '</div>';
}