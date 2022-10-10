@extends('layouts.layout')

@section('title', 'Post Page')

@section('content')
    <div class="pt-5 px-5"><a href="{{route('home')}}">Back</a></div>
    <div class="py-3 px-5">
        <h1 class="font-bold text-lg my-5">{{$post->title}}</h1>
        <p>{{$post->content}}</p>
    </div>
@endsection
