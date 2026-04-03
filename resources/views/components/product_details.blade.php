<style>
 body {
  background: #f5f7fb;
  font-family: Arial, sans-serif;
}

.search-bar {
  border-radius: 20px;
  padding-left: 15px;
}

/* for product section */
.product-card {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
}

.product-img {
  border-radius: 12px;
  width: 100%;
}

.badge-custom {
  position: absolute;
  top: 15px;
  left: 15px;
}

.price {
  font-size: 28px;
  font-weight: bold;
  color: #1e3a8a;
}

.old-price {
  text-decoration: line-through;
  color: gray;
  margin-left: 10px;
}

.add-cart-btn {
  background: #3b82f6;
  color: white;
  border-radius: 8px;
  padding: 12px;
  width: 100%;
  border: none;
}

.add-cart-btn:hover {
  background: #2563eb;
}
/* Buy Now custom button */
.btn-buy {
  background: #ffffff;
  color: #3b82f6;
  border: 2px solid #3b82f6;
  font-weight: 500;
  transition: 0.3s;
}

/* hover effect */
.btn-buy:hover {
  background: #3b82f6;
  color: #ffffff;
}

/* click effect (active) */
.btn-buy:active {
  background: #2563eb;
  border-color: #2563eb;
  color: #fff;
}

.qty-box {
  width: 120px;
}
/* quantity */
.qty-wrapper {
  background: #f1f5f9;
  border-radius: 12px;
  overflow: hidden;
}

.qty-wrapper input {
  width: 40px;
  text-align: center;
  border: none;
  background: transparent;
  font-weight: bold;
}

.qty-btn {
  border: none;
  background: transparent;
  padding: 8px 12px;
  font-size: 18px;
  cursor: pointer;
}

.qty-btn:hover {
  background: #e2e8f0;
}

/* wishlist color */
.wishlist-btn {
  border: 1px solid #fca5a5;
  background: transparent;
  border-radius: 10px;
  padding: 10px;
  color: #ef4444;
}

.wishlist-btn:hover {
  background: #fee2e2;
}

/* features */
.features-box {
  background: #f1f5f9;
  border-radius: 12px;
  padding: 15px;
  display: flex;
  justify-content: space-between;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 10px;
}

.feature-item i {
  font-size: 20px;
  color: #3b82f6;
}

.feature-item small {
  display: block;
  color: gray;
}

/* tabs */
.tab-content-box {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  margin-top: 20px;
}
.product-card-link {
  transition: 0.2s;
}

.product-card-link:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}


/* reccomendation */
.product-small {
  background: #fff;
  border-radius: 12px;
  padding: 10px;
  width: 200px;
}

.product-small img {
  border-radius: 10px;
  width: 100%;
}
</style>
<div class="container mt-4">
  
  <div class="row g-4">

    <!-- big image -->
    <div class="col-md-6 position-relative">
      <span class="badge bg-primary position-absolute top-0 start-0 m-3">Best Seller</span>
      <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded">
    </div>

    <!-- for details -->
    <div class="col-md-6">
      <div class="p-3 bg-white rounded shadow-sm">

        <h6 class="text-muted">{{$product->category}}</h6>
        <h2>{{$product->name}}</h2>

        <div class="mb-2">
          <span class="fw-bold fs-4 text-primary">₱{{number_format($product->price)}}</span>
        </div>

        <p class="text-success">● In Stock ({{$product->stock}} available)</p>

        <!-- tags only -->
        <div class="mb-3">
          <span class="badge bg-light text-dark border">#enjoy</span>
          <span class="badge bg-light text-dark border">#happiness</span>
          <span class="badge bg-light text-dark border">#hobby</span>
        </div>

        <!-- quantity -->
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="d-flex align-items-center border rounded px-2">
            <button class="btn btn-sm" id="minusBtn">−</button>
            <input type="text" value="1" id="qtyInput" class="form-control text-center border-0" style="width:40px;" readonly>
            <button class="btn btn-sm" id="plusBtn">+</button>
          </div>

          <form method="POST" action="{{ route('addToFavorite', $product->id) }}" style="display:inline;">
            @csrf
            @if($favorite)
            <button class="btn btn-outline-danger" type="submit">
              <i class="bi bi-heart-fill text-danger"></i>
            </button>
            @else
            <button class="btn btn-outline-danger" type="submit">
              <i class="bi bi-heart"></i>
            </button>
            @endif
          </form>
        </div>

        <!-- buy now and add to cart -->
        <div class="d-flex gap-2 mb-3">
 <!-- buy mow -->
  <button class="btn btn-buy flex-fill" data-bs-toggle="modal" data-bs-target="#buyNowModal">
    Buy Now
  </button>
  <!-- add to cart -->
  <form action="{{route('addToCart.addToCart',$product->id)}}" method="POST" class="flex-fill ">
        @csrf
  <button class="btn btn-primary flex-fill w-100" type="submit">
    <i class="bi bi-cart"></i> Add to Cart
  </button>
  </form>
 

</div>

        <!-- features -->
        <div class="p-3 bg-light rounded d-flex justify-content-between text-center">
          <div>
            <i class="bi bi-truck fs-5 text-primary"></i>
            <div><strong>Free shipping</strong></div>
            <small>Over ₱3000.00</small>
          </div>

          <div>
            <i class="bi bi-arrow-repeat fs-5 text-primary"></i>
            <div><strong>30-day returns</strong></div>
            <small>Easy process</small>
          </div>

          <div>
            <i class="bi bi-shield-check fs-5 text-primary"></i>
            <div><strong>Secure payment</strong></div>
            <small>100% protected</small>
          </div>
        </div>

      </div>
    </div>

  </div>
<!-- tabs -->
<ul class="nav nav-tabs mt-4">
  <li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#desc">Description</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#details">Details</button>
  </li>
</ul>

<div class="tab-content p-3 bg-white rounded shadow-sm">

  <!-- for description -->
  <div class="tab-pane fade show active" id="desc">
    <p>{{$product->description}}</p>
  </div>

  <!-- for details -->
  <div class="tab-pane fade" id="details">
  <ul class="list-unstyled">
    <li>• Players: 2-8</li>
    <li>• Playtime: 60-80 minutes</li>
    <li>• Recommended Age: 8+</li>
    <li>• Includes classic tokens: Rubber Ducky, Tyrannosaurus Rex, Penguin, and more</li>
    <li>• High-quality game board and pieces for lasting fun</li>
    <li>• Includes Chance and Community Chest cards with updated design</li>
    <li>• Features detailed property cards for each color set</li>
    <li>• Enhances strategic thinking, negotiation, and money management skills</li>
    <li>• Perfect for family game nights or friendly competitions</li>
    <li>• Comes with a premium box and collectible tokens</li>
  </ul>
</div>
  <!-- reccomendation -->
<div class="mt-4">
  <h5><b>You Might Also Like</b></h5>
<div class="d-flex flex-wrap gap-3 mt-3">

  @foreach($suggestions as $suggestion)
    <a href="{{ route('product_detail', $suggestion->id) }}" class="text-decoration-none text-dark">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">

    <div class="card border-0 shadow-sm h-100 w-100"
         style="border-radius:16px; overflow:hidden;">

      <!-- IMAGE -->
      <a href="{{ route('product_detail', $suggestion->id) }}">
        <img src="{{ asset('storage/' . $suggestion->image) }}"
             class="card-img-top"
             style="height:250px; object-fit:cover;">
      </a>

      <!-- CONTENT -->
      <div class="card-body d-flex flex-column">

        <div class="small mb-1" style="color:#3B82F6;">
          {{ $product->category }}
        </div>

        <h6 class="fw-semibold">
          <a href="{{ route('product_detail', $suggestion->id) }}"
             class="text-decoration-none text-dark">
            {{ $suggestion->name }}
          </a>
        </h6>

        <div class="d-flex justify-content-between mt-auto">
          <h5 class="fw-bold">₱{{ number_format($suggestion->price) }}</h5>

          <form method="POST" action="{{ route('addToCart.addToCart', $suggestion->id) }}">
            @csrf
            <button class="btn btn-primary btn-sm">
              <i class="bi bi-cart"></i>
            </button>
          </form>
        </div>

      </div>
    </div>

  </div>

    </a>
  @endforeach
  
  </div>
</div>
</div>
<script>
const minusBtn = document.getElementById("minusBtn");
const plusBtn = document.getElementById("plusBtn");
const qtyInput = document.getElementById("qtyInput");

minusBtn.addEventListener("click", () => {
  let value = parseInt(qtyInput.value);
  if (value > 1) qtyInput.value = value - 1;
});

plusBtn.addEventListener("click", () => {
  let value = parseInt(qtyInput.value);
  qtyInput.value = value + 1;
});
</script>