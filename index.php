<?php

// add $parentpath parameter
function create_array(array $elements, $parentId = 0, $parentpath = '') {

    $branch = array();

    foreach ($elements as $element) {
        // set the fullpath from parent concatenated to this menu_nl
        $element['fullpath'] = "$parentpath/$element[menu_nl]";

        if ($element['parent_id'] == $parentId) {

            // pass the fullpath down to it's children
            $children = create_array($elements, $element['id'], $element['fullpath']);

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
