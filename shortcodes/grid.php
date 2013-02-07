<?php
//
// Columns Container
//
add_shortcode('bs_grid', 'bs_grid');
function bs_grid($atts, $content)
{
    // Defining vars
    $display = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'display' => '' // null, fluid
    ), $atts));
    if ($display) {
        $display = '-fluid';
    }
    return '<div class="twitter_bs row' . $display . '">' . do_shortcode($content) . '</div>';
}

//
// Column Element
//
add_shortcode('bs_column', 'bs_column');
function bs_column($atts, $content)
{
    // Defining vars
    $size = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'size' => '12' // 1 -> 12
    ), $atts));
    return '<div class="twitter_bs span' . $size . '">' . do_shortcode($content) . '</div>';
}