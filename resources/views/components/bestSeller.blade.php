<section class="container p-3 p-md-5 w-100" id="best-seller">

  <div class="container">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-end mb-4">
      <div>
        <h3 class="fw-bold mb-1" style="color:#1E3A5F;">🔥Best Sellers</h3>
        <p class="mb-0 small" style="color:#6B8DB5;">
          Our customers' all-time favorites
        </p>
      </div>
    </div>

    <!-- PRODUCTS -->
    <div class="row px-2 px-md-5 pb-5">

      @foreach($products as $product)
      <div class="col-12 col-md-4 col-lg-3 mb-4">

        <div class="card border-0 shadow-sm h-100"
             style="border:1px solid #DBEAFE; border-radius:16px; overflow:hidden;">

          <!-- IMAGE -->
          <div class="position-relative">

            <a href="{{ route('product_detail', $product->id) }}">
              <img src="{{ asset('storage/' . $product->image) }}"
                   class="card-img-top"
                   style="height:250px; object-fit:cover;">
            </a>

            <!-- BADGE -->
            <div class="position-absolute top-0 start-0 p-2">
              <span class="badge" style="background:#6366F1;">Best Seller</span>
            </div>

            <!-- FAVORITE -->
            <form action="{{ route('addToFavorite', $product->id) }}" method="POST">
              @csrf
              <button type="submit"
                      class="position-absolute top-0 end-0 m-2 btn btn-light rounded-circle shadow-sm">
                <i class="bi bi-heart-fill
                   {{ $favorites->contains($product->id) ? 'text-danger' : 'text-secondary' }}">
                </i>
              </button>
            </form>

          </div>

          <!-- CONTENT -->
          <div class="card-body d-flex flex-column">

            <div class="small mb-1" style="color:#3B82F6;">
              {{ $product->category }}
            </div>

            <h6 class="fw-semibold mb-1" style="color:#1E3A5F;">
              <a href="{{ route('product_detail', $product->id) }}"
                 class="text-decoration-none text-reset">
                {{ Str::limit($product->name, 23) }}
              </a>
            </h6>

            <!-- PRICE + CART -->
            <div class="d-flex justify-content-between mt-auto align-items-center">

              <h5 class="fw-bold mb-0" style="color:#1E3A5F;">
                ₱{{ number_format($product->price) }}
              </h5>

              <!-- ADD TO CART (AJAX) -->
              <form class="add-to-cart-form"
                    action="{{ route('addToCart.addToCart', $product->id) }}"
                    method="POST">
                @csrf

                <button type="submit" class="btn text-white p-2" style="background:#3B82F6;">
                  <i class="bi bi-cart"></i>
                </button>
              </form>

            </div>

          </div>
        </div>

      </div>
      @endforeach

    </div>
  </div>
</section>


<!-- ================= SUCCESS MODAL ================= -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <h5 class="mb-0">✅ Added to Cart</h5>
      <p class="mb-0 text-muted">Item saved successfully</p>
    </div>
  </div>
</div>


<!-- ================= AJAX SCRIPT ================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.add-to-cart-form').forEach(form => {

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const url = this.action;
            const method = this.method;
            const data = new FormData(this);

            fetch(url, {
                method: method,
                body: data,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {

                if (data.success) {

                    // update cart badge
                    document.querySelectorAll('.cart-badge')
                        .forEach(badge => badge.textContent = data.cart_count);

                    // show modal
                    const modalEl = document.getElementById('successModal');
                    const modal = new bootstrap.Modal(modalEl);

                    modal.show();

                    // auto close after 1 second
                    setTimeout(() => modal.hide(), 1000);

                } else {
                    alert(data.message || 'Error adding to cart');
                }

            })
            .catch(err => {
                console.error(err);
                alert('Something went wrong');
            });

        });

    });

});
</script>

