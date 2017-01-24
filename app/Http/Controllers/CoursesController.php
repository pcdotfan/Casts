<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Series;

class CoursesController extends Controller
{
    public function show (Series $series, $id) {
    	$course = $series->courses()->where('id', $id)->first();

    	return view('courses.show', [
            'course' => $course,
        ]);
    }
}