<?php

$pages = require 'pages.php';

$final = [];

function flatten_array(array $array)
{
    global $final;

    foreach ( $array as $key => $value ) {
        if ( is_array($value) ) {
            flatten_array($value);
            unset($array[$key]);
        }
    }

    if ( !empty($array) ) {
        $final []= $array;
    }
}

flatten_array($pages);

var_export( $final );
