<header class="sticky-top bg-white border-bottom shadow-sm ">
  <div class="container d-flex align-items-center gap-3 py-2">

    <!-- Logo -->
    <a href="/" class="d-flex align-items-center gap-2 text-decoration-none flex-shrink-0">
      <img src="{{ asset('images/logo.png') }}?v=2" 
           alt="icon" width="60" height="60">
      <div class="d-none d-sm-block">
        <div class="fw-bold lh-1 title-main text-dark">Arcadia</div>
        <div class="lh-1 title-sub text-secondary">Hobby House</div>
      </div>
    </a>
    <!-- Search -->
    <form class="flex-grow-1 d-none d-sm-flex justify-content-center  ">
    <div class="position-relative w-100 ">
  <!-- Search Icon -->
  <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
  <!-- Input -->
  <input type="text"
    class="form-control ps-5 pe-3 py-2 rounded-3 custom-search"
    placeholder="Search products, categories...">
</div>
    </form>
    <!-- Nav Links -->
    <nav class="d-none d-lg-flex align-items-center gap-2">
      <button class="btn btn-sm dropdown-toggle">
        Categories
      </button>
      <a href="#" class="btn btn-sm nav-btn">Featured</a>
      <a href="#" class="btn btn-sm nav-btn">Best Sellers</a>
    </nav>
    <!-- Right Side -->
    <div class="d-flex align-items-center gap-2 ms-auto ms-lg-0">
      <!-- User -->
      <button class="btn btn-light rounded-circle d-flex align-items-center justify-content-center  bg-primary">
        <i class="bi bi-person text-light"></i>
      </button>
      <!-- Cart -->
      <a href="#" class="btn btn-light rounded-circle ">
        <i class="bi bi-cart"></i>
      </a>
      <!-- Mobile Menu -->
      <button class="btn btn-light d-lg-none">
        <i class="bi bi-list"></i>
      </button>
    </div>
  </div>
</header>