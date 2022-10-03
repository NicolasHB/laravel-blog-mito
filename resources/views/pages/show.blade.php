<x-layouts.main-layout
:title="$post->title"
>
<div class="pt-10 p-10  ">
    <img src="{{ asset('storage/'. $post->url_img) }}" alt="{{$post->title}}">
    <div class="pt-5">
        <p class="font-bold text-2xl">{{$post->title}}</p>
        <p>{!! nl2br(e($post->content))!!}</p>
        @auth
        <div class="pt-5">
            <x-btn-delete :post="$post" />
            <a href="{{$post->id}}/edit" class="btn btn-success">Update</a>
        </div> 
        @endauth
    </div>
</div>
</x-layouts.main-layout>