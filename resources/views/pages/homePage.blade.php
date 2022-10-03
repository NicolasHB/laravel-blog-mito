<x-layouts.main-layout
title="Accueil"
>
<div class="pr-20 pl-20">
    <p class="text-center text-4xl pt-9 pb-9 font-black">Mito Blog | Laravel</p>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-3" id="container_card">
            @forelse ($posts as $post )
                <a href="posts/{{$post->id}}">
                    <x-cards.post-card :title="$post->title" :url_img="$post->url_img" :content="$post->content"/>
                </a>
            @empty
                <p class="text-red-500 text-center">post is not existing</p>
            @endforelse
        </div>
        <div class=" justify-end flex">
            {{ $posts->links('pagination::tailwind') }}
        </div>
</div>  

</x-layouts.main-layout>

