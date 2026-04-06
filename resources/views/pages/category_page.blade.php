@extends('layouts.app')
@section('header')
{{-- Optional hero header --}}
@endsection
@section('main')
<div class="container py-5">
  {{-- Search/Category Header --}}
  <div class="d-flex justify-content-between align-items-end mb-5">
    <div>
      <h1 class="fw-bold mb-1" style="color:#1E3A5F;">Search Results</h1>
      <p class="mb-0" style="color:#6B8DB5;">
        Found {{ count($sortedByCategory) }} product{{ count($sortedByCategory) !== 1 ? 's' : '' }} for your category
      </p>
    </div>
    <a href="{{ route('home') }}" class="btn btn-outline-secondary">
      ← Back to Home
    </a>
  </div>
  @if(count($sortedByCategory) > 0)
  {{-- Products Grid --}}
  <div class="row g-4">
    @foreach($sortedByCategory as $product)
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card border-0 shadow-sm product-card h-100" style="border:1px solid #DBEAFE; border-radius:16px; overflow:hidden;">
        {{-- Image --}}
        <div class="position-relative overflow-hidden">
          <a  href="{{ route('product_detail', $product->id) }}">
            <img src="{{ asset('storage/' . $product->image) }}"
                 class="card-img-top"
                 style="height:250px; object-fit:cover; transition:0.3s;"
                 alt="{{ $product->name }}">
          </a>
          {{-- Badges --}}
          <div class="position-absolute top-0 start-0 p-2 d-flex flex-column gap-1">
            @if($product->is_new ?? false)
            <span class="badge" style="background:#6366F1;">New</span>
            @endif
          </div>
          {{-- Heart --}}
         <form action="{{route('addToFavorite', $product->id)}}" method="POST">
      @csrf
    <button class="position-absolute top-0 end-0 m-2 btn btn-light rounded-circle shadow-sm " type="submit">
      
  <i class="bi bi-heart-fill {{ $favorites->contains($product->id) ? 'text-danger' : 'text-secondary' }}"></i>
    </button>
  </form>
        </div>
        {{-- Contenon t --}}
        <div class="card-body d-flex flex-column p-3">
          {{-- Category --}}
          <div class="small mb-1 fw-medium" style="color:#3B82F6;">{{ $product->category }}</div>
          {{-- Title --}}
          <h6 class="fw-semibold mb-2" style="color:#1E3A5F;">
            <a>
            <a  href="{{ route('product_detail', $product->id) }}" class="text-decoration-none text-reset product-title">
              {{ Str::limit($product->name, 50) }}
            </a>
          </h6>

          {{-- Price & Cart --}}
          <div class="d-flex justify-content-between align-items-end mt-auto">
            <div>
              <h5 class="fw-bold mb-0" style="color:#1E3A5F;">₱{{ number_format($product->price, 0) }}</h5>
            </div>
            <form class="btn text-white p-2" style="background:#3B82F6;" action="{{ route('addToCart.addToCart', $product->id) }}" method="POST">
              @csrf
              <button type="submit" class="btn p-0 border-0 bg-transparent">
                <i class="bi bi-cart text-light fs-5"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <div class="text-center py-5 my-5">
    <i class="bi bi-search display-1 text-muted mb-4"></i>
    <h3 class="fw-bold text-muted mb-3">No products found</h3>
    <p class="text-muted mb-4">Try adjusting your search terms or browse by category.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
      <a href="#categories" class="btn btn-outline-primary">Browse Categories</a>
    </div>
  </div>

  @endif
</div>
@endsection

