@extends('admin.layout.admin')

@section('content')

<div class="tab-content">

  <!-- DASHBOARD -->
  <div class="tab-pane fade show active" id="dashboard">

    <div class="container-fluid">

      <!-- Header -->
      <div class="mb-4">
        <h1 class="fw-bold text-primary" style="font-size:22px;">Dashboard Overview</h1>
        <p class="text-secondary small">Welcome back, Admin! Here's what's happening at Arcadia.</p>
      </div>

      <!-- Cards -->
      <div class="row g-3 mb-4">

        <!-- Total Products -->
        <div class="col-12 col-md-4">
          <a href="/admin/products" class="text-decoration-none">
            <div class="card border-primary-subtle rounded-4 shadow-sm h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                  <div class="bg-primary bg-opacity-10 p-2 rounded">
                    <i class="bi bi-box text-primary"></i>
                  </div>
                  <i class="bi bi-arrow-up-right text-primary"></i>
                </div>
                <h3 class="fw-bold text-dark">12</h3>
                <p class="fw-semibold mb-0">Total Products</p>
                <small class="text-secondary">2 low stock</small>
              </div>
            </div>
          </a>
        </div>

        <!-- Total Orders -->
        <div class="col-12 col-md-4">
          <a href="/admin/orders" class="text-decoration-none">
            <div class="card border-primary-subtle rounded-4 shadow-sm h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                  <div class="bg-indigo bg-opacity-10 p-2 rounded">
                    <i class="bi bi-bag text-primary"></i>
                  </div>
                  <i class="bi bi-arrow-up-right text-primary"></i>
                </div>
                <h3 class="fw-bold text-dark">5</h3>
                <p class="fw-semibold mb-0">Total Orders</p>
                <small class="text-secondary">3 pending</small>
              </div>
            </div>
          </a>
        </div>

        <!-- Revenue -->
        <div class="col-12 col-md-4">
          <a href="/admin/orders" class="text-decoration-none">
            <div class="card border-primary-subtle rounded-4 shadow-sm h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                  <div class="bg-success bg-opacity-10 p-2 rounded">
                    <i class="bi bi-currency-dollar text-success"></i>
                  </div>
                  <i class="bi bi-arrow-up-right text-primary"></i>
                </div>
                <h3 class="fw-bold text-dark">$860</h3>
                <p class="fw-semibold mb-0">Total Revenue</p>
                <small class="text-secondary">this period</small>
              </div>
            </div>
          </a>
        </div>

      </div>

      <!-- Bottom Section -->
      <div class="row g-3">

        <!-- Recent Orders -->
        <div class="col-lg-6">
          <div class="card rounded-4 border-primary-subtle shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h6 class="fw-bold">Recent Orders</h6>
                <a href="/admin/orders" class="small text-primary text-decoration-none">
                  View all <i class="bi bi-chevron-right"></i>
                </a>
              </div>

              <div class="p-3 bg-light rounded-3 mb-2 d-flex justify-content-between">
                <div>
                  <div class="fw-semibold">ORD-001</div>
                  <small class="text-secondary">Alex Johnson · 2026-02-20</small>
                </div>
                <div class="text-end">
                  <span class="badge bg-success-subtle text-success">Delivered</span>
                  <div class="fw-bold">$135</div>
                </div>
              </div>

              <div class="p-3 bg-light rounded-3 mb-2 d-flex justify-content-between">
                <div>
                  <div class="fw-semibold">ORD-002</div>
                  <small class="text-secondary">Maria Santos · 2026-02-22</small>
                </div>
                <div class="text-end">
                  <span class="badge bg-primary-subtle text-primary">Shipped</span>
                  <div class="fw-bold">$175</div>
                </div>
              </div>

              <div class="p-3 bg-light rounded-3 mb-2 d-flex justify-content-between">
                <div>
                  <div class="fw-semibold">ORD-003</div>
                  <small class="text-secondary">Sam Lee · 2026-02-23</small>
                </div>
                <div class="text-end">
                  <span class="badge bg-info-subtle text-info">Processing</span>
                  <div class="fw-bold">$90</div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Low Stock -->
        <div class="col-lg-6">
          <div class="card rounded-4 border-primary-subtle shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h6 class="fw-bold text-warning">
                  <i class="bi bi-exclamation-triangle me-1"></i> Low Stock Alerts
                </h6>
                <a href="/admin/inventory" class="small text-primary text-decoration-none">
                  Manage <i class="bi bi-chevron-right"></i>
                </a>
              </div>

              <div class="d-flex align-items-center p-2 bg-warning bg-opacity-10 border border-warning rounded-3 mb-2">
                <img src="https://images.unsplash.com/photo-1613771404784-3a5686aa2be3?w=400&q=80"
                     class="rounded me-2" width="40" height="40">
                <div class="flex-grow-1">
                  <div class="small fw-semibold">Magic: The Gathering Commander Deck</div>
                  <small class="text-secondary">Trading Cards</small>
                </div>
                <span class="badge bg-warning text-dark">5 left</span>
              </div>

              <div class="d-flex align-items-center p-2 bg-warning bg-opacity-10 border border-warning rounded-3">
                <img src="https://images.unsplash.com/photo-1610213880945-9b020ccc2843?w=400&q=80"
                     class="rounded me-2" width="40" height="40">
                <div class="flex-grow-1">
                  <div class="small fw-semibold">LEGO Technic Bugatti Chiron</div>
                  <small class="text-secondary">LEGO Sets</small>
                </div>
                <span class="badge bg-warning text-dark">3 left</span>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- PRODUCTS TAB -->
  <div class="tab-pane fade" id="products">
    <div class="container-fluid">
      <h3>Products Content Here</h3>
    </div>
  </div>
  {{-- Inventory --}}
   <div class="tab-pane fade" id="inventory">
    <div class="container-fluid">
      <h3>Inventory</h3>
    </div>
  </div>
{{-- Orders --}}
   <div class="tab-pane fade" id="orders">
    <div class="container-fluid">
      <h3>Orders</h3>
    </div>
  </div>
</div>

@endsection