@extends('layouts.profile')

@section('main')

<div class="tab-content" id="accountTabContent">

  <!-- ================= ORDERS ================= -->
 <div class="tab-content" id="accountTabContent">

  {{-- ================= ORDERS ================= --}}
  <div class="tab-pane fade show active" id="orders" role="tabpanel">

    <div class="section-title mb-3">My Orders</div>

    @if(isset($product) && count($product) > 0)

      @foreach($product as $item)

      <div class="order-card border-0 shadow-sm rounded-4 p-3 mb-3 bg-white">

        {{-- Top row --}}
        <div class="d-flex justify-content-between align-items-start mb-2">

          <div>
            <div class="fw-bold text-dark">
              ORD-{{ str_pad($item->id, 3, '0', STR_PAD_LEFT) }}
            </div>

            <div class="text-muted small mt-1">
              <i class="fa-regular fa-calendar me-1"></i>
              {{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}
            </div>
          </div>

          <div class="text-end">
            <div class="fw-bold text-primary fs-5">
              ₱{{ number_format($item->price, 2) }}
            </div>

            <span class="badge bg-light text-dark mt-1">
              Order
            </span>
          </div>

        </div>

        {{-- Optional: item preview (if you later add image field) --}}
        @if(isset($item->image))
        <div class="mb-3">
          <img src="{{ asset('storage/'.$item->image) }}"
               class="rounded-3"
               style="width:70px;height:70px;object-fit:cover;">
        </div>
        @endif

        {{-- Actions --}}
        <div class="d-flex gap-2 flex-wrap">

          <button class="btn btn-sm btn-outline-primary rounded-pill">
            View Details
          </button>

          <button class="btn btn-sm btn-outline-secondary rounded-pill">
            Reorder
          </button>

        </div>

      </div>

      @endforeach

    @else

      <div class="text-center py-5 text-muted">
        <i class="fa-solid fa-inbox fa-2x mb-2"></i>
        <div>No orders yet. Start shopping!</div>
      </div>

    @endif

  </div>

</div>

  <!-- ================= WISHLIST ================= -->
  <div class="tab-pane fade" id="wishlist" role="tabpanel">

    <h1 class="fw-bold fs-4 mb-4 text-dark">My Wishlist</h1>

    <div class="row g-3">

      @foreach($product as $item)

        <div class="col-12 col-md-6 col-lg-4">

          <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body">

              <h6 class="fw-bold mb-2 text-dark">
                {{ $item->name }}
              </h6>

              <div class="fw-bold text-primary mb-3">
                ₱{{ $item->price }}
              </div>

              <a href="{{ route('product_detail', $item->id) }}">
              <button class="btn btn-primary btn-sm w-100">
                View Item
              </button>
              </a>
            </div>

          </div>

        </div>

      @endforeach

    </div>

  </div>

  <!-- ================= SETTINGS ================= -->
    <div class="tab-pane fade" id="settings" role="tabpanel">

    <h1 class="fw-bold fs-4 mb-4 text-dark">
      <i class="fa-solid fa-user-gear me-2 text-primary"></i>Account Settings
    </h1>

    <div class="card border-0 shadow-sm rounded-4">

      <div class="card-body">

        <div class="row g-3">

          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3">
              <div class="text-muted small">Full Name</div>
              <div class="fw-bold">
                {{ $user->first_name }} {{ $user->last_name }}
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3">
              <div class="text-muted small">Email</div>
              <div class="fw-bold">
                {{ $user->email }}
              </div>
            </div>
          </div>

          @if(isset($user->phone_num))
          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3">
              <div class="text-muted small">Phone</div>
              <div class="fw-bold">
                {{ $user->phone_num }}
              </div>
            </div>
          </div>
          @endif

        </div>

        <div class="mt-4 d-flex gap-2">

          <button class="btn btn-outline-primary btn-sm">
            <i class="fa-solid fa-pen me-1"></i> Edit Profile
          </button>

          <button class="btn btn-outline-danger btn-sm">
            <i class="fa-solid fa-trash me-1"></i> Delete Account
          </button>

        </div>

      </div>

    </div>

  </div>

</div>

@endsection