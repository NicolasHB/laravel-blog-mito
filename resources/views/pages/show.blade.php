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
    
    <div class="my-14 bg-slate-400 rounded text-blue-500">
        <h2 class="text-4xl font-black">Commentaires</h2>
        @guest
            <p class="text-center text-white py-6">Connecte toi pour poster un commentaire</p>
        @endguest
        @auth
        <form class="pl-52 pt-10" action="{{ route('comment.store', $post->id) }}" method="POST" >
            @csrf
            <textarea name="content" id="" cols="130" rows="10" placeholder="Votre commentaire"></textarea>
            <x-error-msg name="content" />
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>     
        @endauth
        {{-- display to comment --}}
        <div class="">
            @forelse ( $post->comments as $comment )
            <div class="bg-blue-400 ">
                <p class="border border-black pl-4 text-xl text-white">{{ $comment->content }}</p>
                <p class="text-slate-700">créer le {{ $comment->created_at->format('j/m/Y')}}</p>
            </div>
            @empty
            <div class="">
                <p class="">Soyez le premier à écrire un commentaire</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
</x-layouts.main-layout>



