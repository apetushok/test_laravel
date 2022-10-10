
<div class="mx-5 my-7 pb-5 border-b border-slate-200">
    <h2 class="font-bold text-lg mb-2">
        <a href="{{route('post', $post)}}" class="hover:text-gray-700">
            {{ $post->title }}
        </a>
    </h2>
    <p>
        {{ $post->description }}
    </p>
    <div class="flex justify-between mt-2 text-sm">
        <div class="font-medium">
            {{ $post->user->name }} | {{ $post->created_at->format('j M, Y') }}
        </div>
        <a href="#">Comments ({{ $post->comments->count() }})</a>
    </div>
</div>
