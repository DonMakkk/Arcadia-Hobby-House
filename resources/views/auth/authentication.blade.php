<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Hobby House</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}?v=2" type="image/png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
         <div class="container d-flex flex-column align-items-center justify-content-center vh-sm-100">
     <header>
           <div class="container d-flex flex-column align-items-center justify-content-center pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center rounded-circle position-relative" style="width: 7em; height: 7em;">
            <img src="{{ asset('images/logo.png') }}" alt="Arcadia Logo" class="w-100 h-100 object-fit-contain">
        </div>
        <h1>Arcadia Hobby House</h1>
        <p class="text-secondary">Shop or manage your store</p>
</div>
     </header>
     <main>
    @yield('main')
     </main>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>