@extends('layouts.app')

@section('main')
<div class="container py-4">

@if(count($cart) > 0)

{{-- ===================== --}}
{{-- HIDDEN HELPER FORMS   --}}
{{-- (outside main form)   --}}
{{-- ===================== --}}
@foreach($cart as $item)

    <form id="decrease-{{ $item->id }}"
          method="POST"
          action="{{ route('cart.decrease', $item->id) }}"
          style="display:none">
        @csrf
    </form>

    <form id="increase-{{ $item->id }}"
          method="POST"
          action="{{ route('cart.increase', $item->id) }}"
          style="display:none">
        @csrf
    </form>

    <form id="remove-{{ $item->id }}"
          method="POST"
          action="{{ route('cart.remove', $item->id) }}"
          style="display:none">
        @csrf
        @method('DELETE')
    </form>

@endforeach

{{-- ===================== --}}
{{-- MAIN BUY FORM         --}}
{{-- ===================== --}}
<form action="{{ route('buy') }}" method="POST">
@csrf

@if($errors->any())
    <div class="alert alert-danger mb-3">
        {{ $errors->first('message') }}
    </div>
@endif

@foreach($cart as $item)

<div class="mb-3">

    <div class="card" id="item-{{ $item->id }}">
        <div class="card-body d-flex align-items-center gap-3">

            {{-- CHECKBOX --}}
            <input type="checkbox"
                   name="selected_items[]"
                   value="{{ $item->id }}"
                   class="form-check-input mt-0"
                   style="width:1.2rem;height:1.2rem;">

            {{-- PRODUCT IMAGE --}}
            <img src="{{ asset('storage/' . $item->product->image) }}"
                 style="width:80px;height:80px;object-fit:cover;border-radius:.5rem;">

            {{-- PRODUCT INFO --}}
            <div class="flex-grow-1">

                <div class="text-muted small">
                    {{ $item->product->category }}
                </div>

                <div class="fw-bold">
                    {{ $item->product->name }}
                </div>

                {{-- QUANTITY CONTROLS --}}
                <div class="d-flex align-items-center mt-2">

                    <button type="button"
                            class="btn btn-outline-secondary btn-sm"
                            onclick="document.getElementById('decrease-{{ $item->id }}').submit()">
                        −
                    </button>

                    <span class="mx-2 fw-bold">{{ $item->quantity }}</span>

                    <button type="button"
                            class="btn btn-outline-secondary btn-sm"
                            onclick="document.getElementById('increase-{{ $item->id }}').submit()">
                        +
                    </button>

                </div>

            </div>

            {{-- PRICE + REMOVE --}}
            <div class="text-end d-flex flex-column align-items-end gap-2">

                <button type="button"
                        class="btn btn-outline-danger btn-sm"
                        onclick="document.getElementById('remove-{{ $item->id }}').submit()">
                    <i class="bi bi-trash3"></i>
                </button>

                <div class="fw-bold">
                    ₱{{ number_format($item->product->price * $item->quantity, 2) }}
                </div>

            </div>

        </div>
    </div>

</div>

@endforeach

{{-- CART TOTAL --}}
<div class="card p-3 d-flex flex-row justify-content-between align-items-center mt-3">

    <div>
        <div class="small text-muted">Cart Total</div>
        <div class="fw-bold fs-5">₱{{ number_format($total, 2) }}</div>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left"></i> Continue Shopping
        </a>

        <button type="submit" class="btn btn-primary">
            Buy Selected
        </button>
    </div>

</div>

</form>

@else

{{-- EMPTY CART --}}
<div class="d-flex justify-content-center align-items-center min-vh-100 py-5 bg-light">
    <div class="card shadow-sm border-0 text-center p-5" style="max-width: 500px;">

        <div class="mb-4 p-4 rounded-circle mx-auto d-flex align-items-center justify-content-center bg-primary bg-opacity-10"
             style="width: 120px; height: 120px;">
            <i class="bi bi-cart3 display-3 text-primary"></i>
        </div>

        <h5 class="card-title mb-3 fw-bold text-dark">Your cart is empty</h5>

        <p class="card-text text-muted mb-4 lead">
            Looks like you haven't added anything yet.
            Start exploring our amazing products!
        </p>

        <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4">
            <i class="bi bi-cart3 me-2"></i>
            Start Shopping
        </a>

    </div>
</div>

@endif

</div>
@endsection