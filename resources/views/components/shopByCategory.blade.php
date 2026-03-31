<section class="bg-light p-5" id="shopByCategories">
  <div class="container py-5">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-end mb-4">
    <div>
      <h2 class="fw-bold mb-1" style="color:#1E3A5F;">Shop by Category</h2>
      <p class="mb-0 small" style="color:#6B8DB5;">
        Find exactly what you're looking for
      </p>
    </div>
  </div>

  <!-- Categories -->
  <div class="row g-3">

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','board games')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          🎲
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">Board Games</div>
        <div style="font-size:11px;color:#6B8DB5;">48 items</div>
      </a>
    </div>

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','trading cards')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          🃏
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">Trading Cards</div>
        <div style="font-size:11px;color:#6B8DB5;">132 items</div>
      </a>
    </div>

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','lego sets')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          🧱
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">LEGO Sets</div>
        <div style="font-size:11px;color:#6B8DB5;">65 items</div>
      </a>
    </div>

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','collectibles')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          ⭐
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">Collectibles</div>
        <div style="font-size:11px;color:#6B8DB5;">87 items</div>
      </a>
    </div>

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','puzzles')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          🧩
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">Puzzles</div>
        <div style="font-size:11px;color:#6B8DB5;">54 items</div>
      </a>
    </div>

    <!-- Item -->
    <div class="col-6 col-sm-4 col-lg-2">
      <a href="{{route('category.show','art supplies')}}" 
         class="text-decoration-none d-block p-3 text-center border rounded-4 bg-white category-card"
         style="border-color:#DBEAFE;">
        <div class="d-flex justify-content-center align-items-center mx-auto mb-2 rounded-4 shadow-sm"
             style="width:48px;height:48px;background:#EFF6FF;font-size:22px;">
          🎨
        </div>
        <div class="fw-semibold" style="color:#1E3A5F;">Art Supplies</div>
        <div style="font-size:11px;color:#6B8DB5;">73 items</div>
      </a>
    </div>
  </div>
  </div>
</section>
