<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('stylesheet')
    <!-- IM STYLING MAIN CONTENT -->
</head>
<body>


    <header>
    </header>

    <main>

        <aside>

        </aside>

        @yield('main-content')

    </main>

    <footer>

    </footer>

    
</body>
</html>