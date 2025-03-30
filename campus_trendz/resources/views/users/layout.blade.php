<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <link href="{{ asset('css/users/layout.css')}}" rel="stylesheet">

    @stack('stylesheet')
    <!-- MAIN CONTENT IS STYLED BY THE COMPONENT ITESLF -->
</head>



<body>

    <nav class="nav-bar">

        <h2>CAmpuscRazE</h2>

        <form action="#" method="GET">
            @csrf
            <input type="text" name="query">

            <button type="submit">Search</button>
        </form>
        
        <ul class="">
            <!-- CONDITIONAL LOGIC LOGIN?LOGOUT -->
            <li>Login</li>
            <li>Logout</li>

        </ul>


    </nav>



      <!-- MAIN CONTENT IS STYLED BY THE COMPONENT ITESLF -->
    @yield('main')

    <footer>
        <h3>Campus craze@2025
    </footer>
    
</body>
</html>