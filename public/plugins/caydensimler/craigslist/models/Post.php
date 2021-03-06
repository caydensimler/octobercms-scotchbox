<?php namespace CaydenSimler\Craigslist\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'caydensimler_craigslist_post';

    //  Relations

    public $belongsToMany = [
        'categories' => [
            'CaydenSimler\Craigslist\Models\Category',
            'table' => 'caydensimler_craigslist_p_c',
            'order' => 'category_title'
        ],
        'subcategories' => [
            'CaydenSimler\Craigslist\Models\Subcategory',
            'table' => 'caydensimler_craigslist_p_sc',
            'order' => 'subcategory'
        ]
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'image_gallery' => 'System\Models\File'
    ];

}