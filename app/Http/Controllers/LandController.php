<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestSermon = \App\SundaySermon::orderBy('sermonDate', 'desc')->take(1)->get();
        $pastorStories = \App\PastorStory::orderBy('created_at', 'desc')->take(3)->get();
        $pastorStoryCount = \App\PastorStory::orderBy('created_at', 'desc')->count() / 3;
        if($pastorStoryCount > 3)
            $pastorStoryCount = 3;
        $announcement = \App\Announcement::orderBy('id', 'desc')->take(9)->get();
        return view('index', compact('latestSermon', 'pastorStories', 'pastorStoryCount', 'announcement'));
    }

    public function privacyPolicy()
    {
    	return view('privacyPolicy');
    }

    public function fetchInfo(Request $request){
        $type = $request['type'];
        $count = $request['count'];
        $result;
        if($type == 'pastorStory'){
            if($count > 3)
                $count = 2;
            $result = \App\PastorStory::orderBy('created_at', 'desc')->skip(3 * $count)->take(3)->get();
            $result = array(
                    'pastorStories' =>  $result
                );
        }
        return json_encode($result);
    }
    public function editAnnouncement($id)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $announcement = \App\Announcement::findOrFail($id);
        return view('editAnnouncement', compact('announcement'));
    }

    public function editActionAnnouncement(Request $request, $id)
    {

        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $announcement = \App\Announcement::findOrFail($id);

        $body = $request['body'];

        $announcement->body = $body;

        $announcement->save();

        return redirect()->action('LandController@index');
    }

    public function addAnnouncement(){
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        return view('addAnnouncement');
    }

    public function addActionAnnouncement(Request $request){
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();

        $announcement = new \App\Announcement();

        $body = $request['body'];

        if(!$body)
        {
            return Redirect::back();
        }

        $announcement->body = $body;

        $announcement->save();

        return redirect()->action('LandController@index');
    }

    public function deleteAnnouncement(Request $request)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $id = $request['id'];
        if(!$id)
            return Redirect::back();
        $announcement = \App\Announcement::findOrFail($id);
        $announcement->delete();
        $returnArray = array('status'=>'success');
        return json_encode($returnArray);
    }

    public function getPastorStory(Request $request)
    {
        $id = $request['id'];
        $pastorStory = \App\PastorStory::orderBy('created_at', 'desc')->offset(3 * $id)->take(3)->get();
        return json_encode($pastorStory);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
