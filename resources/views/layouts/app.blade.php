<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Laravek App')</title>

        <link rel="stylesheet" href="styles/flowbite.min.css">
        <script src="styles/flowbite.min.js"></script>
    
    </head>
    <body class="bg-gray-100 text-gray-800 font-sans">

    <!--navbar-->
    @include('components.menu')

    <!--main content-->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">@yield('page_title', 'Judul Halaman')</h2>
            @yield('content')
        </div>
    </main>
        
    <!-- footer -->
     <footer class="mt-18 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Laravel App. All rightd reserved.
     </footer>
    </body>
</html>