@extends('layouts.app')
@section('main')
   <div class="container py-4">

@if(count($cart) > 0)
@foreach($cart as $item)

<div class="card mb-3" id="item-{{ $item->id }}">
  <div class="card-body d-flex align-items-center gap-3">

    <img src="{{ asset('storage/' . $item->product->image) }}"
         style="width:80px;height:80px;border-radius:.5rem;">

    <div class="flex-grow-1">
      <div class="text-muted small">
        {{ $item->product->category }}
      </div>

      <div class="fw-bold">
        {{ $item->product->name }}
      </div>

      <!-- QUANTITY FROM DATABASE -->
      <div class="d-flex align-items-center mt-2">

        <form method="POST" action="{{ route('cart.decrease', $item->id) }}">
          @csrf
          <button class="btn btn-outline-secondary btn-sm">−</button>
        </form>

        <span class="mx-2 fw-bold">
          {{ $item->quantity }}
        </span>

        <form method="POST" action="{{ route('cart.increase', $item->id) }}">
          @csrf
          <button class="btn btn-outline-secondary btn-sm">+</button>
        </form>

      </div>
    </div>

    <div class="text-end d-flex flex-column align-items-end gap-2">

      <form method="POST" action="{{ route('cart.remove', $item->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger btn-sm">
          <i class="bi bi-trash3"></i>
        </button>
      </form>

      <div class="fw-bold">
        ₱{{ $item->product->price * $item->quantity }}
      </div>

    </div>

  </div>
</div>

@endforeach
  <!-- CART TOTAL -->
  <div class="card p-3 d-flex justify-content-between align-items-center">
    <div>
      <div class="small text-muted">Cart Total</div>
      <div class="fw-bold fs-5" id="cart-total">₱{{$total}}</div>
    </div>
    <a href="{{route('home')}}" class="btn btn-outline-primary">
      <i class="bi bi-arrow-left"></i> Continue Shopping
    </a>
  </div>

</div>

     
@else
 <div class="d-flex justify-content-center align-items-center min-vh-100 py-5 bg-light">
  <div class="card shadow-sm border-0 text-center p-5" style="max-width: 500px;">
    <!-- Icon: Large centered Bootstrap Icon -->
    <div class="mb-4 p-4 rounded-circle mx-auto d-flex align-items-center justify-content-center bg-primary bg-opacity-10" style="width: 120px; height: 120px;">
      <i class="bi bi-cart3 display-3 text-primary"></i>
    </div>
    
    <h5 class="card-title mb-3 fw-bold text-dark">Your cart is empty</h5>
    
    <p class="card-text text-muted mb-4 lead">
      Looks like you haven't added anything yet. 
      Start exploring our amazing products!
    </p>
    
    <a href="{{route('home')}}" class="btn btn-primary btn-lg px-4">
      <i class="bi bi-cart3 me-2"></i>
      Start Shopping
    </a>
  </div>
</div>
@endif
</div>
<script>
function changeQty(index, delta) {
  const qtyEl = document.getElementById('qty-' + index);
  let qty = parseInt(qtyEl.textContent) + delta;
  if (qty < 1) qty = 1;
  qtyEl.textContent = qty;
}

function removeItem(index) {
  document.getElementById('item-' + index).remove();
}
</script>
@endsection