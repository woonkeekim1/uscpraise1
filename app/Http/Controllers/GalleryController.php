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
    	->offset($curPage*$contentInPage)->select('gallery.id', 'title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')
    	->where('category', '=', 'PrayAndSermon')
    	->get();
    	
    	$maxid = \App\Gallery::where('category', '=', 'PrayAndSermon')->max('id');
    	$minid = \App\Gallery::where('category', '=', 'PrayAndSermon')->min('id');
    	$i = 0;
    	$maxYN = 'N';
    	$minYN = 'N';
    	 
    	for($i = 0; $i < $contents->count(); $i++)
    	{
    		if($contents[$i]->id == $maxid)
    			$maxYN = 'Y';
    		if($contents[$i]->id == $minid)
    			$minYN = 'Y';
    	}
    	 
    	$returnArray = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'contents' => $contents,
    			'count'=> $contents->count(),
    			'minYN' => $minYN,
    			'maxYN' => $maxYN
    	);
    	 
    	return json_encode($returnArray);
    }
    public function moreContentForRetreat(Request $request)
    {
    	$contentInPage = 10;
    	$totalContent = \App\Gallery::where('category', '=', 'Retreat')->get()->count();
    	$curPage = $request['page'];
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
    	if($curPage > $totalPage)
    		return  "";
    
    	$contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
    	->orderBy('gallery.created_at', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->select('gallery.id', 'title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')
    	->where('category', '=', 'Retreat')
    	->get();
    	
    	$maxid = \App\Gallery::where('category', '=', 'PrayAndSermon')->max('id');
    	$minid = \App\Gallery::where('category', '=', 'PrayAndSermon')->min('id');
    	$i = 0;
    	$maxYN = 'N';
    	$minYN = 'N';
    	
    	for($i = 0; $i < $contents->count(); $i++)
    	{
    	if($contents[$i]->id == $maxid)
    		$maxYN = 'Y';
    		if($contents[$i]->id == $minid)
    		$minYN = 'Y';
    	}
    
    	$returnArray = array(
    			'contentInPage' => $contentInPage,
    			'totalContent' => $totalContent,
    			'curPage' => $curPage,
    			'totalPage' => $totalPage,
    			'start' => $start,
    			'end' => $end,
    			'contents' => $contents,
    			'count'=> $contents->count(),
    			'minYN' => $minYN,
    			'maxYN' => $maxYN
    	);
    
    	return json_encode($returnArray);
    }
    
    public function ContentForPrayAndSermon(Request $request)
    {
    	$id = $request['id'];
    	$contentInPage = 8;
    	$totalContent = \App\Gallery::where('category', '=', 'PrayAndSermon')->orderBy('gallery.created_at', 'desc');
    	$offset = $totalContent->get()->count() % $contentInPage;
    	$index = $totalContent->where('id', '>', $id)->get()->count() / 8;
    	$index = floor($index) * 8;
    	$lowIndex = $index;
    	$contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
    	->orderBy('gallery.created_at', 'desc')->take($contentInPage)
    	->offset($lowIndex)->select('gallery.id', 'smallimage')
    	->where('category', '=', 'PrayAndSermon')
    	->get();
    	$count = $contents->count();
    	
    	$before = \App\Gallery::where('id', '>', $id)->where('category', '=', 'PrayAndSermon')->min('id');
    	$before = \App\Gallery::find($before);
		$after = \App\Gallery::where('id', '<', $id)->where('category', '=', 'PrayAndSermon')->max('id');
		$after = \App\Gallery::find($after);
		$current = \App\Gallery::find($id);
		
		$maxid = \App\Gallery::where('category', '=', 'PrayAndSermon')->max('id');
		$minid = \App\Gallery::where('category', '=', 'PrayAndSermon')->min('id');
		$i = 0;
		$maxYN = 'N';
		$minYN = 'N';
		 
		for($i = 0; $i < $contents->count(); $i++)
		{
		if($contents[$i]->id == $maxid)
			$maxYN = 'Y';
			if($contents[$i]->id == $minid)
			$minYN = 'Y';
		}
		$returnArray = array('before' => $before, 
						     'after' => $after, 
							 'current' => $current, 
				  			 'contents' => $contents, 
							 'count' => $count,
							 'minYN' => $minYN,
							 'maxYN' => $maxYN				
				);
		return json_encode($returnArray);
    }
    public function ContentForRetreat(Request $request)
    {
    	$id = $request['id'];
    	$contentInPage = 8;
    	$totalContent = \App\Gallery::where('category', '=', 'Reteat')->orderBy('gallery.created_at', 'desc');
    	$offset = $totalContent->get()->count() % $contentInPage;
    	$index = $totalContent->where('id', '>', $id)->get()->count() / 8;
    	$index = floor($index) * 8;
    	$lowIndex = $index;
    	$contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
    	->orderBy('gallery.created_at', 'desc')->take($contentInPage)
    	->offset($lowIndex)->select('gallery.id', 'smallimage')
    	->where('category', '=', 'Retreat')
    	->get();
    	$count = $contents->count();
    	
    	$before = \App\Gallery::where('id', '>', $id)->where('category', '=', 'Retreat')->min('id');
    	$before = \App\Gallery::find($before);
		$after = \App\Gallery::where('id', '<', $id)->where('category', '=', 'Retreat')->max('id');
		$after = \App\Gallery::find($after);
		$current = \App\Gallery::find($id);
		$returnArray = array('before' => $before, 
						     'after' => $after, 
							 'current' => $current, 
				  			 'contents' => $contents, 
							 'count' => $count);
		return json_encode($returnArray);
    }
    
    public function moreSmallContentForPrayAndSermon(Request $request)
    {
    	$id = $request['id'];
    	$contentInPage = 8;
    	$totalContent = \App\Gallery::where('category', '=', 'PrayAndSermon')->orderBy('gallery.created_at', 'desc');
    	$offset = $totalContent->get()->count() % $contentInPage;
    	$index = $totalContent->where('id', '>', $id)->get()->count() / 8;
    	$index = floor($index) * 8;
    	$lowIndex = $index;
    	$contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
    	->orderBy('gallery.created_at', 'desc')->take($contentInPage)
    	->offset($lowIndex)->select('gallery.id', 'smallimage')
    	->where('category', '=', 'PrayAndSermon')
    	->get();
    	$count = $contents->count();
    	
    	$maxid = \App\Gallery::where('category', '=', 'PrayAndSermon')->max('id');
    	$minid = \App\Gallery::where('category', '=', 'PrayAndSermon')->min('id');
    	$i = 0;
    	$maxYN = 'N';
    	$minYN = 'N';
    	
    	for($i = 0; $i < $count; $i++)
    	{
    		if($contents[$i]->id == $maxid)
    			$maxYN = 'Y';
    		if($contents[$i]->id == $minid)
    			$minYN = 'Y';
    	}
    	$returnArray = array(
    			'contents' => $contents,
    			'count' => $count,
    			'maxYN' => $maxYN,
    			'minYN' => $minYN);
    	return json_encode($returnArray);
    	
    }
}
