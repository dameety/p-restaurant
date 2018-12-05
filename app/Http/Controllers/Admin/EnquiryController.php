<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class EnquiryController extends ModuleController
{
    protected $moduleName = 'Enquiries';
    /*
     * Name of the index column to use as name column
     */
    protected $titleColumnKey = 'name';

    protected $indexColumns = [
        'name' => [ // field column
            'title' => 'Name',
            'field' => 'name',
        ],
        'email' => [ // field column
            'title' => 'Email',
            'field' => 'email',
        ],
        'phone' => [ // field column
            'title' => 'Phone',
            'field' => 'phone',
        ],
        'body' => [ // field column
            'title' => 'Body',
            'field' => 'body',
        ]
    ];
}
