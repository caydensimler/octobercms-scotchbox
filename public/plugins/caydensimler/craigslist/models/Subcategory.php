<?php namespace CaydenSimler\Craigslist\Models;

use Model;

/**
 * Model
 */
class Subcategory extends Model
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
    public $table = 'caydensimler_craigslist_subcategories';

    // Relations

    public $belongsToMany = [
        'posts' => [
            'CaydenSimler\Craigslist\Models\Post',
            'table' => 'caydensimler_craigslist_p_sc',
            'order' => 'title'
        ]
    ];
}