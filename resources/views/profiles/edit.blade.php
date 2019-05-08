@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class='title link'>Edit profile</h1>

                    <!-- PASS ID FROM URL INSTEAD OF SIGNED IN -->

                    <example-component v-bind:profileid="{{ $profile->id }}"></example-component>

                    <form method="POST" action="/profiles/{{ $profile->id }}" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="field">
                            <label class="label link" for="title">Nickname</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="nickname" placeholder="nickname" value="{{ $profile->nickname }}">
                            </div>
                        </div>

                        <br>
                        <div class="field">
                            <label class="label link" for="city">City</label>

                            <div class="control">
                                <input class="form-control" type="text" class="textarea" name="city" placeholder="city" value="{{ $profile->city }}">
                            </div>
                        </div>
                        <br>
                        
                        
                        <div class="field">
                            <label class="label link" for="age">Age</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="age" placeholder="age" value="{{ $profile->age }}">
                            </div>
                        </div>
                        <br>
                        <div class="field">

                            <div class="control">

                                <img class="editProfileImg" src="/files/{{ $profile->photo }}" />

                                <label class="link">Profile Image</label>
                                <div class="file-field">
                                    <div class="btn btn-secondary btn-sm float-left">
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <br>
                            <label class="label link" for="desc">Introduce yourself!</label>

                            <div class="control">
                                <textarea class="form-control" name="desc" class="textarea" maxlength=250>{{ $profile->desc }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label link" for="influences">Musical Influences</label>

                            <div class="control">
                                <textarea class="form-control" name="influences" class="textarea" maxlength=250>{{ $profile->influences }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label link" for="genre">What genre(s) do you play?</label>

                            <div class="control">
                                <input class="form-control" type="text" class="input" name="genre" placeholder="classic rock" value="{{ $profile->genre }}">
                            </div>
                        </div>
                        <br>
                        
                        <div class="field">
                            <label class="label link" for="read_write_music">10 being the highest, how well do you read/write music?</label>
                            <div class="control">
                                                <!-- FIX DROPDOWN WIDTH -->
                            <select id="dropdown" class="form-control" type="text" name="read_write_music" class="input">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                if ($i == $profile->read_write_music) {
                                    ?><option selected value="{{ $profile->read_write_music }}">{{ $profile->read_write_music }}</option>
                                    <?php
                                    } else { 
                                    ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php 
                                    }
                            } ?>
                            
                            </select>
                            </div>
                            
                        </div>
                        <br>
                        <div class="field">
                            <label class="label link" for="improvise">10 being the highest, how comfortable are you improvising/jamming?</label>

                            <div class="control">
                            <select id="dropdown" class="form-control" type="text" name="improvise" class="input">
                                
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                if ($i == $profile->improvise) {
                                    ?><option selected value="{{ $profile->improvise }}">{{ $profile->improvise }}</option>
                                    <?php
                                    } else { 
                                    ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php 
                                    }
                            } ?>


                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label class="label link" for="ear">10 being the highest, how is your ear?</label>

                            <div class="control">
                            <select id="dropdown" class="form-control" type="text" name="ear" class="input">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                if ($i == $profile->ear) {
                                    ?><option selected value="{{ $profile->ear }}">{{ $profile->ear }}</option>
                                    <?php
                                    } else { 
                                    ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php 
                                    }
                            } ?>


                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="btn btn-purple btn-block">Update profile</button>
                            </div>
                        </div>
                    </form>
                    <br>

                    <form method="POST" action="/profiles/{{ $profile->id }}">
                        @method('PATCH')
                        @csrf
                        <div class="field control">

                            <!-- <button type="submit" class="btn btn-danger">Delete profile</button> -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection