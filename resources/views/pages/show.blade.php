<x-layouts.main-layout
:title="$post->title"
>
<div class="pt-10 p-10  ">
    <img src="{{$post->url_img}}" alt="{{$post->title}}">
    <div class="pt-5">
        <p class="font-bold text-2xl">{{$post->title}}</p>
        <p>{{$post->content}}</p>
        <div class="pt-5">
            <x-btn-delete :post="$post" />
        </div>
    </div>
</div>
</x-layouts.main-layout>