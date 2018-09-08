<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use File;
use Redirect;
use Response;

class SermonController extends Controller
{

    public function index(Request $request)
    {
    	$contentInPage = 10;
    	$totalContent = \App\SundaySermon::get()->count();
    	$curPage = 0;
    	$totalPage = ceil($totalContent/$contentInPage);
    	$start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
    	$end = ($totalPage < $start + 5) ? $totalPage : $start+5;
    	$contents = \App\SundaySermon::orderBy('sermonDate', 'desc')->take($contentInPage)
    	->offset($curPage*$contentInPage)->get();
    	$returnArray = array(
    	'contentInPage' => $contentInPage,
    	'totalContent' => $totalContent,
    	'curPage' => $curPage,
    	'totalPage' => $totalPage,
    	'start' => $start,
    	'end' => $end,
    	'count'=> $contents->count(),
    	);

        $pastorStoryIndex = $request['pastorStory'];



        $contentInPage = 10;
        $totalContent = \App\PastorStory::get()->count();
        $curPage = 0;
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 5) ? $totalPage : $start+5;
        $pastorStoryContents = \App\PastorStory::orderBy('created_at', 'desc')->take($contentInPage)
        ->offset($curPage*$contentInPage)->get();
        $returnArrayForPastorStory = array(
        'contentInPage' => $contentInPage,
        'totalContent' => $totalContent,
        'curPage' => $curPage,
        'totalPage' => $totalPage,
        'start' => $start,
        'end' => $end,
        'count'=> $contents->count(),
        'pastorStoryIndex' => $pastorStoryIndex
        );
        $dailySermon = \App\DailySermon::orderBy('created_at', 'desc')->take(1)->get();
    	return view('sermon.index', compact('returnArray', 'contents', 'returnArrayForPastorStory', 'pastorStoryContents', 'dailySermon'));
    }
    
    public function updateSundaySermon(Request $request)
    {
        $contentInPage = 10;
        $totalContent = \App\SundaySermon::get()->count();
        $curPage = $request['sundaySermonPage'];
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 5) ? $totalPage : $start+5;
        if($curPage > $totalPage)
            return  "";

        $contents = \App\SundaySermon::join('users', 'users.id', '=', 'SundaySermon.createdBy')
                    ->orderBy('SundaySermon.sermonDate', 'desc')->take($contentInPage)
                    ->offset($curPage*$contentInPage)->select('SundaySermon.id', 'sermonDate', 'name', 'title', 'body', 'audio')->get();
        
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

    public function updatePastorStory(Request $request)
    {
        $contentInPage = 10;
        $totalContent = \App\PastorStory::get()->count();
        $curPage = $request['pastorStoryPage'];
        $totalPage = ceil($totalContent/$contentInPage);
        $start = ($curPage % 5 < 0) ? 0 : $curPage - ceil($curPage % 5);
        $end = ($totalPage < $start + 5) ? $totalPage : $start+5;
        if($curPage > $totalPage)
            return  "";



        $contents = \App\PastorStory::join('users', 'users.id', '=', 'PastorStories.createdBy')
                    ->orderBy('PastorStories.created_at', 'desc')->take($contentInPage)
                    ->offset($curPage*$contentInPage)->select('PastorStories.id', 'PastorStories.created_at', 'name', 'title', 'content', 'hits')->get();
                    
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
    public function updatePastorStoryHitCount(Request $request)
    {
        $storyId = $request['storyId'];
        if (!$storyId) {
            $result = array('status' => 'failed');
            return $result;
        }
        $currentCount = \App\PastorStory::select('hits')->where('id', $storyId)->get()[0]['hits'];
        
        \App\PastorStory::where('id', $storyId)->update(['hits'=>$currentCount+1]);
        $result = array('status' => 'success');
        return $result;
    }
    
    public function setSermondateAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function deleteSundaySermon($id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        $sermon = \App\SundaySermon::findOrFail($id);
        if(!$sermon)
        {
            return array('status' => 'fail', 'message' => 'Unable to fine the data');
        }
        //delete
        $sermon->delete();
        return array('status' => 'success', 'message' => 'Successfully removed');
    }

    public function deletePastorStory($id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        $pastorStory = \App\PastorStory::findOrFail($id);
        if(!$pastorStory)
        {
            return array('status' => 'fail', 'message' => 'Unable to fine the data');
        }
        $pastorStory->delete();
        return array('status' => 'success', 'message' => 'Successfully removed');
    }

    public function editSundaySermon($id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        $sermon = \App\SundaySermon::findOrFail($id);

        return view('sermon.editSundaySermon', compact('sermon'));
    }

    public function editPastorStory($id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        $pastorStory = \App\PastorStory::findOrFail($id);

        return view('sermon.editPastorStory', compact('pastorStory'));
    }

    public function addSundaySermon()
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        return view('sermon.addSundaySermon');
    }

    public function addPastorStory()
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        return view('sermon.addPastorStory');
    }

    public function editActionSundaySermon(Request $request, $id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        
        $sermon = \App\SundaySermon::findOrFail($id);

        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $content = $request['content'];
        if(!$content)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('설교 본문 must not be emtpy.');
        }

        $body = $request['body'];
        if(!$body)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('성경구절 must not be emtpy.');
        }


        $audio = $request['audio'];

        $sermonDate = $request['sermonDate'];

        $sermon->title = $title;

        $sermon->content = $content;

        $sermon->body = $body;

        if($audio)
        {
            if($request->file('audio')->isValid()){
                $extention = File::extension($request->file('audio')->getClientOriginalName());
                if($extention != 'mp3' && $extention != 'wma')
                    return Redirect::back()
                        ->withInput()
                        ->withErrors('Wrong input type for auido.');
                /*server*/
                $filename = time() . $request->file('audio')->getClientOriginalName();
                $request->file('audio')->move(base_path().'/audio/SundaySermonAudio/', $filename);
                $sermon->audio =  'uscpraise/audio/SundaySermonAudio/' . $filename;
                
                /*local
                $filename = time() . '-' . $request->file('audio')->getClientOriginalName();
                $request->file('audio')->move(public_path().'/SundaySermonAudio/', $filename);
                $sermon->audio =  '/SundaySermonAudio/' . $filename;
                */
            }
        }

        $sermon->sermonDate = $sermonDate;

        $sermon->save();

        return redirect()->action('SermonController@index');
    }

    public function editActionPastorStory(Request $request, $id)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        
        $pastorStory = \App\PastorStory::findOrFail($id);

        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $content = $request['content'];
        if(!$content)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }

        $pastorStory->title = $title;

        $pastorStory->content = $content;

        $createdDate = date('Y-m-d H:i:s', strtotime($request['created_at']));

        $pastorStory->created_at =  $createdDate;

        $pastorStory->save();

        return redirect()->action('SermonController@index');
    }

    public function addActionSundaySermon(Request $request)
    {

        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }

        $sermon = new \App\SundaySermon();

        global $sundaySermonAudioDestination;
        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $content = $request['content'];
        if(!$content)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('설교 본문 must not be emtpy.');
        }

        $body = $request['body'];
        if(!$body)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }

        $audio = $request['audio'];

        $sermonDate = $request['sermonDate'];

        $sermon->title = $title;

        $sermon->content = $content;

        $sermon->body = $body;

        if($audio)
        {
            if($request->file('audio')->isValid()){
                $extention = File::extension($request->file('audio')->getClientOriginalName());
                if($extention != 'mp3' && $extention != 'wma')
                    return Redirect::back()
                        ->withInput()
                        ->withErrors('Wrong input type for auido.');
                /*server*/
                $filename = time() . $request->file('audio')->getClientOriginalName();
                $request->file('audio')->move(base_path().'/audio/SundaySermonAudio/', $filename);
                $sermon->audio =  'uscpraise/audio/SundaySermonAudio/' . $filename;
                

                /*local
                $filename = time() . '-' . $request->file('audio')->getClientOriginalName();
                $request->file('audio')->move(public_path().'/audio/SundaySermonAudio/', $filename);
                $sermon->audio =  '/audio/SundaySermonAudio/' . $filename;
                */
                
            }
        }
        else{
            return redirect()->action('SermonController@index');
        }

        $sermon->sermonDate = $sermonDate;

        $sermon->createdBy = Auth::id();

        $sermon->save();

        return redirect()->action('SermonController@index');
    }

    public function addActionPastorStory(Request $request)
    {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to edit sermon.');
        }
        
        $pastorStory = new \App\PastorStory();

        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Title must not be emtpy.');
        }

        $content = nl2br($request['content']);
        if(!$content)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }
        $pastorStory->title = $title;

        $pastorStory->content = $content;

        $pastorStory->hits = 0;

        $pastorStory->createdBy = Auth::id();

        $pastorStory->save();

        return redirect()->action('SermonController@index');
    }

    public function downloadSermonAudio($id)
    {
        $sermon = \App\SundaySermon::findOrFail($id);
        if(!$sermon)
            return;    
        $filepath = $sermon->audio;
        //local
        //$filename = public_path($sermon->audio);
        //server
        $filename = $sermon->audio;
        //download
        if (File::exists($filename)) {
            $filesize = (int) File::size($filename);
            
            
            $file = File::get($filename);
            $response = Response::make($file, 200);
            $response->header('Content-type', 'audio/mpeg');
            $response->header('Content-Disposition', 'attachment');
            $response->header('filename', $filename);
            return $response;
        }
    }

    public function playSermonAudio($id)
    {
        $sermon = \App\SundaySermon::findOrFail($id);
        if(!$sermon)
            return;    
        $filepath = $sermon->audio;
        //local
        //$filename = public_path($sermon->audio);
        //server
        $filename = $sermon->audio;
        if (File::exists($filename)) {
            $filesize = (int) File::size($filename);
            $filesizeTmp = $filesize-1;
            $file = File::get($filename);
            $response = Response::make($file, 200);
            $extension = File::extension($filename);
            if ($extension == 'mp3') {
                $response->header('Content-Type', 'audio/mpeg');
            } else if ($extension == 'wma') {
                $response->header('Content-Type', 'audio/x-ms-wma');
            } else {
                $response->header('Content-Type', 'audio/mpeg');
            }
            $response->header('Content-Length', $filesize);
            $response->header('Cache-Control', 'max-age=2592000, public');
            $response->header('Expires', gmdate('D, d M Y H:i:s', time()+2592000) . ' GMT');
            $response->header('Last-Modified', gmdate('D, d M Y H:i:s', time()+2592000) . ' GMT' );
            $response->header('Accept-Ranges', '0-'.$filesizeTmp);
            $response->header('Content-Range', 'bytes 0-'.$filesize.'/'.$filesize);

            return $response;
        }
    }

    public function getDailySermon() {
        $dailySermon = \App\DailySermon::orderBy('created_at', 'desc')->take(1)->get();
        return $dailySermon;
    }

    public function renderDailySermon() {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        return view('sermon.addDailySermon');
    }

    public function addDailySermon(Request $request) {
        if(!Auth::check())
            return redirect()->action('UserController@index');
        $level = Auth::user()->level;
        if($level != 0 && $level != 5)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('You dont have previlege to add dailly sermon.');
        }
        
        $dailySermon = new \App\DailySermon();

        $title = $request['title'];
        if(!$title)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('title must not be emtpy.');
        }
        $body = $request['body'];
        if(!$body)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('Body must not be emtpy.');
        }
        $verse = $request['bibleverse'];
        if(!$verse)
        {
            return Redirect::back()
            ->withInput()
            ->withErrors('verse must not be emtpy.');
        }
        $createdBy = Auth::id();

        $dailySermon->title = $title;
        $dailySermon->body = $body;
        $dailySermon->bibleverse = $verse;
        $dailySermon->createdBy = $createdBy;
        $dailySermon->save();

        return redirect()->action('SermonController@index');
    }
}
