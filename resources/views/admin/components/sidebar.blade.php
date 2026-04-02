<!-- admin.components.sidebar -->
<style>
/* default */
.nav-link {
    color: white !important;
}

/* ACTIVE STYLE (your design) */
.nav-link.active {
    background-color: #f8f9fa !important; /* same as bg-light */
    color: #0d6efd !important;           /* text-primary */
    font-weight: 600;
}

/* hover (optional) */
.nav-link:hover {
    background-color: rgba(255,255,255,0.1);
}
</style>
<div class="d-flex flex-column text-white h-100 w-100"
     style="background-color: DarkBlue;">

    <!-- HEADER -->
    <div class="p-3 border-bottom">
        <div class="d-flex align-items-center gap-2">
            <img src="https://copilot.microsoft.com/th/id/BCO.31897df1-b7a9-45f9-9065-898d6b504fcd.png"
                 style="width:40px; height:40px;">

            <div>
                <div class="fw-bold small">Arcadia Admin</div>
                <div class="text-light small">Control Panel</div>
            </div>
        </div>
    </div>

    <!-- NAV -->
  

        <!-- DASHBOARD -->
    <nav class="nav flex-column p-2 flex-grow-1">

     

    <!-- DASHBOARD -->
    <button
        class="nav-link active d-flex align-items-center gap-2 p-2 rounded text-white text-start border-0 bg-transparent"
        data-bs-toggle="tab"
        data-bs-target="#dashboard"
        type="button">
        <i class="bi bi-grid"></i> Dashboard
    </button>

    <!-- PRODUCTS -->
    <button
        class="nav-link d-flex align-items-center gap-2 p-2 rounded text-white text-start border-0 bg-transparent"
        data-bs-toggle="tab"
        data-bs-target="#products"
        type="button">
        <i class="bi bi-box"></i> Products
    </button>

    <!-- LINKS (unchanged) -->
   <button
        class="nav-link d-flex align-items-center gap-2 p-2 rounded text-white text-start border-0 bg-transparent"
        data-bs-toggle="tab"
        data-bs-target="#inventory"
        type="button">
       <i class="bi bi-archive"></i> Inventory
    </button>

    <button
        class="nav-link d-flex align-items-center gap-2 p-2 rounded text-white text-start border-0 bg-transparent"
        data-bs-toggle="tab"
        data-bs-target="#orders"
        type="button">
       <i class="bi bi-receipt"></i> Orders
    </button>

</nav>


  

    <!-- FOOTER -->
    <div class="p-3 border-top">

        <div class="d-flex align-items-center gap-2 mb-2">
            <div class="bg-light text-primary rounded-circle d-flex justify-content-center align-items-center"
                 style="width:30px; height:30px;">
                A
            </div>

            <div>
                <div class="small fw-semibold">Admin User</div>
                <div class="small text-light">Administrator</div>
            </div>
        </div>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-outline-light w-100">
                <i class="bi bi-box-arrow-left"></i> Logout
            </button>
        </form>

    </div>

</div>