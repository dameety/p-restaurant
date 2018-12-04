<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Chef extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'name',
        'role',
        'bio',
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
     public $slugAttributes = [
         'name',
     ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'header_img' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
        'profile_img' => [
            'default' => [
                [
                    'name' => 'square',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
