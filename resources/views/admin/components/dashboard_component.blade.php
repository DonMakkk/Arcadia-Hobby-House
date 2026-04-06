@extends('admin.layout.admin')

@section('content')
<div class="tab-content">

  <!-- DASHBOARD -->
  <div class="tab-pane fade " id="dashboard">

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
                <h3 class="fw-bold text-dark">{{count($products)}}</h3>
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
<div class="tab-pane fade show active" id="products">
  <div class="container-fluid">

    <class="container-fluid p-4" style="background:#F1F5F9; min-height:100vh;">

      <!-- HEADER -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h3 class="fw-bold text-primary">Inventory Management</h3>
          <small class="text-muted">{{ count($products) }} total products</small>
        </div>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
          + Add Product
        </button>
      </div>

      <!-- ADD MODAL -->
      <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title fw-bold">Add New Product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
              <form method="POST" action="{{ route('addProduct') }}" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                  <div class="col-md-6">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Category</label>
                    <select name="category" class="form-select">
                      <option disabled selected>Select category</option>
                      <option value="board games">Board Games</option>
                      <option value="trading cards">Trading Cards</option>
                      <option value="lego sets">LEGO Sets</option>
                      <option value="collectibles">Collectibles</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                  </div>

                </div>

                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Save Product</button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>


      <!-- AFTER (fixed) -->
<div class="d-flex gap-2 mb-3 flex-wrap align-items-start">

  <div class="position-relative">
    <input type="text" id="searchInput" class="form-control" placeholder="Search products..." style="min-width:220px;">
    <div id="suggestions"
         class="position-absolute bg-white border rounded shadow-sm d-none"
         style="z-index:999; min-width:250px; top:100%; left:0; margin-top:4px;">
    </div>
  </div>

  
 <select id="categoryFilter" class="form-select w-auto">
  <option value="">All Categories</option>
  <option value="board games">Board Games</option>
  <option value="trading cards">Trading Cards</option>
  <option value="lego sets">LEGO Sets</option>
  <option value="collectibles">Collectibles</option>
</select>

       <select id="sortFilter" class="form-select w-auto">
  <option value="name">Sort by Name</option>
  <option value="price">Sort by Price</option>
</select>
  <button class="btn btn-outline-primary">Filter</button>

</div>

      <!-- AFTER (fixed) -->




      <!-- FILTERS -->




      <!-- TABLE -->
      <div class="card border-0 shadow-sm">
        <div class="table-responsive">
          <table class="table align-middle mb-0">

            <thead class="table-light">
              <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody id="productTableBody">

              @foreach($products as $item)
              <tr>

                <td>
                  <div class="d-flex align-items-center gap-3">
                    <img src="{{ asset('storage/' . $item->image) }}" width="40" height="40" class="rounded">
                    <span class="fw-semibold">{{ $item->name }}</span>
                  </div>
                </td>

                <td>{{ $item->category }}</td>
                <td class="fw-bold">₱{{ $item->price }}</td>
                <td>
                  <span class="badge bg-success-subtle text-success">
                    {{ $item->stock }} units
                  </span>
                </td>

                <td>

                  <button class="btn btn-sm btn-outline-secondary"
                          data-bs-toggle="modal"
                          data-bs-target="#viewModal{{ $item->id }}">
                    View
                  </button>

                  <!-- EDIT BUTTON -->
                  <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal{{ $item->id }}">
                    Edit
                  </button>

                  <button class="btn btn-sm btn-outline-danger"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal{{ $item->id }}">
                    Delete
                  </button>

                  <!-- EDIT MODAL -->
                  <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h5 class="modal-title fw-bold">Update Product</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                          <form method="POST"
                                action="{{ route('updateProduct', $item->id) }}"
                                enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="row g-3">

                              <div class="col-md-6">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ $item->name }}">
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                  <option value="board games" {{ $item->category == 'board games' ? 'selected' : '' }}>Board Games</option>
                                  <option value="trading cards" {{ $item->category == 'trading cards' ? 'selected' : '' }}>Trading Cards</option>
                                  <option value="lego sets" {{ $item->category == 'lego sets' ? 'selected' : '' }}>LEGO Sets</option>
                                  <option value="collectibles" {{ $item->category == 'collectibles' ? 'selected' : '' }}>Collectibles</option>
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" class="form-control"
                                       value="{{ $item->price }}">
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Stock</label>
                                <input type="number" name="stock" class="form-control"
                                       value="{{ $item->stock }}">
                              </div>

                              <div class="col-12">
                                <label class="form-label">Change Image (optional)</label>
                                <input type="file" name="image" class="form-control">
                              </div>

                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                Update Product
                              </button>
                            </div>

                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- VIEW MODAL -->
                  <div class="modal fade" id="viewModal{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h5 class="modal-title fw-bold">Product Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                              <h5>{{ $item->name }}</h5>
                              <p><strong>Category:</strong> {{ $item->category }}</p>
                              <p><strong>Price:</strong> ₱{{ $item->price }}</p>
                              <p><strong>Stock:</strong> {{ $item->stock }}</p>
                              <p><strong>Description:</strong> {{ $item->description }}</p>
                              <button class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit Product</button>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- DELETE MODAL -->
                  <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h5 class="modal-title fw-bold">Confirm Delete</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                          <p>Are you sure you want to delete "{{ $item->name }}"?</p>
                          <p class="text-muted">This action cannot be undone.</p>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <form method="POST" action="{{ route('admin.removeProduct', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>

                </td>

              </tr>
              @endforeach

            </tbody>

          </table>
        </div>
      </div>

    </div>
  </div>
</div>
        
{{-- Orders --}}
   <div class="tab-pane fade" id="orders">
    <div class="container-fluid">
      <!-- MAIN CONTENT (BOOTSTRAP 5) -->
<div class="container-fluid p-4" style="background:#F1F5F9; min-height:100vh;">

    <!-- HEADER -->
    <div class="mb-4">
        <h4 class="fw-bold text-primary">Order Management</h4>
        <small class="text-muted">5 total orders</small>
    </div>

    <!-- STATUS CARDS -->
    <div class="row g-3 mb-4">

        <div class="col-6 col-md">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">2</h5>
                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">1</h5>
                    <span class="badge bg-primary-subtle text-primary">Processing</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">1</h5>
                    <span class="badge bg-secondary-subtle text-purple">Shipped</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">1</h5>
                    <span class="badge bg-success-subtle text-success">Delivered</span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">0</h5>
                    <span class="badge bg-danger-subtle text-danger">Cancelled</span>
                </div>
            </div>
        </div>

    </div>

    <!-- SEARCH + FILTER -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body d-flex flex-wrap gap-2">

            <input type="text" class="form-control flex-grow-1"
                   placeholder="Search by order ID, customer name, or email...">

            <select class="form-select w-auto">
                <option>All Statuses</option>
                <option>Pending</option>
                <option>Processing</option>
                <option>Shipped</option>
                <option>Delivered</option>
                <option>Cancelled</option>
            </select>

        </div>
    </div>

    <!-- TABLE -->
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- ROW -->
                    <tr>
                        <td class="fw-bold">ORD-001</td>
                        <td>
                            <div class="fw-semibold">Alex Johnson</div>
                            <small class="text-muted">alex@example.com</small>
                        </td>
                        <td>2026-02-20</td>
                        <td>3 item(s)</td>
                        <td class="fw-bold">₱134.97</td>
                        <td>
                            <span class="badge bg-success-subtle text-success">Delivered</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">ORD-002</td>
                        <td>
                            <div class="fw-semibold">Maria Santos</div>
                            <small class="text-muted">maria@example.com</small>
                        </td>
                        <td>2026-02-22</td>
                        <td>2 item(s)</td>
                        <td class="fw-bold">₱174.98</td>
                        <td>
                            <span class="badge bg-secondary-subtle text-dark">Shipped</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">ORD-003</td>
                        <td>
                            <div class="fw-semibold">Sam Lee</div>
                            <small class="text-muted">sam@example.com</small>
                        </td>
                        <td>2026-02-23</td>
                        <td>1 item(s)</td>
                        <td class="fw-bold">₱89.99</td>
                        <td>
                            <span class="badge bg-primary-subtle text-primary">Processing</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">ORD-004</td>
                        <td>
                            <div class="fw-semibold">Jordan Kim</div>
                            <small class="text-muted">jordan@example.com</small>
                        </td>
                        <td>2026-02-24</td>
                        <td>2 item(s)</td>
                        <td class="fw-bold">₱64.98</td>
                        <td>
                            <span class="badge bg-warning-subtle text-warning">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">ORD-005</td>
                        <td>
                            <div class="fw-semibold">Taylor Brown</div>
                            <small class="text-muted">taylor@example.com</small>
                        </td>
                        <td>2026-02-25</td>
                        <td>2 item(s)</td>
                        <td class="fw-bold">₱394.98</td>
                        <td>
                            <span class="badge bg-warning-subtle text-warning">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</div>
    </div>
  </div>
</div>
<script>
// Fix 1: Properly pass PHP array to JS using json_encode
const allProducts = @json($products);

const searchInput = document.getElementById('searchInput');
const suggestionsBox = document.getElementById('suggestions');
const tableBody = document.getElementById('productTableBody');
const categoryFilter = document.getElementById('categoryFilter');
const sortFilter = document.getElementById('sortFilter');

function filterProducts() {
  const query = searchInput.value.trim().toLowerCase();
  const category = categoryFilter.value.toLowerCase();
  const sort = sortFilter.value;

  let results = allProducts.filter(p => {
    const matchesQuery = !query ||
      p.name.toLowerCase().includes(query) ||
      p.category.toLowerCase().includes(query);
    const matchesCategory = !category || p.category.toLowerCase() === category;
    return matchesQuery && matchesCategory;
  });

  if (sort === 'price') {
    results.sort((a, b) => a.price - b.price);
  } else {
    results.sort((a, b) => a.name.localeCompare(b.name));
  }

  return results;
}

function renderTable(items) {
  tableBody.innerHTML = items.length === 0
    ? `<tr><td colspan="5" class="text-center text-muted py-4">No products found.</td></tr>`
    : items.map(item => `
      <tr>
        <td>
          <div class="d-flex align-items-center gap-3">
            <img src="/storage/${item.image}" width="40" height="40" class="rounded" onerror="this.src='https://via.placeholder.com/40'">
            <span class="fw-semibold">${item.name}</span>
          </div>
        </td>
        <td>${item.category}</td>
        <td class="fw-bold">₱${item.price}</td>
        <td>
          <span class="badge bg-success-subtle text-success">${item.stock} units</span>
        </td>
        <td>
          <button class="btn btn-sm btn-outline-secondary" onclick="window.location='/admin/products/${item.id}'">View</button>
          <button class="btn btn-sm btn-outline-primary" onclick="window.location='/admin/products/${item.id}/edit'">Edit</button>
          <button class="btn btn-sm btn-outline-danger">Delete</button>
        </td>
      </tr>
    `).join('');
}

function showSuggestions(query) {
  if (!query.trim()) {
    suggestionsBox.classList.add('d-none');
    return;
  }

  const matches = allProducts
    .filter(p => p.name.toLowerCase().includes(query.toLowerCase()))
    .slice(0, 6);

  if (!matches.length) {
    suggestionsBox.classList.add('d-none');
    return;
  }

  suggestionsBox.innerHTML = matches.map(p => `
    <div class="p-2 border-bottom suggestion-item" style="cursor:pointer;" data-name="${p.name}">
      <div class="fw-semibold">${p.name}</div>
      <small class="text-muted">${p.category}</small>
    </div>
  `).join('');

  suggestionsBox.querySelectorAll('.suggestion-item').forEach(el => {
    el.addEventListener('mousedown', () => {
      searchInput.value = el.dataset.name;
      suggestionsBox.classList.add('d-none');
      renderTable(filterProducts());
    });
  });

  suggestionsBox.classList.remove('d-none');
}

// Event listeners
searchInput.addEventListener('input', function () {
  showSuggestions(this.value);
  renderTable(filterProducts());
});

searchInput.addEventListener('blur', () => {
  setTimeout(() => suggestionsBox.classList.add('d-none'), 150);
});

categoryFilter.addEventListener('change', () => renderTable(filterProducts()));
sortFilter.addEventListener('change', () => renderTable(filterProducts()));

// Initial render
renderTable(filterProducts());
</script>
@endsection
