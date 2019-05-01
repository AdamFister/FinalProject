<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles = Profile::all();

        return view('profiles.index', compact('profiles'));

    }

    public function index2()
    {

        return Profile::all();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $profile = new Profile();

        // $profile->name = request('name');
        // $profile->instruments = request('instruments');
        // $profile->influences = request('influences');
        // $profile->save();
        
        // return redirect('/profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        if ($user->admin || $user->profile->id == $id) {
            $profile = Profile::findOrFail($id);
            return view('profiles.edit', ['profile' => $profile]);
        } else {
            return redirect('/home');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $profile->nickname = request('nickname');
        $profile->city = request('city');
        $profile->age = request('age');

        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images');
            $profile->photo = $path;
        }
        
        $profile->desc = request('desc');
        $profile->influences = request('influences');
        $profile->music_type = request('music_type');
        $profile->read_write_music = request('read_write_music');
        $profile->improvise = request('improvise');
        $profile->ear = request('ear');
        $profile->save();

        $user = Auth::user();

        if ($user->admin)
        {
            return redirect('/profiles');
        }
        else {
            return redirect('/home');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->deleted = 1;
        $profile->save();

        $user = Auth::user();

        if ($user->admin)
        {
            return redirect('/profiles');
        }
        else {
            return redirect('/login');
        }
    }
}
