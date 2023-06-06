<?php
/**
 * Movie_Gender Model Class
 */

Class MovieGender extends Model
{
    protected $table = 'movie_gender';
    protected $beforeInsert = [
    ];
    protected $allowedCols = [
        'gender_id',
        'movie_id',
        'created_at',
    ];

}
?>