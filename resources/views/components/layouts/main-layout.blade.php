@props([
    'title'
])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Mito | {{ $title }}</title>
    {{-- import Tailwin --}}
    @vite('resources/css/app.css')
</head>
<body>
@include('components.nav.nav')
    {{ $slot }}
    
</body>
</html>