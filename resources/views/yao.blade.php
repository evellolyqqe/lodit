  <title>Mai Yao</title>


  <style>
    body {
      background-color: #1e1e1e;
      color: #f5f5f5;
      font-family: 'Poppins', sans-serif;
    }

    .catalog-box {
      background-color: #2b2b2b;
      border: 1px solid #444;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      padding: 30px;
    }

    .catalog-box h2 {
      border-bottom: 2px solid #555;
      padding-bottom: 10px;
      margin-bottom: 20px;
      color: #f0f0f0;
    }

    .card {
      background-color: #2a2a2a;
      color: #fff;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 14px rgba(0,0,0,0.6);
    }

    .card-img-top {
      border-radius: 12px 12px 0 0;
      height: 200px;
      object-fit: cover;
    }

    .modal-content {
      background-color: #2b2b2b;
      color: #f5f5f5;
      border-radius: 10px;
    }

    .list-group-item {
      background-color: #2f2f2f;
      color: #f5f5f5;
      border: 1px solid #444;
    }

    .btn-primary {
      background-color: #b0b0b0;
      border: none;
      color: #1e1e1e;
      font-weight: 600;
      transition: 0.2s;
    }

    .btn-primary:hover {
      background-color: #d0d0d0;
      color: #000;
    }

    .btn-success {
      background-color: #a6a6a6;
      border: none;
      color: #1e1e1e;
      font-weight: 600;
    }

    .btn-success:hover {
      background-color: #c7c7c7;
    }

    .btn-secondary {
      background-color: #444;
      border: none;
      color: #f5f5f5;
    }

    .btn-secondary:hover {
      background-color: #555;
    }

    .modal-header, .modal-footer {
      border: none;
    }

    h2, h5 {
      color: #f0f0f0;
    }
  </style>
</head>

<body>

  <div class="container" style="margin-top: 100px;">
    <div class="catalog-box">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Medicine Catalog</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal">
          <i class="bi bi-cart3"></i> Cart (<span id="cart-count">0</span>)
        </button>
      </div>
      <div class="row" id="product-list"></div>
    </div>
  </div>

  <!-- 🛒 Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Your Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group mb-3" id="cart-items"></ul>
          <h5>Total: $ <span id="cart-total">0</span></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="saveOrder()">Pay Now</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const currentUser = "{{ $username ?? 'Guest' }}";
    console.log("Cart script loaded");

    const products = [
      {
        id: 1,
        name: "Tylenol Extra Strength (Acetaminophen 500mg)",
        price: 8,
        image: "{{ asset('foto/goodb.jpg') }}",
        description: "Pain reliever and fever reducer commonly used for headaches, muscle aches, and fevers."
      },
      {
        id: 2,
        name: "Advil (Ibuprofen 200mg)",
        price: 10,
        image: "{{ asset('foto/wkai.jpg') }}",
        description: "NSAID that reduces pain, swelling, and inflammation from headaches or minor injuries."
      },
      {
        id: 3,
        name: "Zyrtec (Cetirizine 10mg)",
        price: 15,
        image: "{{ asset('foto/huh.jpg') }}",
        description: "Antihistamine used to relieve allergy symptoms like runny nose and itchy eyes."
      },
      {
        id: 4,
        name: "Pepto-Bismol",
        price: 12,
        image: "{{ asset('foto/kaister.jpg') }}",
        description: "Used to relieve nausea, upset stomach, heartburn, and indigestion."
      },
      {
        id: 5,
        name: "Tums Antacid Tablets",
        price: 7,
        image: "{{ asset('foto/chipster.jpg') }}",
        description: "Chewable tablets that relieve heartburn and acid indigestion."
      },
      {
        id: 6,
        name: "NyQuil Cold & Flu Relief",
        price: 14,
        image: "{{ asset('foto/dont.jpg') }}",
        description: "Nighttime medicine that helps relieve cold and flu symptoms and promotes rest."
      }
    ];

    let cart = [];

    function renderProducts() {
      const productList = document.getElementById('product-list');
      productList.innerHTML = products.map(product => `
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="${product.image}" class="card-img-top" alt="${product.name}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">${product.name}</h5>
              <p class="card-text">${product.description}</p>
              <div class="mt-auto">
                <h5>$ ${product.price.toLocaleString('en-US')}</h5>
                <button class="btn btn-primary w-100" onclick="addToCart(${product.id})">
                  <i class="bi bi-cart-plus"></i> Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      `).join('');
    }

    function addToCart(productId) {
      const product = products.find(p => p.id === productId);
      const existingItem = cart.find(item => item.id === productId);

      if (existingItem) {
        existingItem.quantity++;
      } else {
        cart.push({ ...product, quantity: 1 });
      }
      updateCartUI();
    }

    function removeFromCart(productId) {
      cart = cart.filter(item => item.id !== productId);
      updateCartUI();
    }

    function updateCartUI() {
      const cartItemsContainer = document.getElementById('cart-items');
      const cartCount = document.getElementById('cart-count');
      const cartTotal = document.getElementById('cart-total');

      if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<li class="list-group-item">Your cart is empty.</li>';
      } else {
        cartItemsContainer.innerHTML = cart.map(item => `
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>${item.name} (x${item.quantity})</div>
            <div>
              <span>$ ${(item.price * item.quantity).toLocaleString('en-US')}</span>
              <button class="btn btn-sm btn-danger ms-2" onclick="removeFromCart(${item.id})">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </li>
        `).join('');
      }

      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

      cartCount.textContent = totalItems;
      cartTotal.textContent = totalPrice.toLocaleString('en-US');
    }

    document.addEventListener('DOMContentLoaded', () => {
      renderProducts();
      updateCartUI();
    });

    function saveOrder() {
      if (cart.length === 0) {
        alert('Your cart is empty.');
        return;
      }

      const orderData = {
        customer_name: currentUser,
        items: cart,
        total: cart.reduce((sum, item) => sum + item.price * item.quantity, 0)
      };

      fetch('/save-order', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(orderData)
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Order saved successfully! Order ID: ' + data.order_id);
          cart = [];
          updateCartUI();
        } else {
          alert('Error saving order.');
        }
      })
      .catch(error => {
        console.error('Error saving order:', error);
        alert('Failed to save order.');
      });
    }
  </script>
</body>
</html>
