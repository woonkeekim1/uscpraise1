<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use File;
use Redirect;
use Image;
use Input;

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

    	$totalContent = \App\Gallery::where('category', '=', 'Retreat')->get()->count();
    	$curPage = 0;
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 4) ? $totalPage : $start+4;

    	$contentsRetreat = \App\Gallery::where('category', '=', 'Retreat')->orderBy('created_at', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->get();

        $totalContent = \App\Gallery::where('category', '=', 'Event')->get()->count();
        $curPage = 0;
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage : $start+4;

        $contentsEvent = \App\Gallery::where('category', '=', 'Event')->orderBy('created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->get();

        $totalContent = \App\Gallery::where('category', '=', 'Mission')->get()->count();
        $curPage = 0;
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage : $start+4;

        $contentsMission = \App\Gallery::where('category', '=', 'Mission')->orderBy('created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->get();

        $totalContent = \App\Gallery::where('category', '=', 'Before2016')->get()->count();
        $curPage = 0;
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage : $start+4;

        $contentsBefore2016 = \App\Gallery::where('category', '=', 'Before2016')->orderBy('created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->get();

    	return view('gallery.index', compact('contentsPrayAndSermon', 'contentsRetreat', 'contentsMission', 'contentsEvent', 'contentsBefore2016'));

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

    	$maxid = \App\Gallery::where('category', '=', 'Retreat')->max('id');
    	$minid = \App\Gallery::where('category', '=', 'Retreat')->min('id');
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

    public function moreContentForEvent(Request $request)
    {
        $contentInPage = 10;
        $totalContent = \App\Gallery::where('category', '=', 'Event')->get()->count();
        $curPage = $request['page'];
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
        if($curPage > $totalPage)
            return  "";

        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->select('gallery.id', 'title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')
        ->where('category', '=', 'Event')
        ->get();

        $maxid = \App\Gallery::where('category', '=', 'Event')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Event')->min('id');
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

    public function moreContentForMission(Request $request)
    {
        $contentInPage = 10;
        $totalContent = \App\Gallery::where('category', '=', 'Mission')->get()->count();
        $curPage = $request['page'];
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
        if($curPage > $totalPage)
            return  "";

        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->where('category', '=', 'Mission')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->select('gallery.id', 'title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')
        ->get();

        $maxid = \App\Gallery::where('category', '=', 'Mission')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Mission')->min('id');
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

    public function moreContentForBefore2016(Request $request)
    {
        $contentInPage = 10;
        $totalContent = \App\Gallery::where('category', '=', 'Before2016')->get()->count();
        $curPage = $request['page'];
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 4) ? $totalPage -1 : $start+4;
        if($curPage > $totalPage)
            return  "";

        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->select('gallery.id', 'title', 'body', 'createdBy', 'category', 'header', 'image', 'smallimage', 'gallery.created_at')
        ->where('category', '=', 'Before2016')
        ->get();

        $maxid = \App\Gallery::where('category', '=', 'Before2016')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Before2016')->min('id');
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
    	$totalContent = \App\Gallery::where('category', '=', 'Retreat')->orderBy('gallery.created_at', 'desc');
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

		$maxid = \App\Gallery::where('category', '=', 'Retreat')->max('id');
		$minid = \App\Gallery::where('category', '=', 'Retreat')->min('id');
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
    public function ContentForMission(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Mission')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Mission')
        ->get();
        $count = $contents->count();

        $before = \App\Gallery::where('id', '>', $id)->where('category', '=', 'Mission')->min('id');
        $before = \App\Gallery::find($before);
        $after = \App\Gallery::where('id', '<', $id)->where('category', '=', 'Mission')->max('id');
        $after = \App\Gallery::find($after);
        $current = \App\Gallery::find($id);

        $maxid = \App\Gallery::where('category', '=', 'Mission')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Mission')->min('id');
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

    public function ContentForEvent(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Event')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Event')
        ->get();
        $count = $contents->count();

        $before = \App\Gallery::where('id', '>', $id)->where('category', '=', 'Event')->min('id');
        $before = \App\Gallery::find($before);
        $after = \App\Gallery::where('id', '<', $id)->where('category', '=', 'Event')->max('id');
        $after = \App\Gallery::find($after);
        $current = \App\Gallery::find($id);

        $maxid = \App\Gallery::where('category', '=', 'Event')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Event')->min('id');
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

    public function ContentForBefore2016(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Before2016')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Before2016')
        ->get();
        $count = $contents->count();

        $before = \App\Gallery::where('id', '>', $id)->where('category', '=', 'Before2016')->min('id');
        $before = \App\Gallery::find($before);
        $after = \App\Gallery::where('id', '<', $id)->where('category', '=', 'Before2016')->max('id');
        $after = \App\Gallery::find($after);
        $current = \App\Gallery::find($id);

        $maxid = \App\Gallery::where('category', '=', 'Before2016')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Before2016')->min('id');
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
    public function moreSmallContentForRetreat(Request $request)
    {
    	$id = $request['id'];
    	$contentInPage = 8;
    	$totalContent = \App\Gallery::where('category', '=', 'Retreat')->orderBy('gallery.created_at', 'desc');
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
    public function moreSmallContentForEvent(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Event')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Event')
        ->get();
        $count = $contents->count();

        $maxid = \App\Gallery::where('category', '=', 'Event')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Event')->min('id');
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
    public function moreSmallContentForMission(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Mission')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Mission')
        ->get();
        $count = $contents->count();

        $maxid = \App\Gallery::where('category', '=', 'Mission')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Mission')->min('id');
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

    public function moreSmallContentForBefore2016(Request $request)
    {
        $id = $request['id'];
        $contentInPage = 8;
        $totalContent = \App\Gallery::where('category', '=', 'Before2016')->orderBy('gallery.created_at', 'desc');
        $offset = $totalContent->get()->count() % $contentInPage;
        $index = $totalContent->where('id', '>', $id)->get()->count() / 8;
        $index = floor($index) * 8;
        $lowIndex = $index;
        $contents = \App\Gallery::join('users', 'users.id', '=', 'gallery.createdBy')
        ->orderBy('gallery.created_at', 'desc')->take($contentInPage)
        ->offset($lowIndex)->select('gallery.id', 'smallimage')
        ->where('category', '=', 'Before2016')
        ->get();
        $count = $contents->count();

        $maxid = \App\Gallery::where('category', '=', 'Before2016')->max('id');
        $minid = \App\Gallery::where('category', '=', 'Before2016')->min('id');
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

    public function addGallery()
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 10)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit gallery.');
        }
        return view('gallery.addGallery');
    }
    public function addActionGallery(Request $request)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 10)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit gallery.');
        }
        $gallery = new \App\Gallery();

        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $body = $request['body'];
        if(!$body)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }

        $category = $request['category'];
        if(!$category)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('category must not be emtpy.');
        }

        $gallery->title = $title;

        $gallery->body = $body;

        $gallery->category = $category;

        $image = $request['image'];

        if($image)
        {
            if($request->file('image')->isValid()){
                $extention = File::extension($request->file('image')->getClientOriginalName());
                if($extention != 'jpg' && $extention != 'jpeg' && $extention != 'png' && $extention != 'gif')
                    return Redirect::back()
                        ->withInput()
                        ->withErrors('Wrong input type for image.' . $extention);
                /*Server*/
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(base_path().'/images/gallery/', $filename);
                $gallery->image =  'uscpraise/images/gallery/' . $filename;
                Image::make(base_path() . '/images/gallery/' . $filename)->resize('200','150')->save(base_path() . '/images/gallery/small' . $filename);
                $gallery->smallImage = 'uscpraise/images/gallery/small' . $filename;

                //local
                /*
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path().'/images/gallery/', $filename);
                $gallery->image =  '/images/gallery/' . $filename;
                Image::make(public_path() . '/images/gallery/' . $filename)->resize('200','150')->save(public_path() . '/images/gallery/small' . $filename);
                $gallery->smallImage = '/images/gallery/small' . $filename;
                */

            }
            else
            {
                return Redirect::back()
                ->withInput()
                ->withErrors('image must not be emtpy.');
            }
        }
        else
        {

            return Redirect::back()
            ->withInput()
            ->withErrors('image must not be emtpy.');
        }

        $gallery->createdBy = Auth::id();

        $gallery->save();

        return redirect()->action('GalleryController@index');
    }

    public function editGallery($id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 10)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit gallery.');
        }
        $gallery = \App\Gallery::findOrFail($id);
        return view('gallery.editGallery', compact('gallery'));
    }

    public function editActionGallery(Request $request, $id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 10)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit gallery.');
        }


        $gallery = \App\Gallery::findOrFail($id);
        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $body = $request['body'];
        if(!$body)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }

        $category = $request['category'];
        if(!$category)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('category must not be emtpy.');
        }

        $gallery->title = $title;

        $gallery->body = $body;

        $gallery->category = $category;

        $image = $request['image'];

        if($image)
        {
            if($request->file('image')->isValid()){

                $extention = File::extension($request->file('image')->getClientOriginalName());
                if($extention != 'jpg' && $extention != 'jpeg' && $extention != 'png' && $extention != 'gif')
                    return Redirect::back()
                        ->withInput()
                        ->withErrors('Wrong input type for image.');
                /*Server*/
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(base_path().'/images/gallery/', $filename);
                $gallery->image =  'uscpraise/images/gallery/' . $filename;
                Image::make(base_path() . '/images/gallery/' . $filename)->resize('200','150')->save(base_path() . '/images/gallery/small' . $filename);
                $gallery->smallImage = 'uscpraise/images/gallery/small' . $filename;

                //local
                /*
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path().'/images/gallery/', $filename);
                $gallery->image =  '/images/gallery/' . $filename;
                Image::make(public_path() . '/images/gallery/' . $filename)->resize('200','150')->save(public_path() . '/images/gallery/small' . $filename);
                $gallery->smallImage = '/images/gallery/small' . $filename;
                */

            }
            else
            {
                return Redirect::back()
                ->withInput()
                ->withErrors('image must not be emtpy.');
            }
        }

        $gallery->createdBy = Auth::id();

        $gallery->save();

        return redirect()->action('GalleryController@index');
    }

    public function removeGallery(Request $request)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 10)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit gallery.');
        }

        $id = $request['id'];

        $gallery = \App\Gallery::findOrFail($id);
        $gallery->delete();
        $result = array('status'=>'success');
        return json_encode($result);
    }
}
