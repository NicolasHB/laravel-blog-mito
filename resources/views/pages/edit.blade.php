<x-layouts.main-layout
title="Add Articles"
> 
<div class="container">
    <h1 class="font-bold text-4xl pb-10 py-10 text-center">Update Post</h1>
    <form class="" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="">
            {{-- Title --}}
            <input class="block w-full rounded-lg border border-gray-400" type="text" name="title" id="" placeholder="Titre du post" value="{{ old('title', $post->title) }}">
            <x-error-msg name="title" />
            {{-- Content --}}
            <textarea name="Content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border border-gray-400" placeholder="Enter to the text">{{ old('Content', $post->Content)}}</textarea>
            <x-error-msg name="Content" />
            {{-- published --}}
            <div class="">
                <label for="">Publication</label>
                <input @checked(old('is_published', $post->is_published)) name="is_published" type="checkbox" value="is_published">
            </div>
            {{-- IMG --}}
            <div class="">
                <label for="">choose to picture</label>
                <input type="file" name="url_img" id="" class="block w-full rounded-lg border border-gray-400 mt-5">
            <x-error-msg name="url_img" />
            </div>
            {{-- <input type="text" name="url_img" id="" class="block w-full rounded-lg border border-gray-400 mt-5" placeholder="insérer votre image" value="https://source.unsplash.com/640x480/?person?/1"> --}}
            <div class="pt-5">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</x-layouts.main-layout>