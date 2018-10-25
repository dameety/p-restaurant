<?php

return [
//    'work' => [
//        'title' => 'Work',
//        'route' => 'admin.work.projects.index',
//        'primary_navigation' => [
//            'bookings' => [
//                'title' => 'Bookings',
//                'module' => true,
//            ],
//            'menus' => [
//                'title' => 'Menus',
//                'module' => true,
//            ]
//        ],
//    ],

    'bookings' => [
        'title' => 'Bookings',
        'module' => true,
        'primary_navigation' => [
            'create' => [
                'title' => 'Bookings',
                'route' => 'admin.bookings.create',
            ]
        ],
    ],
    'menus' => [
        'title' => 'Menus',
        'module' => true,
    ],
    'Chefs' => [
        'title' => 'Chefs',
        'module' => true
    ]

];
