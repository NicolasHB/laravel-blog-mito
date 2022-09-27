<x-layouts.main-layout
title="Accueil"
>
<p class="">Hello world</p>
@foreach ($posts as $post )
    <li class="font-bold">{{$post->name}}</li>
    <p>{{$post->description}}</p>
    
@endforeach
    

</x-layouts.main-layout>

