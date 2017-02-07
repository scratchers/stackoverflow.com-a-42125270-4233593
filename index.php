<?php

function urls(array $array) {

    static $path;

    foreach ($array AS $key => $value) {

       if ($value['children']) {
            urls($array[$key]['children']);
        }

        if ( $value['parent_id'] != 0) {

           $path[] = '/' . friendlyUrl($value['parent']) . '/' . friendlyUrl($value['menu_name']) . '/';

        } else {

           $path[] = '/' . friendlyUrl($value['menu_name']) . '/';
        }

    }
    return $pad;

}
