<?php

namespace Hasnainali9\LaravelSurveyJs\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Hasnainali9\LaravelSurveyJs\app\Models\Survey;

class SurveyController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function runSurvey($slug)
    {
        $survey = Survey::where('slug', $slug)->firstOrFail();

        return view('survey-manager::survey', [
            'survey'    =>  $survey,
        ]);
    }
}
