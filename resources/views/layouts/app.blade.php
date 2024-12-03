<!DOCTYPE html>
<html class="html h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">

    <title>@yield('title', 'Dev Skills')</title>


    <style>
      a{
        text-decoration: none;
        color: #01d28e;
      }
      a:hover{
        text-decoration: none;
        color: #03865b;
      }
      input[type="checkbox"] {
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: white;
        cursor: pointer;
      }

      input[type="checkbox"]:checked {
        background-color: #01d28e ; /* Checked color */
        border-color: #39ebaf ;
      }
    </style>



  </head>
  <body class="min-h-full bg-gray-100">

    @if(Auth::check())
      <x-navigation />
    @endif

    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
    @endif

    <main>
      @yield('content')
    </main>
    
    <script src="{{asset('storage/js/bootstrap.bundle.js')}}"></script>
  </body>
</html>
