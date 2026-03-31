   <style>
 /*NAVBAR*/
.top-navbar {
  background: #FFFFFF;
  border-bottom: 1px solid #E0E0E0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  padding: 12px 0;
  z-index: 50;
}

.navbar-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 8px;
}

.search-bar-wrapper {
  min-width: 0;
  flex: 1;
  min-width: 150px;
}

.navbar-toggler {
  border: none;
  padding: 0 !important;
  margin-left: 4px;
}

.navbar-toggler:focus {
  box-shadow: none;
  outline: none;
}

.navbar-collapse {
  margin-top: 8px;
  flex-basis: 100%;
  order: 3;
}

.navbar-brand {
  color: #2c3e50 !important;
  font-weight: bold;
  min-width: fit-content;
}

/* SEARCH */
.search-input {
  background: #F5F5F5;
  border: 1px solid #D0D0D0;
  border-radius: 8px;
  padding: 10px 12px;
  color: #333;
  font-size: 14px;
}

.search-input::placeholder {
  color: #999;
}

.search-input:focus {
  outline: none;
  border-color: #2c5aa0;
  background: #FFFFFF;
  box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.1);
}

.search-btn {
  position: absolute;
  right: 8px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: #999;
  padding: 0;
  z-index: 10;
}

.search-btn:hover {
  color: #2c5aa0;
}


.suggestions-list {
  position: absolute;
  top: calc(100% + 4px);
  left: 0;
  width: 100%;
  max-height: 240px;
  overflow-y: auto;
  background: #ffffff;
  border: 1px solid #D0D0D0;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  z-index: 100;
  padding: 0;
}

.suggestion-item {
  padding: 10px 12px;
  cursor: pointer;
  font-size: 14px;
  color: #333;
}

.suggestion-item:hover,
.suggestion-item.active {
  background: #F5F5F5;
  color: #2c5aa0;
}

/* NAV LINKS */
.nav-link {
  color: #333 !important;
  font-size: 15px;
  padding: 8px 12px !important;
  transition: color 0.2s ease;
  text-decoration: none;
}

.nav-link:hover {
  color: #2c5aa0 !important;
}

/*DROPDOWN*/
.dropdown-menu {
  border-radius: 8px;
  border: 1px solid #D0D0D0;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  padding: 8px 0;
}

.dropdown-item {
  padding: 10px 16px;
  font-size: 14px;
  color: #333;
  transition: background 0.2s ease;
}

.dropdown-item:hover {
  background: #F5F5F5;
  color: #2c5aa0;
}

/* PROFILE ICON*/
.profile-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top: 3em;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #3B7FCA;
  color: white !important;
  font-size: 20px;
  transition: all 0.2s ease;
  padding: 0 !important;
}

.profile-icon:hover {
  background: #2c5aa0;
  transform: scale(1.05);
}

/* CART ICON */
.cart-icon {
  position: relative;
  color: #333 !important;
  font-size: 20px;
  display: flex;
  align-items: center;
  transition: all 0.2s ease;
}

.cart-icon:hover {
  color: #2c5aa0 !important;
}

.cart-badge {
  position: absolute;
  top: -8px;
  right: -8px;
  background: #e74c3c;
  color: white;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: bold;
}

/* RESPONSIVE */
@media (max-width: 991px) {
  .navbar-container {
    flex-wrap: wrap;
  }
  
  .search-bar-wrapper {
    flex-basis: 100%;
    order: 3;
    margin: 8px 0 !important;
  }
  
  .navbar-nav {
    flex-direction: column;
    gap: 0 !important;
  }
  
  .nav-link {
    padding: 10px 0 !important;
    border-bottom: 1px solid #f0f0f0;
  }
  
  .profile-icon,
  .cart-icon {
    display: none;
  }
  
  .navbar-collapse {
    border-top: 1px solid #E0E0E0;
    padding-top: 12px;
  }
}

@media (max-width: 575px) {
  .top-navbar {
    padding: 10px 0;
  }
  
  .navbar-container {
    gap: 4px;
  }
  
  .navbar-brand {
    flex-shrink: 0;
    margin-right: 0;
  }
  
  .search-bar-wrapper {
    flex: 1;
    min-width: 100px;
    margin: 0 !important;
  }
  
  .search-input {
    font-size: 12px;
    padding: 6px 8px;
  }
  
  .search-btn {
    right: 6px;
  }
  
  .navbar-toggler {
    margin-left: 8px;
  }
  
  .navbar-toggler-icon {
    width: 20px;
    height: 19px;
  }
  
  .nav-link {
    font-size: 14px;
  }
  
  .profile-icon,
  .cart-icon {
    display: inline-flex !important;
    font-size: 16px;
    width: 32px;
    height: 32px;
    margin-top: 10px !important;
    border-top: 1px solid #f0f0f0;
    padding-top: 10px !important;
  }
  
  .cart-badge {
    width: 16px;
    height: 16px;
    font-size: 9px;
    top: -5px;
    right: -5px;
  }
}

@media (min-width: 576px) and (max-width: 991px) {
  .top-navbar {
    padding: 10px 0;
  }
  
  .navbar-container {
    gap: 8px;
  }
  
  .navbar-brand {
    font-size: 13px;
    margin-right: 2px;
  }
  
  .search-bar-wrapper {
    flex: 1;
    min-width: 150px;
    margin: 8px 0 !important;
  }
  
  .search-input {
    font-size: 13px;
    padding: 7px 10px;
  }
  
  .nav-link {
    font-size: 14px;
    padding: 10px 0 !important;
  }
}

@media (min-width: 992px) {
  .navbar-container {
    flex-wrap: nowrap;
  }
  
  .search-bar-wrapper {
    flex: 1;
    margin: 0 12px !important;
  }
  
  .navbar-nav {
    display: flex;
    align-items: center;
    gap: 12px !important;
    margin-left: auto !important;
    flex-direction: row !important;
    margin-top: 0 !important;
  }
  
  .navbar-collapse {
    border: none;
    margin-top: 0;
    padding-top: 0;
  }
  
  .nav-link {
    padding: 8px 12px !important;
    border-bottom: none !important;
  }
  
  .profile-icon,
  .cart-icon {
    display: inline-flex !important;
    margin-top: 0 !important;
    border-top: none !important;
    padding-top: 0 !important;
  }
}
  </style>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light top-navbar pe-2">
<div class="container-fluid navbar-container">

    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ asset('images/logo.png') }}?v=2" style="height:45px; margin-right:8px;">
        <div class="d-none d-lg-block">
            <div style="font-weight:bold;">Arcadia</div>
            <div style="font-size:0.75rem;">Hobby House</div>
        </div>
    </a>

    <div class="d-flex align-items-center gap-2 d-lg-none">

        <a class="nav-link profile-icon" href="{{route('profile')}}">
            <i class="bi bi-person-fill"></i>
        </a>

        <a class="nav-link cart-icon" href="#">
            <i class="bi bi-cart2"></i>
            <span class="cart-badge">0</span>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="search-bar-wrapper d-none d-lg-block mx-3">
          <form class="position-relative" id="searchForm" autocomplete="off" method="POST" action="{{route('searchProduct')}}">
                  @csrf
                    <input type="text" id="searchInput" class="form-control search-input" placeholder="Search products, categories..." aria-label="Search" name="search">
                    <button class="btn search-btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                    <div id="suggestions" class="suggestions-list d-none"></div>
                </form>
    </div>

    <div class="collapse navbar-collapse" id="navbarMenu">

        <div class="navbar-nav ms-auto d-none d-lg-flex align-items-lg-center gap-3">

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Categories
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                     <li><a class="dropdown-item" href="{{route('category.show','board games')}}">Board Games</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','trading cards')}}">Trading Cards</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','lego sets')}}">LEGO Sets</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','collectibles')}}">Collectibles</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','puzzles')}}">Puzzles</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','art supplies')}}">Art Supplies</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','all categories')}}">All Categories</a></li>
                </ul>
            </div>

            <a class="nav-link" href="{{route('navigate', 'featured')}}">Featured</a>
            <a class="nav-link" href="{{route('navigate', 'best-seller')}}">Best Sellers</a>

            <a class="nav-link profile-icon " href="{{route('profile')}}">
                <i class="bi bi-person-fill"></i>
            </a>

            <a class="nav-link cart-icon d-inline-flex" href="#">
                        <i class="bi bi-cart2"></i>
                        <span class="cart-badge"> {{ Auth::check() ? \App\Models\Cart::where('user_id', Auth::id())->count() : 0 }}</span>
            </a>
        </div>

        <div class="mobile-collapsed-menu d-lg-none">

            <!-- SEARCH -->
            <form class="position-relative mb-3" id="searchFormMobile">
                <input type="text" id="searchInputMobile"
                    class="form-control search-input"
                    placeholder="Search...">
                <button class="btn search-btn"><i class="bi bi-search"></i></button>
                <div id="suggestionsMobile" class="suggestions-list d-none"></div>
            </form>

            <div class="mobile-category-grid">
                <button class="btn category-chip">🎲 Board Games</button>
                <button class="btn category-chip">🃏 Trading Cards</button>
                <button class="btn category-chip">🧱 LEGO Sets</button>
                <button class="btn category-chip">⭐ Collectibles</button>
                <button class="btn category-chip">🧩 Puzzles</button>
                <button class="btn category-chip">🎨 Art Supplies</button>
            </div>

        </div>

    </div>
</div>
</nav>

 
    <script>
    let mockDB = { products: [] };

// BOTH INPUTS (desktop + mobile)
const searchInputs = [
  {
    input: document.getElementById('searchInput'),
    box: document.getElementById('suggestions')
  },
  {
    input: document.getElementById('searchInputMobile'),
    box: document.getElementById('suggestionsMobile')
  }
];

// LOAD PRODUCTS
fetch('/products')
  .then(res => res.json())
  .then(data => {
    mockDB.products = data;
    console.log('Products loaded', data);
  })
  .catch(err => {
    console.error('Failed to load products', err);
  });


// CREATE ITEM
function createSuggestionItem(product, inputList) {
  const item = document.createElement('div');
  item.className = 'suggestion-item';
  item.textContent = `${product.name} · ${product.category}`;

  item.addEventListener('mousedown', function (e) {
    e.preventDefault();

    // fill ALL inputs (desktop + mobile sync)
    inputList.forEach(i => {
      if (i.input) i.input.value = product.name;
    });

    hideAllSuggestions();

    // submit desktop form if exists
    const form = document.getElementById('searchForm');
    if (form) form.submit();
  });

  return item;
}


// SHOW SUGGESTIONS
function showSuggestions(matches, box, inputList) {
  box.innerHTML = '';

  if (!matches.length) {
    box.classList.add('d-none');
    return;
  }

  matches.slice(0, 6).forEach(product => {
    box.appendChild(createSuggestionItem(product, inputList));
  });

  box.classList.remove('d-none');
}


// HIDE ALL
function hideAllSuggestions() {
  searchInputs.forEach(s => {
    if (s.box) s.box.classList.add('d-none');
  });
}


// SEARCH LOGIC
function filterProducts(query) {
  const q = query.trim().toLowerCase();

  if (!q) return [];

  return (mockDB.products || []).filter(p =>
    p.name.toLowerCase().startsWith(q)
  );
}


// ATTACH EVENTS TO BOTH INPUTS
searchInputs.forEach(({ input, box }) => {
  if (!input) return;

  input.addEventListener('input', function () {
    const query = this.value;

    if (!query) {
      box.classList.add('d-none');
      return;
    }

    const results = filterProducts(query);

    showSuggestions(results, box, searchInputs);
  });

  input.addEventListener('focus', function () {
    if (this.value.trim() !== '') {
      const results = filterProducts(this.value);
      const box = searchInputs.find(s => s.input === this)?.box;
      if (box) showSuggestions(results, box, searchInputs);
    }
  });

  input.addEventListener('blur', function () {
    setTimeout(() => hideAllSuggestions(), 150);
  });
});


// FORM SUBMIT
const desktopForm = document.getElementById('searchForm');

if (desktopForm) {
  desktopForm.addEventListener('submit', function (e) {
    const input = document.getElementById('searchInput');
    const query = input ? input.value.trim() : '';

    if (!query) {
      e.preventDefault();
      return;
    }

    hideAllSuggestions();
  });
}


// OPTIONAL UI EVENTS (your existing features)
document.querySelectorAll('.cart-icon').forEach(el => {
  el.addEventListener('click', function (e) {
    console.log('Cart clicked');
  });
});

document.querySelectorAll('.profile-icon').forEach(el => {
  el.addEventListener('click', function (e) {
    console.log('Profile clicked');
  });
});

console.log('Navbar + Search system loaded successfully 🚀');
    </script>



{{--    <li><a class="dropdown-item" href="{{route('category.show','board games')}}">Board Games</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','trading cards')}}">Trading Cards</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','lego sets')}}">LEGO Sets</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','collectibles')}}">Collectibles</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','puzzles')}}">Puzzles</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','art supplies')}}">Art Supplies</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show','all categories')}}">All Categories</a></li>
                            
                               <a class="nav-link cart-icon d-inline-flex" href="#">
                        <i class="bi bi-cart2"></i>
                        <span class="cart-badge"> {{ Auth::check() ? \App\Models\Cart::where('user_id', Auth::id())->count() : 0 }}</span>
                    </a>
                            

                 
                            --}}