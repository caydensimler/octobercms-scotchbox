<?php namespace CaydenSimler\Craigslist\Models;

use Model;

/**
 * Model
 */
class PostCategory extends Model
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
    public $table = 'caydensimler_craigslist_p_c';

}