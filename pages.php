<?php

return array (
  0 =>
  array (
    'id' => 34,
    'parent_id' => 0,
    'menu_nl' => 'INTRODUCTION',
    'parent' => NULL,
  ),
  1 =>
  array (
    'id' => 36,
    'parent_id' => 0,
    'menu_nl' => 'TEAM',
    'parent' => NULL,
    'TEAM' =>
    array (
      0 =>
      array (
        'id' => 133,
        'parent_id' => 36,
        'menu_nl' => 'Team member A',
        'parent' => 'TEAM',
      ),
      1 =>
      array (
        'id' => 134,
        'parent_id' => 36,
        'menu_nl' => 'Team member B',
        'parent' => 'TEAM',
      ),
    ),
  ),
  2 =>
  array (
    'id' => 50,
    'parent_id' => 0,
    'menu_nl' => 'PRODUCTS',
    'parent' => NULL,
    'PRODUCTS' =>
    array (
      0 =>
      array (
        'id' => 151,
        'parent_id' => 50,
        'menu_nl' => 'SUB PRODUCT A',
        'parent' => 'PRODUCTS',
        'SUB PRODUCT A' =>
        array (
          0 =>
          array (
            'id' => 154,
            'parent_id' => 151,
            'menu_nl' => 'SUB OF SUB PRODUCT A',
            'parent' => 'SUB PRODUCT A',
            'SUB OF SUB PRODUCT A' =>
            array (
              0 =>
              array (
                'id' => 156,
                'parent_id' => 154,
                'menu_nl' => 'SUB OF SUB OF SUB PRODUCT A',
                'parent' => 'SUB OF SUB PRODUCT A',
              ),
            ),
          ),
        ),
      ),
      1 =>
      array (
        'id' => 152,
        'parent_id' => 50,
        'menu_nl' => 'SUB PRODUCT B',
        'parent' => 'PRODUCTS',
        'SUB PRODUCT B' =>
        array (
          0 =>
          array (
            'id' => 155,
            'parent_id' => 152,
            'menu_nl' => 'SUB OF SUB PRODUCTB',
            'parent' => 'SUB PRODUCT B',
          ),
        ),
      ),
      2 =>
      array (
        'id' => 153,
        'parent_id' => 50,
        'menu_nl' => 'SUB PRODUCT C',
        'parent' => 'PRODUCTS',
      ),
    ),
  ),
  3 =>
  array (
    'id' => 40,
    'parent_id' => 0,
    'menu_nl' => 'CONTACT',
    'parent' => NULL,
    'CONTACT' =>
    array (
      0 =>
      array (
        'id' => 139,
        'parent_id' => 40,
        'menu_nl' => 'Contact form',
        'parent' => 'CONTACT',
      ),
      1 =>
      array (
        'id' => 143,
        'parent_id' => 40,
        'menu_nl' => 'How to get there',
        'parent' => 'CONTACT',
      ),
    ),
  ),
);
