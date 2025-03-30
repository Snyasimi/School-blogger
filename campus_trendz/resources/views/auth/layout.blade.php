<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('/css/users/layout.css') }}" rel="stylesheet">
    @stack('stylesheet')
      <!-- MAIN CONTENT IS STYLED BY THE COMPONENT ITESLF -->
</head>
<body>

    <header>
        cAmpus cRazE
    </header>
   

      <!-- MAIN CONTENT IS STYLED BY THE COMPONENT ITESLF -->

    @yield('main')



    <footer>

    </footer>
    
</body>
</html>