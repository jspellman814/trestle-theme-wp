<?php
/**
 * Auto Get Schema Type By Post Type
 *
 * https://gist.github.com/tlongren/9148513
 */

function html_tag_schema() {
    $schema = 'http://schema.org/';
    // Is single post
    if(is_single()) {
        $type = "Article";
    }
    // Is author page
    elseif( is_author() ) {
        $type = 'ProfilePage';
    }

    // Is search results page
    elseif( is_search() ) {
        $type = 'SearchResultsPage';
    }
    else {
        $type = 'WebPage';
    }
    echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}