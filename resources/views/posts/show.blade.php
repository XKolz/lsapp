@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default"> &larr; Go Back</a>
    {{-- <a href="/posts" class="back-link">
        <span class="back-icon"> &larr;  Go Back</span>
    </a> --}}
    <h1>{{$post->title}}</h1>
   
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection