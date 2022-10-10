
@extends('layouts.layout')

@section('title', 'Post Page')

@section('content')
    <div class="pt-5 px-5">
        <h1>Creating of a new post</h1>
    </div>

    @include('components.errors')

    <form action="{{route('store')}}" method="POST" class="flex flex-col pt-5 px-5">
        @csrf
        <input name="title" id="title" type="text" class="mb-5 px-3 py-2 text-sm rounded border border-gray-300 w-[300px]" placeholder="Title"/>

        <textarea cols="3" name="description" id="description" class="mb-5 px-3 py-2 text-sm rounded border border-gray-300 w-[300px]" placeholder="Description"></textarea>

        <textarea cols="7" name="content" id="content" class="mb-5 px-3 py-2 text-sm rounded border border-gray-300 w-[300px]" placeholder="Content"></textarea>

        <button type="submit" class="mb-7 rounded-full bg-orange-100 py-3 w-[100px] text-sm text-slate-800 hover:text-slate-100 hover:bg-orange-500">Add</button>
    </form>
@endsection
