@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col">
        <h1>Musicians</h1>
    </div>
    <div class="col"></div>
    <div class="col"><a href="/profiles/create" class="btn btn-primary">Create profile</a></div>

</div>

<div class="row">

    <div class="col">
        <h5>Nickname</h5>
    </div>
    <div class="col">
        <h5>City</h5>
    </div>
    <div class="col">
        <h5>Age</h5>
    </div>
    <div class="col">
        <h5>Photo</h5>
    </div>
    <div class="col">
        <h5>Description</h5>
    </div>
    <div class="col">
        <h5>Influences</h5>
    </div>
    <div class="col">
        <h5>Music Type</h5>
    </div>
    <div class="col">
        <h5>Read/Write Music</h5>
    </div>
    <div class="col">
        <h5>Improvise</h5>
    </div>
    <div class="col">
        <h5>Ear</h5>
    </div>
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