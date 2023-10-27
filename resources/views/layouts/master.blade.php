<!DOCTYPE html>
<html lang="en" data-lock>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VShop @yield('title') </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        @php $NAME_BLADE = trim(View::yieldContent('bladename')); @endphp

        @if (file_exists(public_path('css/'.$NAME_BLADE.'.css')))
            <link rel="preload" as="style" href="{{ mix('css/'.$NAME_BLADE.'.css') }}">
            <link rel="stylesheet" href="{{ mix('css/'.$NAME_BLADE.'.css') }}">
        @endif
    </head>
    <body>
        <!-- Navigation-->
        @include('components.layouts.header')


        @yield('content')

        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>


        @if (file_exists(public_path('/js/'.$NAME_BLADE.'.js')))
            <script defer src="{{ mix('/js/'.$NAME_BLADE.'.js') }}"></script>
        @endif
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1a8634a8b0.js" crossorigin="anonymous"></script>
    </body>
</html>
