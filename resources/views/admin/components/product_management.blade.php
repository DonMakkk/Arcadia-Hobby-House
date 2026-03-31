<main class="flex-grow-1 p-4 overflow-auto">
  <div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
      <div>
        <h1 class="fw-bold" style="color:#1E3A5F; font-size:22px;">Product Management</h1>
        <p class="text-muted small">12 total products</p>
      </div>

      <button class="btn text-white d-flex align-items-center gap-2 mt-3 mt-md-0"
              style="background:#3B82F6;">
        +
        Add Product
      </button>
    </div>

    <!-- FILTER + SEARCH -->
    <div class="card mb-4 border-0 shadow-sm" style="background:#fff;">
      <div class="card-body">

        <div class="row g-3 align-items-center">

          <!-- SEARCH -->
          <div class="col-md-6">
            <input type="text"
                   class="form-control"
                   placeholder="Search products..."
                   style="background:#EFF6FF; border:1px solid #DBEAFE;">
          </div>

          <!-- FILTER BUTTONS -->
          <div class="col-md-6">
            <div class="d-flex flex-wrap gap-2">

              <button class="btn btn-primary btn-sm">All</button>

              <button class="btn btn-outline-secondary btn-sm">Board Games</button>
              <button class="btn btn-outline-secondary btn-sm">Trading Cards</button>
              <button class="btn btn-outline-secondary btn-sm">LEGO Sets</button>
              <button class="btn btn-outline-secondary btn-sm">Collectibles</button>
              <button class="btn btn-outline-secondary btn-sm">Puzzles</button>
              <button class="btn btn-outline-secondary btn-sm">Art Supplies</button>
              <button class="btn btn-outline-secondary btn-sm">Figurines</button>

            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- TABLE -->
    <div class="card border-0 shadow-sm">
      <div class="table-responsive">

        <table class="table align-middle mb-0">

          <!-- HEAD -->
          <thead style="background:#EFF6FF;">
            <tr>
              <th>Product</th>
              <th>Category</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Rating</th>
              <th>Actions</th>
            </tr>
          </thead>

          <!-- BODY -->
          <tbody>

            <!-- SAMPLE ROW -->
            <tr>
              <td>
                <div class="d-flex align-items-center gap-3">
                  <img src="https://images.unsplash.com/photo-1716817276052-f3030c20c117?w=400&q=80"
                       class="rounded" width="40" height="40">

                  <div>
                    <div class="fw-semibold">Catan Base Game</div>
                    <span class="badge bg-primary-subtle text-primary small">Best Seller</span>
                  </div>
                </div>
              </td>

              <td>Board Games</td>

              <td>
                <div class="fw-bold">$44.99</div>
                <small class="text-decoration-line-through text-muted">$54.99</small>
              </td>

              <td>
                <span class="badge bg-success-subtle text-success">15 units</span>
              </td>

              <td>
                ⭐ 4.8 <small class="text-muted">(234)</small>
              </td>

              <td>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-primary">View</button>
                  <button class="btn btn-sm btn-outline-secondary">Edit</button>
                  <button class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
              </td>
            </tr>

          </tbody>

        </table>
      </div>
    </div>

  </div>
</main>