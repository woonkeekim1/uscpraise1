<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
	public function aboutUs()
    {
    	$cutYear = 8;
    	$beginYear = '2004';
    	$maxYear = \App\History::max('year');

        $years = \App\History::select('year')->where('year', '<=', $beginYear + $cutYear)->orderBy('year')->distinct()->get();
        $pages = $years->count() / 8;
        $histories = [];
        $histories['result'] = [];
        for($i = 0; $i < $years->count(); $i++)
        {
            $histories['result'][$i] = $years[$i];
            $yearActivities = \App\History::select('description')->where('year', '=', $years[$i]->year)->get();
            $histories['result'][$i]['descriptions'] = $yearActivities;
        }
        return view('about', compact('pages', 'histories'));
    }
    public function moreHistory(Request $request)
    {
    	$page = $request->id;

        $cutYear = 8;
        $beginYear = '2004';
        $maxYear = \App\History::max('year');

        $years = \App\History::select('year')->where('year', '>=', $beginYear + $cutYear*$page)->orderBy('year')->where('year', '<', $beginYear + $cutYear*($page+1))->distinct()->get();
        $histories = [];
        $histories['result'] = [];
        for($i = 0; $i < $years->count(); $i++)
        {
            $histories['result'][$i] = $years[$i];
            $yearActivities = \App\History::select('description')->where('year', '=', $years[$i]->year)->get();
            $histories['result'][$i]['descriptions'] = $yearActivities;
        }
    	return json_encode($histories);
    	
    }
    public function contactUs()
    {
    	return view('contact');
    }
}
