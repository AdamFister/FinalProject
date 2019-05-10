@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <?php
                    $profile = Auth::user()->profile;
                    ?>
                <div class="card-header"><h3 class="link">{{ $profile->nickname }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- You are logged in! -->

                    <br>

                    @if (Auth::user()->admin == 1)
                    <div>Welcome, Administrator</div>
                    <br>
                    <a class="btn btn-purple" href="/users">Users Page</a>
                    <a class="btn btn-purple" href="/profiles">Profiles Page</a>



                    @else

                    <?php
                    $talents = \App\Talent::all();
                    $instruments = \App\Instrument::all();
                    ?>
                    <!-- <p>{{ $profile->id }}</p> -->
                    <!-- <div>Welcome, {{ $profile->nickname }}!</div> -->

                    <div class="container">
                        <!-- <h1 class='title'>Edit profile</h1> -->

                        <form method="POST" action="/profiles/{{ $profile->id }}">
                            <div class="row">
                                <div class="col">
                                    {{ csrf_field() }}
                                    <!-- <div class="field">
                                        <label class="label" for="nickname">Nickname</label>

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="nickname" placeholder="nickname" value="{{ $profile->nickname }}">
                                        </div>
                                    </div> -->

                                    
                                    <div>
                                        <!-- <label class="label" for="city">City</label> -->
                                        <h5 class="link">City:</h5>
                                            <p>{{ $profile->city }}</p>
                                    </div>
                                    <hr>
                                    <!-- Instruments: -->
                                    
                                    <h5 class="link">Talents:</h5>
                                    <?php foreach ($talents as $talent) {
                                        foreach ($instruments as $instrument)
                                            if ($talent->profile_id == $profile->id) {
                                                if ($talent->instrument_id == $instrument->id) {
                                                    echo $instrument->type;
                                                    echo "<br />\n";
                                                }
                                            }
                                    } ?>
                                    
                                    <hr>
                                    <!-- <div class="field">
                                        <label class="label" for="age">Age</label> -->

                                        <div>
                                        <h5 class="link">Age:</h5>
                                            <p> {{ $profile->age }} </p>
                                        </div>
                                    <!-- </div> -->
                                    <hr>
                                    <!-- <div class="field"> -->
                                        <!-- <label class="label" for="genre">Music</label> -->
                                        
                                        <div>
                                        <h5 class="link">My musical styles:</h5>
                                            <p> {{ $profile->genre }} </p>
                                        </div>
                                    <!-- </div> -->
                                    <hr>
                                    
                                    <div>
                                    <h5 class="link">Read/Write Music</h5>
                                    <p>{{ $profile->read_write_music }}</p>
                                    </div>

                                    <hr>

                                    <div>
                                    <h5 class="link">Improvise</h5>
                                    <p>{{ $profile->improvise }}</p>
                                    </div>

                                    <hr>
                                    <div>
                                    <h5 class="link">Ear</h5>
                                    <p>{{ $profile->ear }}</p>
                                    </div>

                                </div>
                                <div class="col">
                                        <div>
                                            
                                            <img class="profileImg" src="/files/{{ $profile->photo }}" />
                                        </div>
                                        
                                        <div>
                                            <br>
                                        <h5 class="link">About Me:</h5>
                                            <p>{{ $profile->desc }}</p>
                                        </div>
                                        <hr>
                                    <div class="field">
                                        <!-- <label class="label" for="influences">Influences</label> -->
                                        <div>
                                        <h5 class="link">Musical Influences:</h5>
                                            <p>{{ $profile->influences }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <br>
                        </form>

                        <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-purple btn-sm btn-block">Edit Profile</a>


                        <br>
                    </div>

                    


                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection