@props([
    'url_img',
    'title',
    'content',
])
<div class="">
    <img src="{{$url_img}}" alt="{{$title}}">
    <div class="min-h-[250px]">
        <p class="font-bold text-2xl">{{$title}}</p>
        <p>{{Str::substr($content, 0, 90 )}}</p>
    </div>
</div>