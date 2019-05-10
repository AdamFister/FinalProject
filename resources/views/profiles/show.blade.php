@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="link">{{ $profile->nickname }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- You are logged in! -->

                    <br>

                    

                <!-- HOW TO PASS ID FROM URL CLICKED ON SEARCH PAGE TO HERE -->

                <?php
                    $talents = \App\Talent::all();
                    $instruments = \App\Instrument::all();
                    $users = \App\User::all();
                    ?>
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    {{ csrf_field() }}
                                    
                                    <div>
                                    <h5 class="link">City:</h5>
                                            <p>{{ $profile->city }}</p>
                                    </div>
                                    <hr>
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
                                    
                                        <div>
                                        <h5 class="link">Age:</h5>
                                            <p> {{ $profile->age }} </p>
                                        </div>
                                        <hr>
                                        <div>
                                        <h5 class="link">My musical styles:</h5>
                                            <p> {{ $profile->genre }} </p>
                                        </div>
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
                                    <br>
                                        <div>
                                        <h5 class="link">About me:</h5>
                                            <p>{{ $profile->desc }}</p>
                                        </div>
                                        <hr>
                                    <div class="field">
                                        <!-- <label class="label" for="influences">Influences</label> -->
                                        <div>
                                        <h5 class="link">Musical influences:</h5>
                                            <p>{{ $profile->influences }}</p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <hr>
                            <h5><p class="link center">Email me to jam!</p></h5>
                            <?php foreach ($users as $user) {
                                    if ($user->id == $profile->id) {
                                                    ?><p class="center">{{$user->email}}</p><?php
                                            }
                                        }
                                     ?>
                        

                        <!-- <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-success btn-sm btn-block">Edit Profile</a> -->


                        <br>
                    </div>

                    





                </div>
            </div>
        </div>
    </div>
</div>
@endsection