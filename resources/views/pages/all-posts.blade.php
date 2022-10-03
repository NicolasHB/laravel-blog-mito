<x-layouts.main-layout
title="Tous mes articles"
>
<div class="container pl-40 pt-10">
    <h1 class="font-black text-4xl pb-5">Tous mes articles</h1>
    @include('partials._table-allPosts')
    <div class=" justify-end flex pt-14">
            {{ $posts->links('pagination::tailwind') }}
    </div>
</div>
</x-layouts.main-layout>