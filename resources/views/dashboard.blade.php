@php
  $idCo = 'hover:text-white hover:underline block pb-3 pl-5'
@endphp
<x-layouts.main-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <h1 class="text-center text-4xl font-bold pt-5">Welcome <span class="text-blue-500"> {{ Auth::user()->name }} </span> to the Dashboard</h1>

        <div class="py-12 ">
            <a href="{{ route('posts.create') }}" class="{{ $idCo }}">New post</a>
            <a href="{{ route('posts.all') }}" class="{{ $idCo }}">La liste des posts</a>
            <a href="{{ route('users.all') }}" class="{{ $idCo }}">La liste des users</a>
        </div>
    </div>
</x-layouts.main-layout>
