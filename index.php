<?php

function create_array(array $elements, $parentId = 0, $parentpath = '') {

    $branch = array();

    foreach ($elements as $element) {
        $element['fullpath'] = $fullpath = "$parentpath/$element[menu_nl]";

        if ($element['parent_id'] == $parentId) {

            $children = create_array($elements, $element['id'], $fullpath);

            if ($children) {
                $element[$element['menu_nl']] = $children;
            }

            $branch[] = $element;
        }
    }

    return $branch;
}

$pages = require 'pages.php';

print_r( create_array($pages) );
