document.addEventListener('DOMContentLoaded', function() {
    // Reservation Modal
    const reservationBtn = document.getElementById('reservationBtn');
    if (reservationBtn) {
        reservationBtn.addEventListener('click', function() {
            const reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'));
            reservationModal.show();
        });
    }

    // Order Online Button
    const orderOnlineBtn = document.getElementById('orderOnlineBtn');
    if (orderOnlineBtn) {
        orderOnlineBtn.addEventListener('click', function() {
            alert('Redirecting to our online ordering system...');
        });
    }

    // Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    }

    // Reservation Form Submission
    const reservationForm = document.getElementById('reservationForm');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Your reservation has been submitted! We will confirm shortly.');
            reservationForm.reset();
            const reservationModal = bootstrap.Modal.getInstance(document.getElementById('reservationModal'));
            reservationModal.hide();
        });
    }

    // Newsletter Form Submission
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            alert(`Thank you for subscribing with ${emailInput.value}!`);
            newsletterForm.reset();
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active link highlighting
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    window.addEventListener('scroll', function() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (pageYOffset >= sectionTop - 100 && pageYOffset < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Lightbox placeholder
    const galleryImages = document.querySelectorAll('.gallery-img');
    galleryImages.forEach(image => {
        image.addEventListener('click', function() {
            console.log('Opening image in lightbox:', this.src);
        });
    });

    // Cart functionality
    const cart = [];
    let subtotal = 0;
    const taxRate = 0.10;
    const deliveryFee = 3.99;

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const menuItem = this.closest('.menu-item');
            const id = menuItem.getAttribute('data-id');
            const name = menuItem.getAttribute('data-name');
            const price = parseFloat(menuItem.getAttribute('data-price'));
            
            const existingItem = cart.find(item => item.id === id);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ id, name, price, quantity: 1 });
            }

            updateCart();
        });
    });

    function updateCart() {
        const cartItemsEl = document.getElementById('cartItems');
        subtotal = 0;

        if (cart.length === 0) {
            cartItemsEl.innerHTML = '<p class="text-muted text-center">Your cart is empty</p>';
        } else {
            cartItemsEl.innerHTML = '';
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                const itemEl = document.createElement('div');
                itemEl.className = 'cart-item';
                itemEl.innerHTML = `
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>${item.name}</h6>
                            <div class="quantity-controls">
                                <button class="btn btn-sm btn-outline-secondary decrease-quantity" data-id="${item.id}">-</button>
                                <span class="quantity-display">${item.quantity}</span>
                                <button class="btn btn-sm btn-outline-secondary increase-quantity" data-id="${item.id}">+</button>
                            </div>
                        </div>
                        <div class="text-end">
                            <div>$${item.price.toFixed(2)}</div>
                            <div class="text-muted small">$${itemTotal.toFixed(2)}</div>
                            <button class="btn btn-sm btn-danger remove-item mt-1" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
                cartItemsEl.appendChild(itemEl);
            });
        }

        const tax = subtotal * taxRate;
        const total = subtotal + tax + deliveryFee;

        document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
        document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        document.getElementById('checkoutBtn').disabled = cart.length === 0;
    }

    document.addEventListener('click', function(e) {
        const target = e.target;
        const id = target.getAttribute('data-id') || target.closest('.remove-item')?.getAttribute('data-id');
        const itemIndex = cart.findIndex(item => item.id === id);

        if (itemIndex !== -1) {
            if (target.classList.contains('increase-quantity')) {
                cart[itemIndex].quantity += 1;
            } else if (target.classList.contains('decrease-quantity')) {
                if (cart[itemIndex].quantity > 1) {
                    cart[itemIndex].quantity -= 1;
                } else {
                    cart.splice(itemIndex, 1);
                }
            } else if (target.classList.contains('remove-item') || target.closest('.remove-item')) {
                cart.splice(itemIndex, 1);
            }

            updateCart();
        }
    });

    const checkoutForm = document.getElementById('checkoutForm');
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const orderData = {
                customer: {
                    name: document.getElementById('customerName').value,
                    phone: document.getElementById('customerPhone').value,
                    email: document.getElementById('customerEmail').value,
                    address: document.getElementById('deliveryAddress').value
                },
                order: {
                    items: cart,
                    subtotal: subtotal,
                    tax: subtotal * taxRate,
                    deliveryFee: deliveryFee,
                    total: subtotal + (subtotal * taxRate) + deliveryFee,
                    paymentMethod: document.getElementById('paymentMethod').value
                }
            };

            console.log('Order submitted:', orderData);
            alert('Thank you for your order! We will contact you shortly to confirm.');

            const modal = bootstrap.Modal.getInstance(document.getElementById('checkoutModal'));
            modal.hide();
            this.reset();
            cart.length = 0;
            updateCart();
        });
    }
    
});








// Rating System
document.addEventListener('DOMContentLoaded', function() {
    // Star Rating Functionality
    const stars = document.querySelectorAll('.star-rating i');
    const ratingInput = document.getElementById('ratingValue');
    
    stars.forEach(star => {
      star.addEventListener('click', function() {
        const rating = this.getAttribute('data-rating');
        ratingInput.value = rating;
        
        stars.forEach((s, index) => {
          if (index < rating) {
            s.classList.remove('far');
            s.classList.add('fas', 'active');
          } else {
            s.classList.remove('fas', 'active');
            s.classList.add('far');
          }
        });
      });
    });
    
    // Rating Form Submission
    const ratingForm = document.getElementById('ratingForm');
    const ratingToast = new bootstrap.Toast(document.getElementById('ratingToast'));
    
    ratingForm.addEventListener('submit', function(e) {
      e.preventDefault(0);
      
      const ratingData = {
        name: document.getElementById('ratingName').value,
        email: document.getElementById('ratingEmail').value,
        rating: ratingInput.value,
        comments: document.getElementById('ratingComment').value
      };
      
      console.log('Rating Submitted:', ratingData);
      ratingToast.show();
      this.reset();
      
      stars.forEach(star => {
        star.classList.remove('fas', 'active');
        star.classList.add('far');
      });
      ratingInput.value = '0';
      
      const ratingModal = bootstrap.Modal.getInstance(document.getElementById('ratingModal'));
      ratingModal.hide();
    });
  });







  document.addEventListener('DOMContentLoaded', function() {
    // تأكد من وجود العناصر قبل التعامل معها
    const form = document.getElementById('reservationForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            console.log('Form submitted!'); // للتأكد من أن الحدث يعمل
        });
    } else {
        console.error('Form element not found!');
    }
});


document.addEventListener('DOMContentLoaded', function() {
    // تأكد من أن النموذج موجود
    const reservationForm = document.getElementById('reservationForm');
    
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // هنا يمكنك إضافة كود AJAX لإرسال البيانات إذا كنت تريد معالجة النموذج بدون تحديث الصفحة
            // أو يمكنك ترك النموذج يعمل بشكل طبيعي بعد ظهور الـ alert
            
            alert('Your reservation has been submitted successfully!');
            
            // إذا كنت تريد إرسال النموذج بعد الـ alert
            this.submit();
        });
    }
});