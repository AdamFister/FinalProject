@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col">
        <h1>Musicians</h1>
    </div>
    <div class="col"></div>
    <!-- <div class="col"><a href="/profiles/create" class="btn btn-purple">Create profile</a></div> -->

</div>

<div class="row">
<div class="col">
        <pre></pre>
    </div>
    
    <div class="col">
        <p class="link">Nickname</p>
    </div>
    <div class="col">
        <p class="link">City</p>
    </div>
    <div class="col">
        <p class="link">Age</p>
    </div>
    <!-- <div class="col">
        <p class="link">Photo</p class="link">
    </div> -->
    <!-- <div class="col">
        <p class="link">Description</p>
    </div> -->
    <!-- <div class="col">
        <p class="link">Influences</p>
    </div> -->
    <div class="col">
        <p class="link">Music Type</p>
    </div>
    <div class="col">
        <p class="link">Read/Write Music</p>
    </div>
    <div class="col">
        <p class="link">Improvise</p>
    </div>
    <div class="col">
        <p class="link">Ear</p>
    </div>
  


</div>

@foreach($profiles as $profile)
<div class="row">
<div class="col"><a href="/profiles/{{ $profile->id }}/edit" class="btn btn-purple btn-sm">Edit</a></div>
    <div class="col"><a class="link" href="/profiles/{{ $profile->id }}/edit">{{ $profile->nickname }}</a></div>
    <div class="col">{{ $profile->city }}</div>
    <div class="col">{{ $profile->age }}</div>
    <!-- <div class="col">{{ $profile->photo }}</div> -->
    <!-- <div class="col">{{ $profile->desc }}</div>
    <div class="col">{{ $profile->influences }}</div> -->
    <div class="col">{{ $profile->genre }}</div>
    <div class="col">{{ $profile->read_write_music }}</div>
    <div class="col">{{ $profile->improvise }}</div>
    <div class="col">{{ $profile->ear }}</div>
    
</div>
@endforeach

@endsection