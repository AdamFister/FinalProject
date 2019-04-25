@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class='title'>Edit profile</h1>

                    <form method="POST" action="/profiles/{{ $profile->id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="field">
                            <label class="label" for="title">Nickname</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="nickname" placeholder="nickname" value="{{ $profile->nickname }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="city">City</label>

                            <div class="control">
                                <input class="form-control" type="text" class="textarea" name="city" placeholder="city" value="{{ $profile->city }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="age">Age</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="age" placeholder="age" value="{{ $profile->age }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="photo">Photo</label>

                            <div class="control">
                                <textarea class="form-control" name="photo" class="textarea">{{ $profile->photo }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="desc">Description</label>

                            <div class="control">
                                <textarea class="form-control" name="desc" class="textarea">{{ $profile->desc }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="influences">Influences</label>

                            <div class="control">
                                <textarea class="form-control" name="influences" class="textarea">{{ $profile->influences }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="music_type">Music</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="music_type" placeholder="classic rock" value="{{ $profile->music_type }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="read_write_music">Read/Write Music</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="read_write_music" placeholder="1 to 10" value="{{ $profile->read_write_music }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="improvise">Improvise</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="improvise" placeholder="1 to 10" value="{{ $profile->improvise }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label" for="ear">Ear</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="ear" placeholder="1 to 10" value="{{ $profile->ear }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="btn btn-primary">Update profile</button>
                            </div>
                        </div>
                    </form>
                    <br>

                    <form method="POST" action="/profiles/{{ $profile->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="field control">

                            <button type="submit" class="btn btn-danger">Delete profile</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection