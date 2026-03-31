@extends('layouts.profile')

@section('main')

<div class="tab-content" id="accountTabContent">

  <!-- ================= ORDERS ================= -->
  <div class="tab-pane fade show active" id="orders" role="tabpanel">

    <h1 class="fw-bold fs-4 mb-4 text-dark">My Orders</h1>

    <div class="d-flex flex-column gap-3">

      @foreach($product as $item)

        <div class="card border-0 shadow-sm rounded-4">

          <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-2">

              <span class="fw-bold text-dark">
                ORD-{{ $item->id }}
              </span>

              <span class="fw-bold text-primary fs-5">
                ₱{{ $item->price }}
              </span>

            </div>

            <div class="text-muted small">
              {{ $item->created_at }}
            </div>

          </div>

        </div>

      @endforeach

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

    <h1 class="fw-bold fs-4 mb-4 text-dark">Account Settings</h1>

    <div class="card border-0 shadow-sm rounded-4">

      <div class="card-body">

        <div class="mb-3">
          <div class="text-muted small">Full Name</div>
          <div class="fw-bold">
            {{ $user->first_name }} {{ $user->last_name }}
          </div>
        </div>

        <div class="mb-3">
          <div class="text-muted small">Email</div>
          <div class="fw-bold">
            {{ $user->email }}
          </div>
        </div>

        <button class="btn btn-outline-primary btn-sm">
          Edit Profile
        </button>

      </div>

    </div>

  </div>

</div>

@endsection