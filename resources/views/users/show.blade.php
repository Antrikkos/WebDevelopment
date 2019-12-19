@extends('layouts.app')

@section('title','Post Detail')

@section('content')
    <p> {{ Auth::user()->name }}'s Information  </p>
    <ul>
        <li>User: {{ Auth::user()->name }}</li>
        <li>User-ID: {{ Auth::user()->id }}</li>
        <li>Job Title: {{ $profile->jobTitle ?? 'Unknown'}}</li>

    </ul>



    <p><a href="{{ route('posts.index') }}">News Feed</a></p>


@endsection