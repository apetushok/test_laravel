
<nav class="flex items-center justify-between px-5 h-[65px] bg-white border-b border-slate-200">
    <a href="{{route('home')}}" class="hover:text-red-500 text-blue-500">Home</a>
    @auth
        <span class="text-black-800-important">Welcome {{ \Illuminate\Support\Facades\Auth::user()->name }}!</span>
        <a href="{{route('logout')}}" class="hover:text-red-500 text-blue-500">Logout</a>
    @else
        <a href="{{route('login')}}" class="hover:text-red-500 text-blue-500">Login</a>
    @endauth
</nav>
