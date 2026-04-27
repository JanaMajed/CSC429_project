<?php
session_start();
include "../db.php";

/* Safe VERSION
  
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") { //no longer vulnerable to XSS attack because sanitization is done where strip_tags() removes HTML and scripts
    $name = strip_tags(trim($_POST["name"]));
    $comment = strip_tags(trim($_POST["comment"]));

    $sql = "INSERT INTO comments (name, comment)
            VALUES ('$name', '$comment')";
    mysqli_query($conn, $sql);
}
?>

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

            <?php if (isset($_SESSION["username"])): ?>
                <a href="../dashboard_admin.php" class="login-btn">
                    <?php echo $_SESSION["username"]; ?>
                </a>
                <a href="../logout.php" class="signup-btn">Logout</a>
            <?php else: ?>
                <a href="../login.php" class="login-btn">Login</a>
                <a href="../register.php" class="signup-btn">Sign Up</a>
            <?php endif; ?>

            <div class="cart-icon">
                🛒
                <span class="cart-count">2</span>
            </div>

        </div>
    </nav>
</header>

<!-- Hero -->
<section class="hero">
    <div class="hero-text">
        <p class="small-tag">Premium Saudi Dates</p>

        <h1><span>Luxury</span> IN EVERY DATE</h1>

        <p class="hero-description">
            Carefully selected Saudi dates presented with elegance,
            authenticity, and a rich heritage-inspired experience.
        </p>

        <div class="hero-buttons">
            <a href="#" class="hero-btn">Explore Collection</a>
            <a href="#" class="hero-link">Learn More</a>
        </div>
    </div>

    <img src="palms.png" alt="Palms">
</section>

<!-- Products -->
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
            <img src="Ajwa.png" alt="Ajwa">
            <h3>Ajwa Dates</h3>
            <p>Deep flavor, soft bite, premium quality.</p>
            <span>SAR 85</span>
            <a href="#">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="sukri.png" alt="Sukkari">
            <h3>Sukkari Dates</h3>
            <p>Golden sweetness with a delicate texture.</p>
            <span>SAR 70</span>
            <a href="#">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="boxes.png" alt="Gift Box">
            <h3>Luxury Gift Box</h3>
            <p>Elegant packaging for special occasions.</p>
            <span>SAR 150</span>
            <a href="#">Add to Cart</a>
        </div>

    </div>

</section>

<!-- About -->
<section class="brand-story" id="story">

    <div class="story-text">
        <p class="section-tag">Our Story</p>
        <h2>Luxury rooted in Saudi heritage</h2>

        <p>
            At Warefa Dates, we believe dates are more than a product —
            they are a symbol of hospitality, generosity, and timeless
            Saudi tradition.
        </p>
    </div>

    <div class="story-box">
        <h3>Why choose us?</h3>

        <ul>
            <li>Premium hand-selected dates</li>
            <li>Elegant luxury presentation</li>
            <li>Inspired by Saudi identity</li>
            <li>Perfect for gifting</li>
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
            <p>Luxury experience and amazing taste.</p>
            <h4>— Noura A.</h4>
        </div>

        <div class="testimonial-card">
            <p>Perfect gift and beautiful presentation.</p>
            <h4>— Abdulrahman M.</h4>
        </div>

        <div class="testimonial-card">
            <p>Warm, premium, and memorable brand.</p>
            <h4>— Sarah K.</h4>
        </div>

    </div>

</section>

<!-- Comments -->
<section class="comments-section" id="comments">

    <div class="section-title">
        <p class="section-tag">Leave a Comment</p>
        <h2>We would love to hear from you</h2>

        <p>Share your thoughts, questions, or feedback.</p>
    </div>

    <form class="comment-form" method="POST">

        <div class="input-row">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>

        <textarea name="comment" placeholder="Write your message..." required></textarea>

        <button type="submit">Send Message</button>

    </form>

    <br><br>

   <?php //retrieves comments from the database and displays them safely on the webpage
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='testimonial-card'>";
    echo "<h4>" . htmlspecialchars($row["name"], ENT_QUOTES, "UTF-8") . "</h4>";
    echo "<p>" . htmlspecialchars($row["comment"], ENT_QUOTES, "UTF-8") . "</p>";
    echo "</div><br>";
}
?>

</section>

<!-- Footer -->
<footer class="footer">
    <h3>WAREFA DATES</h3>
    <p>Luxury Saudi dates crafted with elegance and heritage.</p>
</footer>

</body>
</html>
