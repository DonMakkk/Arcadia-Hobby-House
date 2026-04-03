<section class="container p-3 p-md-5 w-100" id="featured">
  <div class="container">

    <div class="d-flex justify-content-between align-items-end mb-4">
      <div>
        <h3 class="fw-bold mb-1" style="color:#1E3A5F;">Featured Products</h3>
        <p class="mb-0 small" style="color:#6B8DB5;">
          Hand-picked favorites from our collection
        </p>
      </div>
    </div>

    <div class="row px-2 px-md-5 pb-5">

      @foreach($newProduct as $product)

      <div class="col-12 col-md-4 col-lg-3 mb-4">

        <div class="card border-0 shadow-sm product-card h-100"
             style="border:1px solid #DBEAFE; border-radius:16px; overflow:hidden;">

          <!-- IMAGE + HEART -->
          <div class="position-relative overflow-hidden">

            <a href="{{ route('product_detail', $product->id) }}">
              <img src="{{ asset('storage/' . $product->image) }}"
                   class="card-img-top"
                   style="height:250px; object-fit:cover;">
            </a>

            <!-- ❤️ HEART BUTTON -->
            <form action="{{ route('addToFavorite', $product->id) }}" method="POST">
              @csrf
              <button type="submit"
                      class="position-absolute top-0 end-0 m-2 btn btn-light rounded-circle shadow-sm">
                <i class="bi bi-heart-fill {{ $favorites->contains($product->id) ? 'text-danger' : 'text-secondary' }}"></i>
              </button>
            </form>

          </div>

          <!-- CONTENT -->
          <div class="card-body d-flex flex-column">

            <div class="small mb-1" style="color:#3B82F6;">
              {{ $product->category }}
            </div>

            <h6 class="fw-semibold">
              <a href="{{ route('product_detail', $product->id) }}"
                 class="text-decoration-none text-dark">
                {{ Str::limit($product->name, 23) }}
              </a>
            </h6>

            <div class="d-flex justify-content-between mt-auto align-items-center">
              <h5 class="fw-bold mb-0">
                ₱{{ number_format($product->price) }}
              </h5>

              <form method="POST" action="{{ route('addToCart.addToCart', $product->id) }}">
                @csrf
                <button class="btn btn-primary btn-sm">
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