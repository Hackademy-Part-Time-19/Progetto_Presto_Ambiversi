<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{$style ?? ''}}
</head>
<body>
    <x-nav></x-nav>
    <br>
    <x-success></x-success>
    <x-delete></x-delete>
    <x-warning></x-warning>
    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer></x-footer>

    <script src="{{asset('js/app.js')}}"></script>
    {{$script ?? ''}}

</body>
</html>