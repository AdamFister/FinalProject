<?php

namespace App\Http\Controllers;

use App\Talent;
use App\Instrument;
use App\Profile;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        // $profile = Profile::findOrFail($id);
        //$talents = Talent::where('profile_id', "IS", 3);
        try {
            $talents = DB::select('select * from talents where profile_id = ?', [$id]);
            return json_encode($talents);
        } catch(EXCEPTION $e){
        
         throw $e;
        }
        //$talents = Talent::all();
        //echo $talents;
        
    }

    public function uniqueTalents()
    {

        return Talent::distinct()->get(['profile_id']);

    }

    public function vocalists()
    {

        return Talent::where('instrument_id', 3)->get();

    }

    public function guitarists()
    {

        return Talent::where('instrument_id', 1)->get();

    }

    public function bassists()
    {

        return Talent::where('instrument_id', 2)->get();

    }

    public function drummers()
    {

        return Talent::where('instrument_id', 4)->get();

    }

    public function keyboardists()
    {

        return Talent::where('instrument_id', 5)->get();

    }

    public function getTalents()
    {

        return Talent::all();

    }

    public function getInstruments()
    {

        return Instrument::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $instid)
    {
        $talent = new Talent();

        $talent->profile_id = $id;
        $talent->instrument_id = $instid;
        $talent->save();

        $talents = Talent::all();
       // return redirect('/profiles');

        return json_encode($talents);
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
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function edit(Talent $talent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talent $talent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $instid)
    {

        Talent::where('profile_id', $id)->where('instrument_id', $instid)->delete();
        $talents = Talent::all();

        return json_encode($talents);
    }
}
