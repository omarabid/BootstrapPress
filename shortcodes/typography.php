<?php

//
// Hero Unit
//
add_shortcode('bs_hero_unit', 'bs_hero_unit');
function bs_hero_unit($atts, $content)
{
    return '<div class="twitter_bs hero-unit">' . do_shortcode($content) . '</div>';
}

//
// Page Header
//
add_shortcode('bs_page_header', 'bs_page_header');
function bs_page_header($atts, $content)
{
    return '<div class="twitter_bs page-header">' . do_shortcode($content) . '</div>';
}

//
// Well
//
add_shortcode('bs_well', 'bs_well');
function bs_well($atts, $content)
{
    $size = '';
    extract(shortcode_atts(array(
        'size' => '' // large|small
    ), $atts));
    if ($size) {
        $size = 'well-' . $size;
    }
    return '<div class="twitter_bs well ' . $size . '">' . do_shortcode($content) . '</div>';
}

//
// Headlines
//
add_shortcode('bs_h1', 'bs_h1');
function bs_h1($atts, $content)
{
    return '<h1 class="twitter_bs">' . do_shortcode($content) . '</h1>';
}

add_shortcode('bs_h2', 'bs_h2');
function bs_h2($atts, $content)
{
    return '<h2 class="twitter_bs">' . do_shortcode($content) . '</h2>';
}

add_shortcode('bs_h3', 'bs_h3');
function bs_h3($atts, $content)
{
    return '<h3 class="twitter_bs">' . do_shortcode($content) . '</h3>';
}

add_shortcode('bs_h4', 'bs_h4');
function bs_h4($atts, $content)
{
    return '<h4 class="twitter_bs">' . do_shortcode($content) . '</h4>';
}

add_shortcode('bs_h5', 'bs_h5');
function bs_h5($atts, $content)
{
    return '<h5 class="twitter_bs">' . do_shortcode($content) . '</h5>';
}

add_shortcode('bs_h6', 'bs_h6');
function bs_h6($atts, $content)
{
    return '<h6 class="twitter_bs">' . do_shortcode($content) . '</h6>';
}

//
// Paragraph
//
add_shortcode('bs_p', 'bs_p');
function bs_p($atts, $content)
{
    // Defining vars
    $type = '';
    $color = '';
    // Extracting attributes
    extract(shortcode_atts(array(
        'type' => '', // lead
        'color' => '' // muted, text-warning, text-error, text-info, text-success
    ), $atts));
    return '<p class="twitter_bs ' . $type . ' ' . $color . '">' . do_shortcode($content) . '</p>';
}

//
// Emphasis
//
add_shortcode('bs_small', 'bs_small');
function bs_small($atts, $content)
{
    return '<small class="twitter_bs">' . do_shortcode($content) . '</small>';
}

add_shortcode('bs_bold', 'bs_bold');
function bs_bold($atts, $content)
{
    return '<strong class="twitter_bs">' . do_shortcode($content) . '</strong>';
}

add_shortcode('bs_italic', 'bs_italic');
function bs_italic($atts, $content)
{
    return '<em class="twitter_bs">' . do_shortcode($content) . '</em>';
}

//
// Abbreviations
//
add_shortcode('bs_abbr', 'bs_abbr');
function bs_abbr($atts, $content)
{
    // Defining vars
    $title = '';
    $type = '';
    // Extracting attributes
    extract(shortcode_atts(array(
        'title' => '', // {User input}
        'type' => '' // null, initialism
    ), $atts));
    return '<abbr class="twitter_bs ' . $type . '" title ="' . $title . '">' . do_shortcode($content) . '</abbr>';
}

//
// Block quotes
//
add_shortcode('bs_blockquote', 'bs_blockquote');
function bs_blockquote($atts, $content)
{
    // Defining vars
    $display = '';
    // Extracting attributes
    extract(shortcode_atts(array(
        'display' => '', // pull-right
    ), $atts));
    return '<blockquote class="twitter_bs ' . $display . '">' . do_shortcode($content) . '</blockquote>';
}

//
// Icons
//
add_shortcode('bs_icon', 'bs_icon');
function bs_icon($atts, $content)
{
    // Defining vars
    $icon = 'search';
    $color = '';
    // Extracting attributes
    extract(shortcode_atts(array(
        'icon' => 'search', // Refer to http://twitter.github.com/bootstrap/base-css.html#images
        'color' => '' // white
    ), $atts));
    if ($color) {
        $color = 'icon-' . $color;
    }
    return '<i class="twitter_bs icon-' . $icon . ' ' . $color . '"></i>';
}

//
// Labels
//
add_shortcode('bs_label_default', 'bs_label_default');
function bs_label_default($atts, $content)
{
    return '<span class="twitter_bs label">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_label_success', 'bs_label_success');
function bs_label_success($atts, $content)
{
    return '<span class="twitter_bs label label-success">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_label_warning', 'bs_label_warning');
function bs_label_warning($atts, $content)
{
    return '<span class="twitter_bs label label-warning">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_label_important', 'bs_label_important');
function bs_label_important($atts, $content)
{
    return '<span class="twitter_bs label">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_label_info', 'bs_label_info');
function bs_label_info($atts, $content)
{
    return '<span class="twitter_bs label label-info">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_label_inverse', 'bs_label_inverse');
function bs_label_inverse($atts, $content)
{
    return '<span class="twitter_bs label label-inverse">' . do_shortcode($content) . '</span>';
}

//
// Badges
//
add_shortcode('bs_badge_default', 'bs_badge_default');
function bs_badge_default($atts, $content)
{
    return '<span class="twitter_bs badge">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_badge_success', 'bs_badge_success');
function bs_badge_success($atts, $content)
{
    return '<span class="twitter_bs badge badge-success">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_badge_warning', 'bs_badge_warning');
function bs_badge_warning($atts, $content)
{
    return '<span class="twitter_bs badge badge-warning">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_badge_important', 'bs_badge_important');
function bs_badge_important($atts, $content)
{
    return '<span class="twitter_bs badge badge-important">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_badge_info', 'bs_badge_info');
function bs_badge_info($atts, $content)
{
    return '<span class="twitter_bs badge badge-info">' . do_shortcode($content) . '</span>';
}

add_shortcode('bs_badge_inverse', 'bs_badge_inverse');
function bs_badge_inverse($atts, $content)
{
    return '<span class="twitter_bs badge badge-inverse">' . do_shortcode($content) . '</span>';
}