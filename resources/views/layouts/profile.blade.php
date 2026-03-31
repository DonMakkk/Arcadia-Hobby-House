<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Hobby House</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}?v=2" type="image/png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
       @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    @include('components.navbar')
    <header >
    @yield('header')
    </header>
   <main class="w-100">
  <div class="container py-4">

    <div class="d-flex flex-column flex-lg-row gap-md-4 gap-2">

      <!-- SIDEBAR -->
      <div class="col-12 col-lg-3">
        <div class="bg-[#1E3A5F] rounded-4 overflow-hidden">
          @include('components.profileSidebar')
        </div>
      </div>

      <!-- MAIN CONTENT -->
      <div class="col-12 col-lg-9">
       

        <div class="d-flex flex-column gap-3">
          @yield('main')
        </div>
      </div>

    </div>

  </div>
</main>
    <footer class="">
    @include('components.footer')
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
