@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')
    <div class="px-5 py-3 flex flex-col justify-between items-start">
        <h1 class="text-lg font-bold mb-5">Profile</h1>
        <a href="{{route('create_form')}}" class="rounded-full bg-orange-100 py-3 px-5 w-[100px] text-sm text-slate-800 hover:text-slate-100 hover:bg-orange-500">Add post</a>
    </div>
    <div class="py-3">
        @each('components.post', $posts, 'post', 'components.empty')
    </div>
    {{ $posts->links('components.pagination') }}
@endsection
