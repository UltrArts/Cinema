<?php
/**
 * User Model Class
 */

Class Genders extends Model
{
    protected $table = 'genders';
    protected $allowedCols = [
        'name',
        'short_name',
        'email',
        'created_at',
    ];

}
?>