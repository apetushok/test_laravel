@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')
    <div class="py-3">
        @each('components.post', $posts, 'post', 'components.empty')
    </div>
    {{ $posts->links('components.pagination') }}
@endsection
