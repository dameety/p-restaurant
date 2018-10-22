<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Reservation extends Model 
{

    protected $fillable = [
        'published',
        'title',
        'description',
        'name',
        'email',
        'phone',
        'number_of_people',
        'date',
        'time'
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    // public $translatedAttributes = [
    //     'title',
    //     'description',
    //     'active',
    // ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    // public $slugAttributes = [
    //     'title',
    // ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $createRules = [
        'email' => 'required',
        'name' => 'required',
        'phone' => 'required',
        'date' => 'required',
        'number_of_people' => 'required',
        'time' => 'required'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    // public $mediasParams = [
    //     'cover' => [
    //         'default' => [
    //             [
    //                 'name' => 'landscape',
    //                 'ratio' => 16 / 9,
    //             ],
    //             [
    //                 'name' => 'portrait',
    //                 'ratio' => 3 / 4,
    //             ],
    //         ],
    //         'mobile' => [
    //             [
    //                 'name' => 'mobile',
    //                 'ratio' => 1,
    //             ],
    //         ],
    //     ],
    // ];
}
