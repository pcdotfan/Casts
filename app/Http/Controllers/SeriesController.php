<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;

class SeriesController extends Controller
{
    public function index () {
    	$series = Series::orderBy('created_at', 'desc')->get();

        return view('series.index', [
            'series' => $series,
        ]);
    }

    /**
     * Display a Topic and its posts.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  App\Topic                $topic
     * @return Illuminate\Http\Response
     */
    public function show (Series $series)
    {
        $courses = $series->courses()->get();

        return view('series.show', [
            'series' => $series,
            'courses' => $courses,
        ]);
    }
}
