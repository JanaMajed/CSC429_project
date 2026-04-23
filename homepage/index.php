<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warefa Dates</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">WAREFA DATES</div>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#featured">Products</a></li>
                <li><a href="#story">About</a></li>
                <li><a href="#comments">Contact</a></li>
            </ul>
            <div class="nav-actions">
                <a href="login.php" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign Up</a>
            
                <div class="cart-icon">
                    🛒
                    <span class="cart-count">2</span>
                </div>
            </div>

        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <p class="small-tag">Premium Saudi Dates</p>

            <h1>
                TASTE <span>Luxury</span><br>
                IN EVERY DATE
            </h1>

            <p class="hero-description">
                Carefully selected Saudi dates presented with elegance,
                authenticity, and a rich heritage-inspired experience.
            </p>

            <div class="hero-buttons">
                <a href="#" class="hero-btn">Explore Collection</a>
                <a href="#" class="hero-link">Learn More</a>
            </div>
        </div>

        <div class="hero-image">
            <div class="floating-card card-one">
                <h4>Ajwa Dates</h4>
                <p>Soft texture • Rich taste</p>
            </div>

            <img src="/homepage/date.png" alt="Premium Dates">

            <div class="floating-card card-two">
                <h4>Luxury Box</h4>
                <p>Perfect for gifting</p>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products" id="featured">
        <div class="section-title">
            <p class="section-tag">Our Selection</p>
            <h2>Featured Products</h2>
            <p>
                Discover our finest collection of premium Saudi dates,
                crafted for everyday enjoyment and elegant gifting.
            </p>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <img src="/homepage/date1.png" alt="Ajwa Dates">
                <h3>Ajwa Dates</h3>
                <p>Deep flavor, soft bite, premium quality.</p>
                <span>SAR 85</span>
                <a href="#">Add to Cart</a>
            </div>

            <div class="product-card">
                <img src="/homepage/sukri.png" alt="Sukkari Dates">
                <h3>Sukkari Dates</h3>
                <p>Golden sweetness with a delicate texture.</p>
                <span>SAR 70</span>
                <a href="#">Add to Cart</a>
            </div>

            <div class="product-card">
                <img src="/homepage/boxes.png" alt="Luxury Gift Box">
                <h3>Luxury Gift Box</h3>
                <p>Elegant packaging for special occasions.</p>
                <span>SAR 150</span>
                <a href="#">Add to Cart</a>
            </div>
        </div>
    </section>

    <!-- Brand Story -->
    <section class="brand-story" id="story">
        <div class="story-text">
            <p class="section-tag">Our Story</p>
            <h2>Luxury rooted in Saudi heritage</h2>
            <p>
                At Warefa Dates, we believe dates are more than a product —
                they are a symbol of hospitality, generosity, and timeless
                Saudi tradition. Our mission is to present this heritage in
                a refined and modern way.
            </p>
        </div>

        <div class="story-box">
            <h3>Why choose us?</h3>
            <ul>
                <li>Premium hand-selected dates</li>
                <li>Elegant luxury presentation</li>
                <li>Inspired by Saudi identity</li>
                <li>Perfect for gifting and occasions</li>
            </ul>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="section-title">
            <p class="section-tag">Client Love</p>
            <h2>What Our Customers Say</h2>
        </div>

        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>
                    “The packaging feels so elegant, and the dates taste
                    incredibly fresh. It truly feels like a luxury experience.”
                </p>
                <h4>— Noura A.</h4>
            </div>

            <div class="testimonial-card">
                <p>
                    “I ordered the gift box and it was perfect for a family
                    visit. Beautiful presentation and amazing quality.”
                </p>
                <h4>— Abdulrahman M.</h4>
            </div>

            <div class="testimonial-card">
                <p>
                    “A lovely balance between authenticity and modern luxury.
                    The whole brand feels warm, premium, and memorable.”
                </p>
                <h4>— Sarah K.</h4>
            </div>
        </div>
    </section>

    <!-- Elegant Comment Section -->
    <section class="comments-section" id="comments">
        <div class="section-title">
            <p class="section-tag">Leave a Message</p>
            <h2>We would love to hear from you</h2>
            <p>
                Share your thoughts, questions, or feedback with us.
            </p>
        </div>

        <form class="comment-form">
            <div class="input-row">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
            </div>

            <textarea placeholder="Write your message..."></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <h3>WAREFA DATES</h3>
        <p>Luxury Saudi dates crafted with elegance and heritage.</p>
    </footer>

</body>
</html>