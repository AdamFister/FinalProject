@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- You are logged in! -->

                    <br>

                    @if (Auth::user()->admin == 1)
                    <div>I'm an admin!</div>
                    <br>
                    <a class="btn btn-info" href="/users">Users Page</a>
                    <a class="btn btn-info" href="/profiles">Profiles Page</a>

                    @else

                <!-- HOW TO PASS ID FROM URL CLICKED ON SEARCH PAGE TO HERE -->

                    <?php
                    // dd($profile);
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
                                    <div class="field">
                                        <!-- <label class="label" for="nickname">Nickname</label> -->

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="nickname" placeholder="nickname" value="{{ $profile->nickname }}">
                                        </div>
                                    </div>

                                    <br>
                                    <div class="field">
                                        <!-- <label class="label" for="city">City</label> -->

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="textarea" name="city" placeholder="city" value="{{ $profile->city }}">
                                        </div>
                                    </div>
                                    <br>
                                    Instruments:
                                    <br>
                                    <?php foreach ($talents as $talent) {
                                        foreach ($instruments as $instrument)
                                            if ($talent->profile_id == $profile->id) {
                                                if ($talent->instrument_id == $instrument->id) {
                                                    echo $instrument->type;
                                                    echo "<br />\n";
                                                }
                                            }
                                    } ?>
                                    <br>
                                    <div class="field">
                                        <!-- <label class="label" for="age">Age</label> -->

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="age" placeholder="age" value="{{ $profile->age }}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <!-- <label class="label" for="music_type">Music</label> -->

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="music_type" placeholder="music" value="{{ $profile->music_type }}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label class="label" for="read_write_music">Read/Write Music</label>

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="read_write_music" placeholder="1 to 10" value="{{ $profile->read_write_music }}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label class="label" for="improvise">Improvise</label>

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="improvise" placeholder="1 to 10" value="{{ $profile->improvise }}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label class="label" for="ear">Ear</label>

                                        <div class="control">
                                            <input readonly class="form-control-plaintext" type="text" class="input" name="ear" placeholder="1 to 10" value="{{ $profile->ear }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="field">


                                        <div class="control">
                                            <br>
                                            <img class="profileImg" src="/files/{{ $profile->photo }}" />

                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <!-- <label class="label" for="desc">Description</label> -->

                                        <div class="control">
                                            <textarea readonly class="form-control-plaintext" name="desc" class="textarea" rows=5 placeholder="Description">{{ $profile->desc }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <!-- <label class="label" for="influences">Influences</label> -->

                                        <div class="control">
                                            <textarea readonly class="form-control-plaintext" name="influences" class="textarea" rows=5 placeholder="Influences">{{ $profile->influences }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <br>
                        </form>

                        <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-success btn-sm">Edit Profile</a>


                        <br>
                    </div>

                    <br>


                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection