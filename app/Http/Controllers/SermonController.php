<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SermonController extends Controller
{
    //
    public function index()
    {
    	$contentInPage = 10;
    	$totalContent = \App\SundaySermon::get()->count();
    	$curPage = 0;
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage : $start+4;
    	
    	$returnArray = array(
    	'contentInPage' => $contentInPage,
    	'totalContent' => $totalContent,
    	'curPage' => $curPage,
    	'totalPage' => $totalPage,
    	'start' => $start,
    	'end' => $end,
    	);
    	$contents = \App\SundaySermon::orderBy('created_At', 'desc')->take($contentInPage)
    				->offset($curPage*$contentInPage)->get();
    	return view('sermon.index', compact('returnArray', 'contents'));
    }
    
    public function updateSundaySermon(Request $request)
    {
    	$contentInPage = 10;
    	$totalContent = \App\SundaySermon::get()->count();
    	$curPage = $request['sundaySermonPage'];
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
    	if($curPage > $totalPage)
    		return  "";

    	$contents = \App\SundaySermon::join('users', 'users.id', '=', 'SundaySermon.createdBy')
    				->orderBy('SundaySermon.created_At', 'desc')->take($contentInPage)
    				->offset($curPage*$contentInPage)->select('sermonDate', 'name', 'title', 'body', 'audio')->get();
    	
    	$returnArray = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'contents' => $contents,
    	);
    	
    	return json_encode($returnArray);
    }
}
