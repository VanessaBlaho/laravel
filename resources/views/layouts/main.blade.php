<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.scss')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&family=Roboto:wght@100;500&display=swap" rel="stylesheet">
</head>
@include('common/navigation', ['current_page' => $current_page])
<body>

    @include('common.search')
  
   @yield('content')
   @yield('index')
  
   
      {{-- <div id="partners">

        

      </div> --}}


      {{-- <div id="latest-books">

      </div> --}}
      @viteReactRefresh
 
   {{-- @vite('resources/js/app.jsx') --}}
   @vite('resources/js/partners.jsx')
   @vite('resources/js/latest-books.js')

 

</body>
</html>