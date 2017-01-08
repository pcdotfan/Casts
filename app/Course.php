<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Series;

class Course extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'thumbnail', 'origin',
    ];
    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}
