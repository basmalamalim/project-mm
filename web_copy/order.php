<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online - Savory & Sweet</title>
    <link rel="shortcut icon" href="title.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img id= image src="icon.jpg" alt="Restaurant Logo" height="40">
                Savory & Sweet
            </a>


            <button class="btn btn-outline-light ms-auto" data-bs-toggle="modal" data-bs-target="#ratingModal">
                <i class="fas fa-star"></i> Rate Us
              </button>


            <div class="d-flex ms-3">
                <a href="index.php" class="btn btn-outline-light me-2">Back to Home</a>
            </div>
        </div>
    </nav>





    <div class="order-header-wrapper">
        <div class="order-header-overlay">
            <div class="header-content">
                <h1 class="order-header-title">Don’t Starve, Order now!</h1>
                <p class="order-subtitle">Enjoy our delicious food at your doorstep</p>
                <a href="#menu-section" class="btn btn-primary btn-lg">
                    Start Your Order
                </a>
            </div>
        </div>
    </div>




    

        <div class="row" id="menu-section">
            <!-- Menu Items Column -->
            <div class="col-lg-8">
                <div class="menu-section py-5 bg-light" id="menu">
                    <h2 class="text-center mb-5">Our Menu</h2>
                    <ul class="nav nav-tabs justify-content-center mb-4" id="menuTabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#starters">Starters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#mains">Main Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#desserts">Desserts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#drinks">Drinks</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="starters">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="1" data-name="Bruschetta" data-price="8.99">
                                        <div class="item-header">
                                            <h4>Bruschetta</h4>
                                            <span class="price">$8.99</span>
                                        </div>
                                        <p>Toasted bread topped with tomatoes, garlic, and fresh basil</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="2" data-name="French Onion Soup" data-price="7.99">
                                        <div class="item-header">
                                            <h4>French Onion Soup</h4>
                                            <span class="price">$7.99</span>
                                        </div>
                                        <p>Rich and deeply caramelized onion soup, topped with toasted bread and melted Halal Gruyère cheese. A classic comfort.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="3" data-name="Calamari" data-price="12.99">
                                        <div class="item-header">
                                            <h4>Calamari</h4>
                                            <span class="price">$12.99</span>
                                        </div>
                                        <p>Crispy fried squid served with lemon aioli</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="4" data-name="Caprese Salad" data-price="10.99">
                                        <div class="item-header">
                                            <h4>Caprese Salad</h4>
                                            <span class="price">$10.99</span>
                                        </div>
                                        <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic glaze</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="5" data-name="Ratatouille" data-price="16.99">
                                        <div class="item-header">
                                            <h4>Ratatouille</h4>
                                            <span class="price">$16.99</span>
                                        </div>
                                        <p>A vibrant and flavorful Provençal vegetable stew featuring eggplant, zucchini, bell peppers, tomatoes, onions, and garlic.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="6" data-name="Stuffed Mushrooms" data-price="9.99">
                                        <div class="item-header">
                                            <h4>Stuffed Mushrooms</h4>
                                            <span class="price">$9.99</span>
                                        </div>
                                        <p>Mushroom caps filled with herbed cream cheese and breadcrumbs</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="mains">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="7" data-name="Filet Mignon" data-price="34.99">
                                        <div class="item-header">
                                            <h4>Filet Mignon</h4>
                                            <span class="price">$34.99</span>
                                        </div>
                                        <p>8oz tender beef filet with red wine reduction and truffle mashed potatoes</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="8" data-name="Grilled Sea Bass" data-price="28.99">
                                        <div class="item-header">
                                            <h4>Grilled Sea Bass</h4>
                                            <span class="price">$28.99</span>
                                        </div>
                                        <p>Fresh sea bass with lemon-caper sauce and roasted vegetables</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="9" data-name="Truffle Pasta" data-price="24.99">
                                        <div class="item-header">
                                            <h4>Truffle Pasta</h4>
                                            <span class="price">$24.99</span>
                                        </div>
                                        <p>Handmade pasta with black truffle and parmesan cream sauce.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="10" data-name="Grilled Salmon" data-price="33.99">
                                        <div class="item-header">
                                            <h4>Grilled Salmon</h4>
                                            <span class="price">$33.99</span>
                                        </div>
                                        <p>Fresh Atlantic salmon with lemon butter sauce and seasonal vegetables.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="11" data-name="Moroccan Vegetable Couscous (Vegetarian)" data-price="20.99">
                                        <div class="item-header">
                                            <h4>Moroccan Vegetable Couscous (Vegetarian)</h4>
                                            <span class="price">$20.99</span>
                                        </div>
                                        <p>Steamed couscous topped with a hearty mix of spiced seasonal vegetables in a savory broth</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="12" data-name="Mutton Curry" data-price="25.99">
                                        <div class="item-header">
                                            <h4>Mutton Curry</h4>
                                            <span class="price">$25.99</span>
                                        </div>
                                        <p>Tender halal mutton slow-cooked in a rich, spicy curry sauce with onions, tomatoes, and traditional Indian spices.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="13" data-name="Mushroom Risotto" data-price="22.99">
                                        <div class="item-header">
                                            <h4>Mushroom Risotto</h4>
                                            <span class="price">$22.99</span>
                                        </div>
                                        <p>Creamy arborio rice with wild mushrooms and parmesan</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="14" data-name="Herb-Crusted Rack of Lamb" data-price="36.99">
                                        <div class="item-header">
                                            <h4>Herb-Crusted Rack of Lamb</h4>
                                            <span class="price">$36.99</span>
                                        </div>
                                        <p>New Zealand lamb with mint jus and potato gratin</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="15" data-name="Beef Shawarma" data-price="22.99">
                                        <div class="item-header">
                                            <h4>Beef Shawarma</h4>
                                            <span class="price">$22.99</span>
                                        </div>
                                        <p>Thin slices of marinated halal beef grilled and served in flatbread with garlic sauce and pickles</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="16" data-name="Lamb Kofta Kebab" data-price="30.99">
                                        <div class="item-header">
                                            <h4>Lamb Kofta Kebab</h4>
                                            <span class="price">$30.99</span>
                                        </div>
                                        <p>Grilled skewers of spiced minced halal lamb, mixed with garlic, parsley, and Middle Eastern spices.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="17" data-name="Chicken Biryani" data-price="40.99">
                                        <div class="item-header">
                                            <h4>Chicken Biryani</h4>
                                            <span class="price">$40.99</span>
                                        </div>
                                        <p>Aromatic basmati rice cooked with marinated halal chicken, blended with spices, saffron, and herbs.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="18" data-name="Shish Tawook" data-price="15.99">
                                        <div class="item-header">
                                            <h4>Shish Tawook</h4>
                                            <span class="price">$15.99</span>
                                        </div>
                                        <p>Marinated chunks of halal chicken grilled on skewers, served with garlic sauce and flatbread.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="desserts">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="19" data-name="Tiramisu" data-price="9.99">
                                        <div class="item-header">
                                            <h4>Tiramisu</h4>
                                            <span class="price">$9.99</span>
                                        </div>
                                        <p>Classic Italian dessert with layers of coffee-soaked ladyfingers and mascarpone cream</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="20" data-name="Chocolate Lava Cake" data-price="10.99">
                                        <div class="item-header">
                                            <h4>Chocolate Lava Cake</h4>
                                            <span class="price">$10.99</span>
                                        </div>
                                        <p>Warm chocolate cake with a molten center, served with vanilla ice cream</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="21" data-name="Chocolate Soufflé" data-price="12.99">
                                        <div class="item-header">
                                            <h4>Chocolate Soufflé</h4>
                                            <span class="price">$12.99</span>
                                        </div>
                                        <p>Warm chocolate soufflé with vanilla ice cream and raspberry coulis.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="22" data-name="Sticky Date Pudding" data-price="13.99">
                                        <div class="item-header">
                                            <h4>Sticky Date Pudding</h4>
                                            <span class="price">$13.99</span>
                                        </div>
                                        <p>Moist sponge cake made with dates, served with a rich toffee sauce.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="23" data-name="Crème Brûlée" data-price="10.99">
                                        <div class="item-header">
                                            <h4>Crème Brûlée</h4>
                                            <span class="price">$10.99</span>
                                        </div>
                                        <p>Rich custard topped with a layer of caramelized sugar</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="24" data-name="Seasonal Fruit Tart" data-price="8.99">
                                        <div class="item-header">
                                            <h4>Seasonal Fruit Tart</h4>
                                            <span class="price">$8.99</span>
                                        </div>
                                        <p>Buttery pastry crust filled with pastry cream and fresh seasonal fruits</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="25" data-name="Chocolate Mousse" data-price="7.99">
                                        <div class="item-header">
                                            <h4>Chocolate Mousse</h4>
                                            <span class="price">$7.99</span>
                                        </div>
                                        <p>Rich and airy chocolate mousse made with halal-certified ingredients and no animal gelatin</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="26" data-name="Baklava" data-price="8.99">
                                        <div class="item-header">
                                            <h4>Baklava</h4>
                                            <span class="price">$8.99</span>
                                        </div>
                                        <p>Flaky layers of phyllo dough filled with chopped nuts and sweetened with honey or syrup</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="drinks">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="27" data-name="Mango Lassi" data-price="12.99">
                                        <div class="item-header">
                                            <h4>Mango Lassi</h4>
                                            <span class="price">$12.99</span>
                                        </div>
                                        <p>A sweet yogurt-based drink blended with ripe mango and cardamom</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="28" data-name="Mint Lemonade" data-price="8.99">
                                        <div class="item-header">
                                            <h4>Mint Lemonade</h4>
                                            <span class="price">$8.99</span>
                                        </div>
                                        <p>A refreshing drink made with fresh lemon juice, mint leaves, and a touch of sugar, served chilled.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="29" data-name="Fraise au Lait" data-price="12.99">
                                        <div class="item-header">
                                            <h4>Fraise au Lait</h4>
                                            <span class="price">$12.99</span>
                                        </div>
                                        <p>A creamy French-style strawberry milk made with fresh strawberry purée and chilled milk – sweet, simple, and perfect for all ages.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="30" data-name="Iced Coffee" data-price="8.99">
                                        <div class="item-header">
                                            <h4>Iced Coffee</h4>
                                            <span class="price">$8.99</span>
                                        </div>
                                        <p>A chilled, smooth coffee made with freshly brewed halal coffee, sweetened with sugar or flavored syrups, and topped with ice and a splash of milk or cream.</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu-item" data-id="31" data-name="Artisanal Coffee" data-price="4.99">
                                        <div class="item-header">
                                            <h4>Artisanal Coffee</h4>
                                            <span class="price">$4.99 - $6.99</span>
                                        </div>
                                        <p>Premium coffee blends served with optional liqueurs</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="32" data-name="Fresh Juices" data-price="3.99">
                                        <div class="item-header">
                                            <h4>Fresh Juices</h4>
                                            <span class="price">$3.99</span>
                                        </div>
                                        <p>Cold-pressed juices made daily</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="33" data-name="Strawberry Mojito" data-price="5.99">
                                        <div class="item-header">
                                            <h4>Strawberry Mojito</h4>
                                            <span class="price">$5.99</span>
                                        </div>
                                        <p>A vibrant mix of fresh strawberries, mint, lime, and soda water – alcohol-free and full of flavor</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                    <div class="menu-item" data-id="34" data-name="Hot Chocolate" data-price="7.99">
                                        <div class="item-header">
                                            <h4>Hot Chocolate</h4>
                                            <span class="price">$7.99</span>
                                        </div>
                                        <p>Rich, smooth cocoa drink made with milk and halal-certified chocolate</p>
                                        <button class="btn btn-sm btn-primary add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary Column -->
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3 class="text-center mb-4">Your Order</h3>
                    <div id="cartItems">



                        <p class="text-muted text-center empty-cart-message">Your cart is empty</p>



                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <h5>Subtotal:</h5>
                        <h5 id="subtotal">$0.00</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>Tax (10%):</h5>
                        <h5 id="tax">$0.00</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>Delivery Fee:</h5>
                        <h5 id="deliveryFee">$3.99</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Total:</h4>
                        <h4 id="total">$3.99</h4>
                    </div>
                    
                    <button class="btn btn-success w-100 mt-3" id="checkoutBtn" data-bs-toggle="modal" data-bs-target="#checkoutModal" disabled>
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Complete Your Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="order.php">
    <div class="mb-3">
        <label for="full_name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name" required>
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="delivery_address" class="form-label">Delivery Address</label>
        <textarea class="form-control" id="delivery_address" name="delivery_address" rows="3" required></textarea>
    </div>
    <div class="mb-3">
    <label for="delivery_time" class="form-label">Delivery Time</label>
    <select class="form-select" id="delivery_time" name="delivery_time" required>
        <option value="As soon as possible">As soon as possible</option>
        <option value="Within 30 minutes">Within 30 minutes</option>
        <option value="Within 1 hour">Within 1 hour</option>
        <option value="Specific time">Specific time</option>
    </select>
</div>

<div class="mb-3">
    <label for="payment_method" class="form-label">Payment Method</label>
    <select class="form-select" id="payment_method" name="payment_method" required>
        <option value="Cash on Delivery">Cash on Delivery</option>
        <option value="Credit Card">Credit Card</option>
    </select>
</div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms_accepted" name="terms_accepted" required>
        <label class="form-check-label" for="terms_accepted">I agree to the terms and conditions</label>
    </div>
    <button type="submit" value="PlaceOrder" name="PlaceOrder" class="btn btn-primary w-100">Place Order</button>
</form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2025 Savory & Sweet. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Rating Modal -->
<div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ratingModalLabel">Rate Your Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="order.php">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Your Rating</label>
              <div class="star-rating">
                <i class="far fa-star" data-rating="1"></i>
                <i class="far fa-star" data-rating="2"></i>
                <i class="far fa-star" data-rating="3"></i>
                <i class="far fa-star" data-rating="4"></i>
                <i class="far fa-star" data-rating="5"></i>
              </div>
              <input type="hidden" id="rating" name="rating" value="0">
            </div>
            <div class="mb-3">
              <label for="comments" class="form-label">Comments (Optional)</label>
              <input type="text" id="comments" name="comments"  class="form-control" rows="5"  required>
            </div>
            <button type="submit" value="SubmitRating" name="SubmitRating" class="btn btn-primary">Submit Rating</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Rating Success Toast -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="ratingToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Thank You!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Your rating has been submitted successfully!
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="java.js"></script>


    <script>
document.addEventListener('DOMContentLoaded', function() {
  const stars = document.querySelectorAll('.star-rating i');
  const ratingInput = document.getElementById('rating');
  
  stars.forEach(star => {
    star.addEventListener('click', function() {
      const rating = this.getAttribute('data-rating');
      ratingInput.value = rating;
      
      // تحديث مظهر النجوم
      stars.forEach((s, index) => {
        if (index < rating) {
          s.classList.remove('far');
          s.classList.add('fas');
        } else {
          s.classList.remove('fas');
          s.classList.add('far');
        }
      });
    });
    
    // إضافة تأثير عند تمرير الماوس
    star.addEventListener('mouseover', function() {
      const hoverRating = this.getAttribute('data-rating');
      stars.forEach((s, index) => {
        if (index < hoverRating) {
          s.classList.remove('far');
          s.classList.add('fas');
        } else {
          s.classList.remove('fas');
          s.classList.add('far');
        }
      });
    });
    
    // إعادة التعيين عند مغادرة الماوس (إذا لم يتم النقر)
    star.addEventListener('mouseout', function() {
      const currentRating = ratingInput.value;
      stars.forEach((s, index) => {
        if (index < currentRating) {
          s.classList.remove('far');
          s.classList.add('fas');
        } else {
          s.classList.remove('fas');
          s.classList.add('far');
        }
      });
    });
  });
});
</script>
</body>
</html>


<?php
if (isset($_POST['SubmitRating'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments =$_POST['comments'];

    require_once 'connection.php';
    
   
   $result = mysqli_query($link, "INSERT INTO rating (rate_name, rate_email, rating,rate_comments) VALUES ('$name', '$email', '$rating', '$comments')");
    
  
     if ($result) {
        echo '<script>alert("Your rating has been submitted successfully!");</script>';
    } else {
        echo '<script>alert("There was an error submitting your rating. Please try again.");</script>';
    }
    
    mysqli_close($link);
}




if (isset($_POST['PlaceOrder'])) 
{
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $delivery_address = $_POST['delivery_address'];
    $delivery_time = $_POST['delivery_time'];
    $payment_method = $_POST['payment_method']; // بدون مسافة هنا
    $terms_accepted = isset($_POST['terms_accepted']) ? 1 : 0;

    require_once 'connection.php';

    $query = "INSERT INTO orders (order_name, order_number, order_email, order_delivery, delivery_time, payment_method, terms_accepted) 
              VALUES ('$full_name', '$phone_number', '$email', '$delivery_address', '$delivery_time', '$payment_method', '$terms_accepted')";

    $result = mysqli_query($link, $query);

    if ($result) {
        echo '<script>alert("Your order has been submitted successfully!");</script>';
    } else {
        echo '<script>alert("There was an error submitting your order. Please try again.");</script>';
    }

    mysqli_close($link);
}

?>