@extends('layouts.app')

@section('content')


<search-component v-bind:profileid="{{ Auth::user()->profile->id }}"></search-component>


@endsection



