<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Hobby House</title>

    <link rel="icon" href="{{ asset('images/logo.png') }}?v=2" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column flex-md-row min-vh-100">

<!-- ================= DESKTOP SIDEBAR ================= -->
<aside class="d-none d-md-block vh-100" style="width:250px;">
    @include('admin.components.sidebar')
</aside>

<!-- ================= MOBILE BUTTON ================= -->
<div class="d-md-none position-relative d-flex align-items-center p-2 bg-primary text-white">

    <button class="btn btn-primary"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileSidebar">

        <i class="bi bi-list"></i>
    </button>

    <h5 class="mb-0 position-absolute top-50 start-50 translate-middle">
        Admin Dashboard
    </h5>

</div>


<!-- ================= MOBILE OFFCANVAS ================= -->
<div class="offcanvas offcanvas-start d-md-none"
     tabindex="-1"
     id="mobileSidebar">

    <div class="offcanvas-header bg-primary text-white">
        <h5 class="offcanvas-title">Arcadia Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0">
        @include('admin.components.sidebar')
    </div>

</div>

<!-- ================= MAIN CONTENT ================= -->
<main class="flex-grow-1 p-4">
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>