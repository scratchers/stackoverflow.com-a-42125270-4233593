<?php

function create_array(array $elements, $parentId = 0) {

    $branch = array();

    foreach ($elements as $element) {
        if ($element['parent_id'] == $parentId) {


            $children = create_array($elements, $element['id']);

            if ($children) {
                $element[$element['menu_nl']] = $children;
            }


            $branch[] = $element;
        }
    }

    return $branch;
}
