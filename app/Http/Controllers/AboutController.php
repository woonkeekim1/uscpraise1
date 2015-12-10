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
    	$contents = \App\History::where('year', '<=', $beginYear + $cutYear)->get();//->orderBy('year')->get();
    	$maxYear = \App\History::max('year');
    	$diff = (int)$maxYear - (int)$beginYear;
    	$pages = $diff / 8;
    	$count = $contents->count();
    	return view('about', compact('contents', 'pages', 'count'));
    }
    public function moreHistory(Request $request)
    {
    	$page = $request->id;
    	$cutYear = 8;
    	$beginYear = '2004';
    	$contents = \App\History::where('year', '>=', $beginYear + $cutYear*$page)->where('year', '<', $beginYear + $cutYear*($page+1))->get();
    	$maxYear = \App\History::max('year');
    	$diff = (int)$maxYear - (int)$beginYear;
    	$pages = $diff / 8;
    	$count = $contents->count();
    	$returnArray = array(
    			'contents' => $contents,
    			'pages' => $pages,
    			'count' => $count,
    	);
    	return json_encode($returnArray);
    	
    }
    public function contactUs()
    {
    	return view('contact');
    }
}
