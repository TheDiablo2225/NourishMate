<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NourishMate - Natural Supplements</title>
  <style>
     body {
      font-family: 'Arial', sans-serif;
      background-color: darkslategray;
      margin: 0;
      padding: 0;
      color: #333;
      transition: background-color 0.3s ease-in-out;
    }

    header {
      background-color:azure;
      padding: 15px;
      color: white;
      text-align: center;
      transition: background-color 0.3s ease-in-out;
    }

    section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .product {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 15px;
      margin: 10px;
      width: 200px;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .product:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .product img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .product:hover img {
      transform: scale(1.1);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .product h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color:  #4CAF50;
      transition: color 0.3s ease-in-out;
    }

    .product:hover h2 {
      color: #ff6f61;
    }

    .product p {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
    }

    .product input {
      width: 50px;
      padding: 5px;
      margin-top: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .product button {
      background-color: lightgray;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s ease-in-out;
    }

    .product button:hover {
      background-color: darkgray;
    }

    #cart {
      margin-top: 20px;
    }

    #cart-items {
      list-style: none;
      padding: 0;
    }

    #cart-items li {
      font-size: 14px;
      margin-bottom: 5px;
    }

    #cart-total {
      font-weight: bold;
      font-size: 16px;
    }

    button {
      background-color: lightgray;
      color: black;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease-in-out;
    }

    button:hover {
      background-color: darkgray;
    }
  </style>
</head>
<body>

  <header>
    <h1 style="color:darkslategray">Supplement Haven</h1>
  </header>

  <section id="products">
    <!-- Product 1 -->
    <div class="product">
      <img src="https://m.media-amazon.com/images/I/614yf3Ym5YL._AC_UF1000,1000_QL80_.jpg" alt="Natural Supplement 1">
      <h2>Pure Nutrition Organic Whole Food Vitamin</h2>
      <p>Reduce the risk of nutrient deficiencies, and boost energy levels, Bone mineralization</p>
      <p>Category: Capsules</p>
      <p>Price: Rs.120</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Pure Nutrition Organic Whole Food Vitamin', this.value)">
    </div>
 <div class="product">
    <img src="https://www.netmeds.com/images/product-v1/600x600/1020118/khadi_natural_henna_thyme_hair_tonic_paraben_free_210_ml_0_0.jpg" alt="Natural Supplement 2">
      <h2>Khadi Natural Henna Thyme Hair Tonic Paraben </h2>
      <p>Perfect for blow-drying and protects hair from all types of thermal styling Ideal for all hair types</p>
      <p>Category: Tonic</p>
      <p>Price: Rs.220</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Khadi Natural Henna Thyme Hair Tonic Paraben', this.value)">
    </div>
     <div class="product">
    <img src="https://i5.walmartimages.com/asr/b73782fb-9c55-428d-baa5-874108e289f7.9f29375495ae69dcae716255b7aaef46.jpeg?odnHeight=320&odnWidth=320&odnBg=FFFFFF" alt="Natural Supplement 3">
      <h2>OLLY Hello Happy Gummy Worms</h2>
      <p>Mood Balance ,Support Supplement, Vitamin D</p>
      <p>Category: Gummies</p>
      <p>Price: Rs.290</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('OLLY Hello Happy Gummy Worms', this.value)">
    </div>
     <div class="product">
    <img src="https://i5.peapod.com/c/66/66Q38.jpg" alt="Natural Supplement 4">
      <h2>Olly Daily Enery Vitamin B12</h2>
      <p>This vitamin helps in active cellular enery </p>
      <p>Category: Gummies</p>
      <p>Price: Rs.650</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Olly Daily Enery Vitamin B12', this.value)">
    </div>
     <div class="product">
    <img src="https://www.bigbasket.com/media/uploads/p/l/40269801_1-herbal-max-keto-nutrition-800-mg-capsules-weight-loss-supplement-natural-advance-fat-burner.jpg" alt="Natural Supplement 5">
      <h2>Herbal max Keto Nutrition 800 mg Capsules</h2>
      <p>This ketogenic blend product helps in reducing body weight significantly</p>
      <p>Category: Capsules</p>
      <p>Price: Rs.420</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Herbal max Keto Nutrition 800 mg Capsules', this.value)">
    </div>
    <div class="product">
      <img src="https://anushveda.com/wp-content/uploads/2022/09/shimbhala-honey.jpg" alt="Natural Supplement 6">
      <h2>shimbhala-honey</h2>
      <p>Contains fructo-oligosaccharides and many amino acids, vitamins, minerals and enzymes</p>
      <p>Category: Supersaturated liquid</p>
      <p>Price: Rs.280</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('shimbhala-honey', this.value)">
    </div>
    <div class="product">
      <img src="https://www.bigbasket.com/media/uploads/p/l/40227411_2-himalayan-organics-plant-based-calcium-whole-food-supplement-capsules-for-bone-health.jpg" alt="Natural Supplement 7">
      <h2>Himalayan Organics Plant Based Calcium Whole Food</h2>
      <p>Easy-to-swallow, ultra-mild and easy-to-absorb calcium tablets</p>
      <p>Category: Capsules</p>
      <p>Price: Rs.170</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Himalayan Organics Plant Based Calcium Whole Food', this.value)">
    </div>
    <div class="product">
      <img src="https://images-na.ssl-images-amazon.com/images/I/414P4UyUcFL.jpg" alt="Natural Supplement 8">
      <h2>Menopause Complete Herbal Care</h2>
      <p>Herbal formula with Dong Quai, Chamomile, Black Cohosh and Milk Thistle </p>
      <p>Category: Capsules</p>
      <p>Price:Rs.200</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Menopause Complete Herbal Care', this.value)">
    </div>
    <div class="product">
      <img src="https://m.media-amazon.com/images/I/51NmTy5sq1L.jpg" alt="Natural Supplement 9">
      <h2>Prorganiq Vision Optimum</h2>
      <p>Best Eye Health Vitamins Supplement with Vitamin A, Lutein & Bilberry</p>
      <p>Category: Capsules</p>
      <p>Price:Rs.340</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Prorganiq Vision Optimum', this.value)">
    </div>
    <div class="product">
      <img src="https://www.stjohnsbotanicals.com/wp-content/uploads/2021/01/1772-ns-flax-oil-1000mg-250soft-front.jpg" alt="Natural Supplement 10">
      <h2>Flax Oil, 1,000mg, 250 Softgels</h2>
      <p>With Essential Omega-3s, Made with Organic Flax Oil</p>
      <p>Category: Nutritional Oils</p>
      <p>Price: Rs.500</p>
      <input type="number" class="quantity" value="0" min="0" onchange="updateCart('Flax Oil', this.value)">
    </div>
  </section>

  <section id="cart">
    <h2 style="color:lightgray">Shopping Cart</h2>
    <ul id="cart-items" style="color:lightgray">
      <!-- Cart items will be dynamically added here -->
    </ul>
    <p style="color:lightgray">Total: Rs.<span id="cart-total">0.00</span></p>
    <button onclick="viewCart()">View Cart</button>
  </section>

  <script>
    let cart = {};
    let prices = {
      'Pure Nutrition Organic Whole Food Vitamin': 120,
      'Khadi Natural Henna Thyme Hair Tonic Paraben': 220,
       'OLLY Hello Happy Gummy Worms': 290,
       'Olly Daily Enery Vitamin B12': 650,
       'Herbal max Keto Nutrition 800 mg Capsules': 420,
       'shimbhala-honey': 280,
       'Himalayan Organics Plant Based Calcium Whole Food': 170,
       'Menopause Complete Herbal Care': 200,
       'Prorganiq Vision Optimum': 340,
      'Flax Oil': 500,
    };

    function updateCart(product, quantity) {
      cart[product] = quantity;
      updateCartDisplay();
    }

    function updateCartDisplay() {
      const cartItemsElement = document.getElementById('cart-items');
      const cartTotalElement = document.getElementById('cart-total');
      let total = 0;

      // Clear existing items
      cartItemsElement.innerHTML = '';

      // Add new items
      for (const product in cart) {
        const quantity = cart[product];
        const price = prices[product];
        const subtotal = quantity * price;

        if (quantity > 0) {
          total += subtotal;

          const listItem = document.createElement('li');
          listItem.textContent = `${product} x${quantity} - $${subtotal.toFixed(2)}`;
          cartItemsElement.appendChild(listItem);
        }
      }

      // Update total
      cartTotalElement.textContent = total.toFixed(2);
    }

    function viewCart() {
      // In a real scenario, you might want to redirect to a new page for the cart view
      alert('Redirecting to Cart Page...');
    }
  </script>

</body>
</html>
