<x-layouts.main-layout
title="Tous mes utilisateurs"
>
<div class="container pl-40 pt-10">
    <h1 class="font-black text-4xl pb-5">Tous les utilisateurs</h1>
    @include('partials._table-allUsers');
    <div class=" justify-end flex pt-14">
            {{ $users->links('pagination::tailwind') }}
    </div>
</div>

</x-layouts.main-layout>