<section class="container p-3 p-md-5 w-100" id="best-seller">
 <div class="container">
     <div class="d-flex justify-content-between align-items-end mb-4">
    <div>
      <h3 class="fw-bold mb-1" style="color:#1E3A5F;">🔥Best Sellers</h3>
      <p class="mb-0 small" style="color:#6B8DB5;">
        Our customers' all-time favorites
      </p>
    </div>
</div>

<div class="row px-2 px-md-5 pb-5">
    @foreach($products as $product)
<div class="col-12 col-md-4 col-lg-3 mb-4">
        <div class="card border-0 shadow-sm product-card h-100" style="border:1px solid #DBEAFE; border-radius:16px; overflow:hidden; min-height:200px;">
  <!-- Image -->
  <div class="position-relative overflow-hidden">
    <a  href="{{ route('product_detail', $product->id) }}">
      <img src="{{ asset('storage/' . $product->image) }}"
           class="card-img-top"
           style="height:250px; object-fit:cover; transition:0.3s;">
    </a>

    <!-- Badges -->
    <div class="position-absolute top-0 start-0 p-2 d-flex flex-column gap-1">
      <span class="badge" style="background:#6366F1;">Best Seller</span>
      
    </div>

    <!-- Heart -->
    <form action="{{route('addToFavorite', $product->id)}}" method="POST">
      @csrf
    <button class="position-absolute top-0 end-0 m-2 btn btn-light rounded-circle shadow-sm " type="submit">
      
  <i class="bi bi-heart-fill {{ $favorites->contains($product->id) ? 'text-danger' : 'text-secondary' }}"></i>
    </button>
  </form>
  </div>

  <!-- Content -->
  <div class="card-body d-flex flex-column">

    <!-- Category -->
    <div class="small mb-1" style="color:#3B82F6;">{{$product->category}}</div>

    <!-- Title -->
    <h6 class="fw-semibold mb-1" style="color:#1E3A5F;">
      <a href="/product/1" class="text-decoration-none text-reset product-title">
        {{ Str::limit($product->name, 23)}}
      </a>
    </h6>

   

    <!-- Bottom -->
    <div class="d-flex justify-content-between mt-auto align-items-center">
      <div>
        <h5 class="fw-bold" style="color:#1E3A5F;">₱{{number_format($product->price)}}</h5>
          </div>

     <form class="btn text-white p-2" style="background:#3B82F6;" action="{{route('addToCart.addToCart',$product->id)}}" method="POST">
        @csrf
        <button type="submit" class="btn p-0">
        <i class="bi bi-cart text-light"></i>
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