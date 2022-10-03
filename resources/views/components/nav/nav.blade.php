@php
  $idCo = 'hover:text-white hover:underline'
@endphp
<div class="navbar bg-blue-400">
  <div class="flex-1" id="logo">
    <a class="btn btn-ghost normal-case text-xl" >MITO Blog</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal p-0">
      <li><a href="/">Home</a></li>
      <li tabindex="0">
        <a>
          Pages
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 bg-base-100">
          <li><a href="{{ route('posts.create') }}">Add Articles</a></li>
          <li><a href="/about" >About</a></li>

        </ul>
      </li>
      <div class="" id="navitem">
        {{-- <li><a href="{{ route('posts.create') }}">Add Articles</a></li> --}}
        @guest
          <li><a class="{{ $idCo }}" href="{{ route('dashboard')}}">Dashboard</a></li>
          <li><a class="{{ $idCo }}" href="{{ route('login')}}">Connexion</a></li>
          <li><a class="{{ $idCo }}" href="{{ route('register')}}">Inscription</a></li>
        @endguest
        @auth
        
        <x-btn-logout />
        <span class="hover:underline">{{ Auth::user()->name }}</span>
        @endauth
      </div>
    </ul>
  </div>
</div>