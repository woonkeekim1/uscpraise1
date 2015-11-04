<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    //
    public function index()
    {
    	$contentInPage = 10;
    	$totalContent = \App\Gallery::where('category', '=', 'PrayAndSermon')->get()->count();
    	$curPage = 0;
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage : $start+4;
    	 
    	$contentsPrayAndSermon = \App\Gallery::where('category', '=', 'PrayAndSermon')->orderBy('created_at', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->get();
    	$returnArrayPrayAndSermon = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'count'=> $contentsPrayAndSermon->count(),
    	);
    	
    	$contentInPage = 10;
    	$totalContent = \App\Gallery::where('category', '=', 'Retreat')->get()->count();
    	$curPage = 0;
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage : $start+4;
    	
    	$contentsRetreat = \App\Gallery::where('category', '=', 'Retreat')->orderBy('created_at', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->get();
    	$returnArrayRetreat = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'count'=> $contentsRetreat->count(),
    	);

    	return view('gallery.index', compact('returnArrayPrayAndSermon', 'contentsPrayAndSermon', 'returnArrayRetreat', 'contentsRetreat'));
    }
    
    
    public function moreContentForPrayAndSermon(Request $request)
    {
    	$contentInPage = 10;
    	$totalContent = \App\Gallery::where('category', '=', 'PrayAndSermon')->get()->count();
    	$curPage = $request['page'];
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
    	if($curPage > $totalPage)
    		return  "";
    
    	$contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
    	->orderBy('gallery.created_at', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->select('title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')->get();
    	 
    	$returnArray = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'contents' => $contents,
    			'count'=> $contents->count(),
    	);
    	 
    	return json_encode($returnArray);
    }
    
    public function ContentForPrayAndSermon(Request $request)
    {
    	$id = $request['id'];
    	$after = \App\Gallery::where('id', '>', $id)->min('id');
    	$after = \App\Gallery::find($after);
		$before = \App\Gallery::where('id', '<', $id)->max('id');
		$before = \App\Gallery::find($before);
		$current = \App\Gallery::find($id);
		$returnArray = array('before' => $before, 'after' => $after, 'current' => $current);
		return json_encode($returnArray);
    }
}
