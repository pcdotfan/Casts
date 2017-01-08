<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Series extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'thumbnail', 'price', 'discount', 'slug'
    ];
    public function posts()
    {
        return $this->hasMany(Course::class);
    }
}
