<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @component('_blogs/_header')
    @endcomponent

    @component('_blogs/_banner')
    @endcomponent

    @component('_blogs/_service')
        
    @endcomponent

    @component('_blogs/_about')
        
    @endcomponent

    @component('_blogs/_price')
        
    @endcomponent
    @component('_blogs/_work')
        
    @endcomponent
    @component('_blogs/_comments')
        
    @endcomponent
    @component('_blogs/_footer')
        
    @endcomponent
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>