<?php

//
// Table element
//
add_shortcode('bs_table', 'bs_table');
function bs_table($atts, $content)
{
    // Defining vars
    $strip = '';
    $border = '';
    $highlight = '';
    $size = '';
    // Extracting Attributes
    extract(shortcode_atts(array(
        'strip' => '', // null, striped
        'border' => '', // null, bordered
        'highlight' => '', // null, hover
        'size' => '' // null, condensed
    ), $atts));
    if ($strip) {
        $strip = 'table-' . $strip;
    }
    if ($border) {
        $border = 'table-' . $border;
    }
    if ($highlight) {
        $highlight = 'table-' . $highlight;
    }
    if ($size) {
        $size = 'table-' . $size;
    }
    return '<table class="twitter_bs table ' . $strip . ' ' . $border . ' ' . $highlight . ' ' . $size . '">' . do_shortcode($content) . '</table>';
}

//
// Table Body
//
add_shortcode('bs_body', 'bs_body');
function bs_body($atts, $content)
{
    return '<tbody class="twitter_bs">' . do_shortcode($content) . '</tbody>';
}

//
// Table Head
//
add_shortcode('bs_head', 'bs_head');
function bs_head($atts, $content)
{
    return '<thead class="twitter_bs">' . do_shortcode($content) . '</thead>';
}


//
// Row element
//
add_shortcode('bs_row', 'bs_row');
function bs_row($atts, $content)
{
    // Defining vars
    $type = '';
    // Extract attributes
    extract(shortcode_atts(array(
        'type' => '' // null, success, error, warning, info
    ), $atts));
    return '<tr class="twitter_bs ' . $type . '">' . do_shortcode($content) . '</tr>';
}

//
// Cell element
//
add_shortcode('bs_cell', 'bs_cell');
function bs_cell($atts, $content)
{
    return '<td class="twitter_bs">' . do_shortcode($content) . '</td>';
}