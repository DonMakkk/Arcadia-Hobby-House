<section class="container p-5 w-100" >
 
     <div class="d-flex justify-content-between align-items-end mb-4">
    <div>
      <h2 class="fw-bold mb-1" style="color:#1E3A5F;">Featured Products</h2>
      <p class="mb-0 small" style="color:#6B8DB5;">
        Hand-picked favorites from our collection
      </p>
    </div>
</div>

<div class="row align-items-end px-5 pb-5 flex-grow-1">
    @foreach($products as $product)
<div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card border-0 shadow-sm product-card h-100" style="border:1px solid #DBEAFE; border-radius:16px; overflow:hidden; min-height:400px;">
  <!-- Image -->
  <div class="position-relative overflow-hidden">
    <a href="/product/1">
      <img src="{{ asset('storage/' . $product->image) }}"
           class="card-img-top"
           style="height:250px; object-fit:cover; transition:0.3s;">
    </a>

    <!-- Badges -->
    <div class="position-absolute top-0 start-0 p-2 d-flex flex-column gap-1">
      <span class="badge" style="background:#6366F1;">Best Seller</span>
      <span class="badge" style="background:#2563EB;">-18%</span>
    </div>

    <!-- Heart -->
    <button class="position-absolute top-0 end-0 m-2 btn btn-light rounded-circle shadow-sm p-1">
      <i class="bi bi-heart-fill text-secondary"></i>
    </button>
  </div>

  <!-- Content -->
  <div class="card-body d-flex flex-column">

    <!-- Category -->
    <div class="small mb-1" style="color:#3B82F6;">{{$product->category}}</div>

    <!-- Title -->
    <h6 class="fw-semibold mb-1" style="color:#1E3A5F;">
      <a href="/product/1" class="text-decoration-none text-reset product-title">
        {{$product->name}}
      </a>
    </h6>

   

    <!-- Bottom -->
    <div class="d-flex justify-content-between align-items-center mt-auto">
      <div>
        <h4 class="fw-bold" style="color:#1E3A5F;">₱{{$product->price}}</h4>
          </div>

      <button class="btn text-white p-2" style="background:#3B82F6;">
        <i class="bi bi-cart"></i>
      </button>
    </div>

  </div>
</div>
        </div>

    @endforeach
    </div>
  </div>
</section>