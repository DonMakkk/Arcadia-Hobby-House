<style>
  .sidebar {
    background: #1e2d5a;
    border-radius: 14px;
    overflow: hidden;
  }

  .sidebar-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 18px;
    font-size: 14px;
    font-weight: 600;
    color: rgba(255,255,255,0.65);
    transition: 0.2s;
    text-decoration: none;
    border-radius: 10px;
    margin: 2px 10px;
  }

  .sidebar-link:hover {
    background: rgba(255,255,255,0.08);
    color: #fff;
  }

  .sidebar-link.active {
    background: #2550d4;
    color: #fff;
  }

  .sidebar-link.logout:hover {
    color: #fca5a5;
    background: rgba(239,68,68,0.15);
  }

  /* Mobile improvement */
  @media (max-width: 768px) {
    .sidebar {
      border-radius: 5px;
    }
  }
</style>

<aside class="sidebar col-12 col-md-4 col-lg-3 mb-4 w-100">

  <!-- Profile -->
  <div class="text-center p-4 border-bottom border-light border-opacity-10">

    <div class="mx-auto mb-2 d-flex align-items-center justify-content-center"
         style="width:64px;height:64px;border-radius:50%;background:#4e85f4;
         color:#fff;font-size:24px;font-weight:800;
         box-shadow:0 0 0 4px rgba(78,133,244,0.28);">
      Q
    </div>

    <p class="text-white fw-bold mb-0">
      {{$user->first_name}} {{$user->last_name}}
    </p>

    <p class="text-white-50 small mb-2">
      {{$user->email}}
    </p>

    <span class="badge bg-light text-dark px-3 py-2">
      ⭐ Hobby Enthusiast
    </span>

  </div>

  <!-- Links -->
<nav class="py-3" role="tablist">

  <a class="sidebar-link active"
     data-bs-toggle="tab"
     href="#orders">
    <i class="fa-solid fa-box-open"></i>
    My Orders
  </a>

  <a class="sidebar-link"
     data-bs-toggle="tab"
     href="#wishlist">
    <i class="fa-regular fa-heart"></i>
    Wishlist
  </a>

  <a class="sidebar-link"
     data-bs-toggle="tab"
     href="#settings">
    <i class="fa-solid fa-gear"></i>
    Settings
  </a>

  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="sidebar-link w-100 border-0 bg-transparent text-start">
      <i class="fa-solid fa-right-from-bracket"></i>
      Logout
    </button>
  </form>

</nav>
</aside>