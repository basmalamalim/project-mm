



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory & Sweet </title>
    <link rel="shortcut icon" href="title.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id= img src="icon.jpg" alt="Restaurant Logo" height="40">
                Savory & Sweet 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex ms-3">
                    <button class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#reservationModal">Reservations</button>
                    <a href="order.php" class="btn btn-primary">Order Online</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Experience Culinary Excellence</h1>
                <p class="lead">Discover our carefully crafted menu featuring the finest ingredients and innovative flavors</p>
                <div class="hero-buttons">
                    <a href="#menu" class="btn btn-primary btn-lg">View Menu</a>
                    <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#reservationModal">Book a Table</button>
                </div>
            </div>
        </div>
    </section>
    <section class="special-offers py-5">
      <div class="container">
          <h2 class="text-center mb-5">Today's Specials</h2>
          <div class="row">
              <div class="col-md-4 mb-4">
                  <div class="card offer-card h-100">
                      <img src="pasta.png" class="card-img-top" alt="Special Dish 1">
                      <div class="card-body">
                          <h5 class="card-title">Truffle Pasta</h5>
                          <p class="card-text">Handmade pasta with black truffle and parmesan cream sauce.</p>
                          <span class="price">$24.99</span>
                          <span class="discount">$19.99</span>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card offer-card h-100">
                      <img src="c.png" class="card-img-top" alt="Special Dish 2">
                      <div class="card-body">
                          <h5 class="card-title">Grilled Salmon</h5>
                          <p class="card-text">Fresh Atlantic salmon with lemon butter sauce and seasonal vegetables.</p>
                          <span class="price">$28.99</span>
                          <span class="discount">$22.99</span>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card offer-card h-100">
                      <img src="mol.png" class="card-img-top" alt="Special Dish 3">
                      <div class="card-body">
                          <h5 class="card-title">Chocolate Soufflé</h5>
                          <p class="card-text">Warm chocolate soufflé with vanilla ice cream and raspberry coulis.</p>
                          <span class="price">$12.99</span>
                          <span class="discount">$9.99</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="menu-section py-5 bg-light" id="menu">
      <div class="container">
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
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Bruschetta</h4>
                                <span class="price">$8.99</span>
                            </div>
                            <p>Toasted bread topped with tomatoes, garlic, and fresh basil</p>
                        </div>
                        <div class="menu-item">
                          <div class="item-header">
                              <h4>French Onion Soup</h4>
                              <span class="price">$7.99</span>
                          </div>
                          <p>Rich and deeply caramelized onion soup, topped with toasted bread and melted Halal Gruyère cheese. A classic comfort.</p>
                      </div>
                      
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Calamari</h4>
                                <span class="price">$12.99</span>
                            </div>
                            <p>Crispy fried squid served with lemon aioli</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Caprese Salad</h4>
                                <span class="price">$10.99</span>
                            </div>
                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic glaze</p>
                        </div>
                        <div class="menu-item">
                          <div class="item-header">
                              <h4>Ratatouille</h4>
                              <span class="price">$16.99</span>
                          </div>
                          <p>A vibrant and flavorful Provençal vegetable stew featuring eggplant, zucchini, bell peppers, tomatoes, onions, and garlic.</p>
                      </div>
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Stuffed Mushrooms</h4>
                                <span class="price">$9.99</span>
                            </div>
                            <p>Mushroom caps filled with herbed cream cheese and breadcrumbs</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="mains">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Filet Mignon</h4>
                                <span class="price">$34.99</span>
                            </div>
                            <p>8oz tender beef filet with red wine reduction and truffle mashed potatoes</p>
                        </div>
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Grilled Sea Bass</h4>
                                <span class="price">$28.99</span>
                            </div>
                            <p>Fresh sea bass with lemon-caper sauce and roasted vegetables</p>
                        </div>


                        <div class="menu-item">
                          <div class="item-header">
                              <h4>Truffle Pasta</h4>
                              <span class="price">$24.99</span>
                          </div>
                          <p>Handmade pasta with black truffle and parmesan cream sauce.</p>
                      </div>


                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Grilled Salmon</h4>
                            <span class="price">$33.99</span>
                        </div>
                        <p>Fresh Atlantic salmon with lemon butter sauce and seasonal vegetables.</p>
                    </div>

                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Moroccan Vegetable Couscous (Vegetarian)</h4>
                          <span class="price">$20.99</span>
                      </div>
                      <p>Steamed couscous topped with a hearty mix of spiced seasonal vegetables in a savory broth</p>
                  </div>

                  <div class="menu-item">
                    <div class="item-header">
                        <h4>Mutton Curry</h4>
                        <span class="price">$25.99</span>
                    </div>
                    <p>Tender halal mutton slow-cooked in a rich, spicy curry sauce with onions, tomatoes, and traditional Indian spices.</p>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Mushroom Risotto</h4>
                                <span class="price">$22.99</span>
                            </div>
                            <p>Creamy arborio rice with wild mushrooms and parmesan</p>
                        </div>


                        <div class="menu-item">
                            <div class="item-header">
                                <h4>Herb-Crusted Rack of Lamb</h4>
                                <span class="price">$36.99</span>
                            </div>
                            <p>New Zealand lamb with mint jus and potato gratin</p>
                        </div>
                         


                        <div class="menu-item">
                          <div class="item-header">
                              <h4>Beef Shawarma</h4>
                              <span class="price">$22.99</span>
                          </div>
                          <p>Thin slices of marinated halal beef grilled and served in flatbread with garlic sauce and pickles</p>
                      </div>
                        

                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Lamb Kofta Kebab</h4>
                            <span class="price">$30.99</span>
                        </div>
                        <p>Grilled skewers of spiced minced halal lamb, mixed with garlic, parsley, and Middle Eastern spices.</p>
                    </div>
                     


                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Chicken Biryani</h4>
                          <span class="price">$40.99</span>
                      </div>
                      <p>Aromatic basmati rice cooked with marinated halal chicken, blended with spices, saffron, and herbs.</p>
                  </div>
                  <div class="menu-item">
                    <div class="item-header">
                        <h4>Shish Tawook</h4>
                        <span class="price">$15.99</span>
                    </div>
                    <p>Marinated chunks of halal chicken grilled on skewers, served with garlic sauce and flatbread.</p>
                </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="desserts">
              <div class="row">
                  <div class="col-md-6">
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Tiramisu</h4>
                              <span class="price">$9.99</span>
                          </div>
                          <p>Classic Italian dessert with layers of coffee-soaked ladyfingers and mascarpone cream</p>
                      </div>
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Chocolate Lava Cake</h4>
                              <span class="price">$10.99</span>
                          </div>
                          <p>Warm chocolate cake with a molten center, served with vanilla ice cream</p>
                      </div>

                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Chocolate Soufflé</h4>
                            <span class="price">$12.99</span>
                        </div>
                        <p>Warm chocolate soufflé with vanilla ice cream and raspberry coulis.</p>
                    </div>

                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Sticky Date Pudding</h4>
                          <span class="price">$13.99</span>
                      </div>
                      <p>Moist sponge cake made with dates, served with a rich toffee sauce.</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Crème Brûlée</h4>
                              <span class="price">$10.99</span>
                          </div>
                          <p>Rich custard topped with a layer of caramelized sugar</p>
                      </div>
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Seasonal Fruit Tart</h4>
                              <span class="price">$8.99</span>
                          </div>
                          <p>Buttery pastry crust filled with pastry cream and fresh seasonal fruits</p>
                      </div>

                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Chocolate Mousse</h4>
                            <span class="price">$7.99</span>
                        </div>
                        <p>Rich and airy chocolate mousse made with halal-certified ingredients and no animal gelatin</p>
                    </div>
                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Baklava</h4>
                          <span class="price">$8.99</span>
                      </div>
                      <p>Flaky layers of phyllo dough filled with chopped nuts and sweetened with honey or syrup</p>
                  </div>
                  </div>
              </div>
          </div>

          <div class="tab-pane fade" id="drinks">
              <div class="row">
                  <div class="col-md-6">
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Mango Lassi</h4>
                              <span class="price">$12.99</span>
                          </div>
                          <p>A sweet yogurt-based drink blended with ripe mango and cardamom</p>
                      </div>
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Mint Lemonade</h4>
                              <span class="price">$8.99</span>
                          </div>
                          <p>A refreshing drink made with fresh lemon juice, mint leaves, and a touch of sugar, served chilled.</p>
                      </div>

                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Fraise au Lait</h4>
                            <span class="price">$12.99</span>
                        </div>
                        <p>A creamy French-style strawberry milk made with fresh strawberry purée and chilled milk – sweet, simple, and perfect for all ages.</p>
                    </div>
                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Iced Coffee</h4>
                          <span class="price">$8.99</span>
                      </div>
                      <p>A chilled, smooth coffee made with freshly brewed halal coffee, sweetened with sugar or flavored syrups, and topped with ice and a splash of milk or cream.</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Artisanal Coffee</h4>
                              <span class="price">$4.99 - $6.99</span>
                          </div>
                          <p>Premium coffee blends served with optional liqueurs</p>
                      </div>
                      <div class="menu-item">
                          <div class="item-header">
                              <h4>Fresh Juices</h4>
                              <span class="price">$3.99</span>
                          </div>
                          <p>Cold-pressed juices made daily</p>
                      </div>

                      <div class="menu-item">
                        <div class="item-header">
                            <h4>Strawberry Mojito</h4>
                            <span class="price">$5.99</span>
                        </div>
                        <p>A vibrant mix of fresh strawberries, mint, lime, and soda water – alcohol-free and full of flavor</p>
                    </div>

                    <div class="menu-item">
                      <div class="item-header">
                          <h4>Hot Chocolate</h4>
                          <span class="price">$7.99</span>
                      </div>
                      <p>Rich, smooth cocoa drink made with milk and halal-certified chocolate</p>
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="about-section py-5" id="about">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
              <h2>Our Story</h2>
              <p>Founded in 2010, Savory & Sweet has been serving exceptional cuisine in a warm and inviting atmosphere. Our chef brings 20 years of international experience to create dishes that celebrate both tradition and innovation.</p>
              <p>We source our ingredients from local farmers and suppliers whenever possible, ensuring the freshest and highest quality meals for our guests.</p>
              <div class="signature">
                  <img src="sign.png" alt="Chef's Signature">
                  <p>Executive Chef Michael Johnson</p>
              </div>
          </div>
          <div class="col-lg-6">
              <img id="chef" src="ch.png" alt="Our Chef" class="img-fluid rounded">
          </div>
      </div>
  </div>
</section>

<section class="gallery-section py-5 bg-light" id="gallery">
  <div class="container">
      <h2 class="text-center mb-5">Gallery</h2>
      <div class="row g-3">
          <div class="col-md-4 col-6">
              <img src="if3.png" alt="Restaurant Interior" class="img-fluid gallery-img">
          </div>
          <div class="col-md-4 col-6">
              <img src="OIP.jpg" alt="Dining Area" class="img-fluid gallery-img">
          </div>
          <div class="col-md-4 col-6">
              <img src="pdr.jpg" alt="bosy Area" class="img-fluid gallery-img">
          </div>
          <div class="col-md-4 col-6">
              <img src="coff.jpg" alt="Chef Preparing Food" class="img-fluid gallery-img">
          </div>
          <div class="col-md-4 col-6">
              <img src="des.png" alt="Dessert Presentation" class="img-fluid gallery-img">
          </div>
          <div class="col-md-4 col-6">
              <img src="int5.jpg" alt="yomna Selection" class="img-fluid gallery-img">
          </div>
      </div>
  </div>
</section>

<section class="contact-section py-5" id="contact">
  <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      <div class="row">
          <div class="col-lg-6">
             <form method="POST" action="index.php">
                  <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                      <input type="text" id="name" name="name" class="form-control"  required>
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                      <input type="text" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="number" class="form-label">Phone Number</label>
                      <input type="tel"  id="number" name="number" class="form-control" >
                  </div>
                  <div class="mb-3">
                     <label for="message" class="form-label">Send Message</label>
                      <input type="text" id="message" name="message"  class="form-control" rows="5"  required>
                  </div>
                   <button type="submit"  value ="SendMessage"  class="btn btn-primary"  name="SendMessage">Send Message</button>
              </form>
          </div>
          <div class="col-lg-6">
              <div class="contact-info">
                  <div class="info-item">
                      <i class="fas fa-map-marker-alt"></i>
                      <p>123 Gourmet Street, Foodville, NY 10001</p>
                  </div>
                  <div class="info-item">
                      <i class="fas fa-phone"></i>
                      <p>(555) 123-4567</p>
                  </div>
                  <div class="info-item">
                      <i class="fas fa-envelope"></i>
                      <p>info@savory&sweetrestaurant.com</p>
                  </div>
                  <div class="info-item">
                      <i class="fas fa-clock"></i>
                      <p>
                          <strong>Opening Hours:</strong><br>
                          Monday-Friday: 11:00 AM - 10:00 PM<br>
                          Saturday-Sunday: 10:00 AM - 11:00 PM
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="reservationModalLabel">Make a Reservation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
<form   method="POST" action="index.php">
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required >
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>

  

    <div class="mb-3">
        <label for="guests" class="form-label">Number of Guests</label>
        <select class="form-select" id="guests" name="guests" >
            <option value="1">1 Person</option>
            <option value="2">2 People</option>
            <option value="3">3 People</option>
            <option value="4">4 People</option>
            <option value="5">5+ People</option>
        </select>
    </div>

    <button type="submit"  value ="BookNow"  class="btn btn-primary"  name="BookNow">Book Now</button>
</form>    




         </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<footer class="bg-dark text-white py-4">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <h5>Savory & Sweet</h5>
              <p>Where exceptional food meets unforgettable experiences.</p>
              <div class="social-icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
          </div>
          <div class="col-md-4">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#menu">Menu</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#contact">Contact Us</a></li>
              </ul>
          </div>
          <div class="col-md-4">
              <h5>Contact Info</h5>
              <p><i class="fas fa-map-marker-alt me-2"></i>123 Gourmet Street, Foodville, NY 10001</p>
              <p><i class="fas fa-phone me-2"></i>(555) 123-4567</p>
              <p><i class="fas fa-envelope me-2"></i>info@savory&sweetrestaurant.com</p>
          </div>
      </div>
      <div class="row mt-3">
          <div class="col-12 text-center">
              <p class="copyright">&copy; 2025 Savory & Sweet. All Rights Reserved.</p>
          </div>
      </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="java.js"></script>

</body>
</html>












<?php
if (isset($_POST['BookNow'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    require_once 'Connection.php';
    $result = mysqli_query($link, "INSERT INTO reservations (cast_name, cast_email, cast_phone, cast_date, cast_time, cast_guests) VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests')");
    
    if ($result) {
        echo '<script>alert("Your reservation has been submitted successfully!");</script>';
    } else {
        echo '<script>alert("There was an error submitting your reservation. Please try again.");</script>';
    }
    
    mysqli_close($link);
}



if (isset($_POST['SendMessage']))
{

    $name =$_POST['name'];
    $email = $_POST['email'];
    $number =$_POST['number'];
    $message =$_POST['message'];
   

  require_once 'connection.php';
    $result = mysqli_query($link,"INSERT INTO contact (contact_name , contact_email, contact_phone, contact_message ) VALUES ('$name', '$email', '$number', '$message')");
 

 
    if ($result) {
        echo '<script>alert("Your message has been send successfully!");</script>';
    } else {
        echo '<script>alert("There was an error submitting your message. Please try again.");</script>';
    }
   mysqli_close($link);
}




?>