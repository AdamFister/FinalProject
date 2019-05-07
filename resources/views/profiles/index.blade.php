@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col">
        <h1 class="link">Musicians</h1>
    </div>
    <div class="col"></div>
    <!-- <div class="col"><a href="/profiles/create" class="btn btn-purple">Create profile</a></div> -->

</div>

<div class="row shaded">
<div class="col">
        <pre></pre>
    </div>
    
    <div class="col">
        <p class="white">Nickname</p>
    </div>
    <div class="col">
        <p class="white">City</p>
    </div>
    <div class="col">
        <p class="white">Age</p>
    </div>
    <!-- <div class="col">
        <p class="white">Photo</p class="white">
    </div> -->
    <!-- <div class="col">
        <p class="white">Description</p>
    </div> -->
    <!-- <div class="col">
        <p class="white">Influences</p>
    </div> -->
    <div class="col">
        <p class="white">Music Type</p>
    </div>
    <div class="col">
        <p class="white">R/W Music</p>
    </div>
    <div class="col">
        <p class="white">Improvise</p>
    </div>
    <div class="col">
        <p class="white">Ear</p>
    </div>
  


</div>

@foreach($profiles as $profile)
<div class="row even">
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