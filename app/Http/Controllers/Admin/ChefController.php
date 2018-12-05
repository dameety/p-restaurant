<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ChefController extends ModuleController
{
    protected $moduleName = 'Chefs';
    /*
     * Name of the index column to use as name column
     */
    protected $titleColumnKey = 'name';

    protected $indexColumns = [
        'name' => [ // field column
            'title' => 'Name',
            'field' => 'name',
        ],
        'role' => [ // field column
            'title' => 'Role',
            'field' => 'role',
        ],
        'bio' => [ // field column
            'title' => 'Bio',
            'field' => 'bio',
        ]
    ];
}
