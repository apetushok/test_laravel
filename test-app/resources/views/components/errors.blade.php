
@if($errors->all())
    <div class="pt-5 px-5 text-red-500">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
