@extends('layouts.layout')

@section('title', 'Login')

@section('content')
    <div class="pt-5 px-5">
        <h1>Login</h1>
    </div>

    @include('components.errors')

    <form action="{{route('authenticate')}}" method="POST" class="flex flex-col pt-5 px-5">
        @csrf

        <input name="email" id="email" type="email" class="mb-5 px-3 py-2 text-sm rounded border border-gray-300 w-[300px]" placeholder="Email"/>

        <input name="password" id="password" type="password" class="mb-5 px-3 py-2 text-sm rounded border border-gray-300 w-[300px]" placeholder="Password"/>

        <button type="submit" class="mb-7 rounded-full bg-orange-100 py-3 w-[100px] text-sm text-slate-800 hover:text-slate-100 hover:bg-orange-500">Login</button>
    </form>
@endsection
