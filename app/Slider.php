<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'status', 'description', 'start_date', 'end_date', 'show_dots', 'infinite', 'speed', 'slides_to_show', 'adaptive_height', 'fade', 'cssEase', 'slides_to_scroll'];

    
}
