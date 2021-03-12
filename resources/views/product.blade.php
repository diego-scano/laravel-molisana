<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    @include('partials.header')

    <img src="{{$array[$idProduct]['src-h']}}" alt="">
    <img src="{{$array[$idProduct]['src-p']}}" alt="">
    {{$array[$idProduct]['descrizione']}}

    @include('partials.footer')

  </body>
</html>
