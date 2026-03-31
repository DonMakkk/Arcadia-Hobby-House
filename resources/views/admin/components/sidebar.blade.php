<!-- admin.components.sidebar -->

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
    <nav class="flex-grow-1 p-2">

        <a href="/admin/dashboard"
           class="d-flex align-items-center gap-2 p-2 rounded text-white text-decoration-none">
            <i class="bi bi-grid"></i> Dashboard
        </a>

        <a href="/admin/products"
           class="d-flex align-items-center gap-2 p-2 rounded bg-light text-primary text-decoration-none fw-semibold">
            <i class="bi bi-box"></i> Products
        </a>

        <a href="/admin/inventory"
           class="d-flex align-items-center gap-2 p-2 rounded text-white text-decoration-none">
            <i class="bi bi-archive"></i> Inventory
        </a>

        <a href="/admin/orders"
           class="d-flex align-items-center gap-2 p-2 rounded text-white text-decoration-none">
            <i class="bi bi-receipt"></i> Orders
        </a>

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