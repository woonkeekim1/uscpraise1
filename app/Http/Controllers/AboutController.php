<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Input;
use File;
class AboutController extends Controller
{
    //
	public function aboutUs()
    {
    	$cutYear = 8;
    	$beginYear = '2004';
    	$maxYear = \App\History::max('year');

        $years = \App\History::select('year')->where('year', '>=', $beginYear)->where('year', '<', $beginYear + $cutYear)->orderBy('year')->distinct()->get();
        $allYears = \App\History::select('year')->where('year', '>=', $beginYear)->orderBy('year')->distinct()->get()->count();
        $pages = ceil($allYears/$cutYear);

        $histories = [];
        $histories['result'] = [];
        for($i = 0; $i < $years->count(); $i++)
        {   
            $histories['result'][$i] = $years[$i];
            $yearActivities = \App\History::select('description', 'id')->where('year', '=', $years[$i]->year)->get();
            $histories['result'][$i]['descriptions'] = $yearActivities;
        }

        $leaders = \App\Leader::get();
        return view('about.about', compact('pages', 'histories', 'leaders'));
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
            $yearActivities = \App\History::select('description', 'id')->where('year', '=', $years[$i]->year)->get();
            $histories['result'][$i]['descriptions'] = $yearActivities;
        }
    	return json_encode($histories);
    	
    }
    public function contactUs()
    {
    	return view('about.contact');
    }
    public function addHistory()
    {
        return view('about.addHistory');
    }

    public function addActionHistory(Request $request)
    {
        if(!Auth::check() || Auth::user()->level != 0)
           return Redirect::back();
        $year = $request['year'];

        if (!is_int($year) && !is_numeric($year)) {
            return Redirect::back()
            ->withInput()
            ->withErrors('Year should be 4 digits.');
        }
        if ($year < 1000 || $year > 9999) {
            return Redirect::back()
            ->withInput()
            ->withErrors('Year should be 4 digits');
        }
        $description = $request['description'];

        $history = new \App\History();
        $history->year = $year;
        $history->description = $description;
        $history->createdBy = Auth::user()->id;
        $history->save();

        return redirect()->action('AboutController@aboutUs');
    }

    public function editHistory(Request $request, $id)
    {

        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $history =  \App\History::findOrFail($id);
        return view('about.editHistory', compact('history'));
    }

    public function editActionHistory(Request $request, $id)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $history = \App\History::findOrFail($id);

        $year = $request['year'];

        if (!is_int($year) && !is_numeric($year)) {
            return Redirect::back()
            ->withInput()
            ->withErrors('Year should be 4 digits.');
        }
        if ($year < 1000 || $year > 9999) {
            return Redirect::back()
            ->withInput()
            ->withErrors('Year should be 4 digits');
        }
        $description = $request['description'];

        $history->year = $year;
        $history->description = $description;
        $history->createdBy = Auth::user()->id;
        $history->save();
        return redirect()->action('AboutController@aboutUs');
    }

    public function deleteHistory(Request $request)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $id = $request['id'];
        if (!$id)
            return Redirect::back();

        $history = \App\History::findOrFail($id);
        if(!$history)
        {
            return array('status' => 'fail', 'message' => 'Unable to fine the data');
        }
        //delete
        $history->delete();
        return array('status' => 'success', 'message' => 'Successfully removed');
    }
    public function addLeader()
    {
        return view('about.addLeader');
    }

    public function addActionLeader(Request $request)
    {
        if(!Auth::check() || Auth::user()->level != 0)
           return Redirect::back();
        $name = $request['name'];
        if (!$name) {
            return Redirect::back()
                ->withInput()
                ->withErrors('name must not be emtpy.');
        }
        $leader = new \App\Leader();
        $leader->name = $name;
        $groupname = $request['group_name'];
        if (!$groupname) {
            return Redirect::back()
                ->withInput()
                ->withErrors('조이름 must not be emtpy.');
        }
        $leader->group_name = $groupname;

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
                $request->file('image')->move(base_path().'/images/leaders/', $filename);
                $leader->image =  'uscpraise/images/leaders/' . $filename;
                
                //local
                /*
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path().'/images/leaders/', $filename);
                $leader->image =  '/images/leaders/' . $filename;
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

        $leader->save();
        return redirect()->action('AboutController@aboutUs');
    }

    public function editLeader(Request $request, $id)
    {

        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $leader =  \App\Leader::findOrFail($id);
        return view('about.editLeader', compact('leader'));
    }

    public function editActionLeader(Request $request, $id)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
                $name = $request['name'];
        if (!$name) {
            return Redirect::back()
                ->withInput()
                ->withErrors('name must not be emtpy.');
        }
        $leader = \App\Leader::findOrFail($id);
        if (!$leader) {
            return Redirect::back();
        }
        $leader->name = $name;
        $groupname = $request['group_name'];
        if (!$groupname) {
            return Redirect::back()
                ->withInput()
                ->withErrors('조이름 must not be emtpy.');
        }
        $leader->group_name = $groupname;

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
                $request->file('image')->move(base_path().'/images/leaders/', $filename);
                $leader->image =  'uscpraise/images/leaders/' . $filename;
                
                //local
                /*
                $filename = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path().'/images/gallery/', $filename);
                $leader->image =  '/images/gallery/' . $filename;
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

        $leader->save();
        return redirect()->action('AboutController@aboutUs');
    }

    public function deleteLeader(Request $request)
    {
        if(!Auth::check() || Auth::user()->level != 0)
            return Redirect::back();
        $id = $request['id'];
        if (!$id)
            return Redirect::back();

        $leader = \App\Leader::findOrFail($id);
        if(!$leader)
        {
            return array('status' => 'fail', 'message' => 'Unable to fine the data');
        }
        //delete
        $leader->delete();
        return array('status' => 'success', 'message' => 'Successfully removed');
    }
}
