<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BankSysteem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        @extends('components.header')    
    </header>
    <main>
        @yield('content')    
    </main>
    <footer>
        @extends('components.footer')    
    </footer>
</body>
</html>