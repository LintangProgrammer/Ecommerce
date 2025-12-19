<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Website')</title>

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Konten --}}
  <main>
    @yield('content')
  </main>

  {{-- JS --}}
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>