<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
  </head>
  <body>

    @include('partials.header')

    <main>
      <div class="container">
        <h2>LE LUNGHE</h2>
        <div class="box">
          @foreach ($array as $index => $pasta)
            @if ($pasta['tipo'] === 'lunga')
              <a href="/product/{{$index}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach
        </div>

        <h2>LE CORTE</h2>
        <div class="box">
          @foreach ($array as $index => $pasta)
            @if ($pasta['tipo'] === 'corta')
              <a href="/product/{{$index}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach
        </div>

        <h2>LE CORTISSIME</h2>
        <div class="box">
          @foreach ($array as $index => $pasta)
            @if ($pasta['tipo'] === 'cortissima')
              <a href="/product/{{$index}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach
        </div>
      </div>
    </main>

    @include('partials.footer')

  </body>
</html>
