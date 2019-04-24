@extends('layouts.app')

@section('content')
<div class="row">
        
        <div class="col"><h1>Musicians</h1></div>
        <div class="col"></div>
        <div class="col"><a href="/profiles/create" class="btn btn-primary">Create profile</a></div>
        
</div>
   
    <div class="row">
        
        <div class="col"><h3>Nickname</h3></div>
        <div class="col"><h3>City</h3></div>
        <div class="col"><h3>Age</h3></div>
        <div class="col"><h3>Photo</h3></div>
        <div class="col"><h3>Description</h3></div>
        <div class="col"><h3>Influences</h3></div>
        <div class="col"><h3>Music Type</h3></div>
        <div class="col"><h3>Read/Write Music</h3></div>
        <div class="col"><h3>Improvise</h3></div>
        <div class="col"><h3>Ear</h3></div>
        <div class="col"></div>
        
       
    </div>

    @foreach($profiles as $profile)
    <div class="row">
        <div class="col">{{ $profile->nickname }}</div>
        <div class="col">{{ $profile->city }}</div>
        <div class="col">{{ $profile->age }}</div>
        <div class="col">{{ $profile->photo }}</div>
        <div class="col">{{ $profile->desc }}</div>
        <div class="col">{{ $profile->influences }}</div>
        <div class="col">{{ $profile->music_type }}</div>
        <div class="col">{{ $profile->read_write_music }}</div>
        <div class="col">{{ $profile->improvise }}</div>
        <div class="col">{{ $profile->ear }}</div>
        <div class="col"><a href="/profiles/{{ $profile->id }} /edit" class="btn btn-success btn-sm">Edit</a></div>
    </div>

    @endforeach

@endsection