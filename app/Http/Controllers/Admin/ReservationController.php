<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ReservationController extends ModuleController
{
    /*
     * Name of the index column to use as name column
     */
    protected $titleColumnKey = 'name';

    protected $moduleName = 'Reservations';

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
        'number_of_people' => [ // field column
            'title' => 'Number of people',
            'field' => 'number_of_people',
        ],
        'date' => [ // field column
            'title' => 'Date',
            'field' => 'date',
        ],
        'time' => [ // field column
            'title' => 'Time',
            'field' => 'time',
        ],
//        'subtitle' => [
//            'title' => 'Subtitle',
//            'field' => 'subtitle',
//            'sort' => true, // column is sortable
//            'visible' => false, // will be available from the columns settings dropdown
//        ],
//        'relationName' => [ // relation column
//            'title' => 'Relation name',
//            'sort' => true,
//            'relationship' => 'relationName',
//            'field' => 'relationFieldToDisplay'
//        ],
//        'presenterMethodField' => [ // presenter column
//            'title' => 'Field title',
//            'field' => 'presenterMethod',
//            'present' => true,
//        ]
    ];
}
