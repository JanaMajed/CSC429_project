<?php
session_set_cookie_params([ //session cookie settings to protect the session token
 'secure' => true,
 'httponly' => true,
 'samesite' => 'Strict'
]);
session_start();

/*
SAFE VERSION:
Only logged-in users with role = user can access this page.
*/

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}
// Prevent unauthorized roles from accessing the page
if ($_SESSION['role'] !== "user") {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard - Date Harvest</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div>
                <div class="brand">
                    <h2>Date Harvest</h2>
                    <p>Fresh dates from a local farm</p>
                </div>

                <nav class="nav-links">
                    <a href="dashboard_user.php" class="active">Dashboard</a>
                    <a href="#">Products</a>
                    <a href="#">My Orders</a>
                    <a href="#">Cart</a>
                    <a href="#">Profile</a>
                    <a href="homepage/index.php">Home</a>
                    <a href="logout.php" class="logout-link">Logout</a>
                </nav>
            </div>

            <div class="sidebar-footer">
                Logged in as: <strong><?php echo htmlspecialchars($username); ?></strong>
            </div>
        </aside>

        <main class="main-content">
            <div class="topbar">
                <div>
                    <h1>Welcome back, <?php echo htmlspecialchars($username); ?></h1>
                    <p>Explore premium local dates and track your recent orders.</p>
                </div>

                <div class="topbar-actions">
                    <input type="text" class="search-box" placeholder="Search dates..." />
                    <button id="themeToggle" class="btn btn-light">🌙</button>
                    <a href="homepage/index.php" class="profile-chip">Home</a>
                    <a href="logout.php" class="profile-chip logout-top">Logout</a>
                    <div class="profile-chip">Regular User</div>
                </div>
            </div>

            <section class="grid stats-grid">
                <div class="card stat-card">
                    <h3>Total Orders</h3>
                    <div class="value">12</div>
                    <div class="hint">+2 this month</div>
                </div>

                <div class="card stat-card">
                    <h3>Cart Items</h3>
                    <div class="value">4</div>
                    <div class="hint">Ready to checkout</div>
                </div>

                <div class="card stat-card">
                    <h3>Favorite Products</h3>
                    <div class="value">8</div>
                    <div class="hint">Your saved selections</div>
                </div>

                <div class="card stat-card">
                    <h3>Loyalty Points</h3>
                    <div class="value">240</div>
                    <div class="hint">Earn more with each order</div>
                </div>
            </section>

            <section class="grid content-grid">
                <div class="card">
                    <h3 class="section-title">Recent Orders</h3>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#DH1042</td>
                                    <td>Ajwa Dates Box</td>
                                    <td>Apr 18, 2026</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>#DH1038</td>
                                    <td>Sukkari Premium</td>
                                    <td>Apr 15, 2026</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>#DH1031</td>
                                    <td>Khudri Family Pack</td>
                                    <td>Apr 11, 2026</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <h3 class="section-title">Quick Actions</h3>
                    <div class="list">
                        <div class="list-item">
                            <h4>Browse Products</h4>
                            <p>Discover fresh local date varieties.</p>
                            <br>
                            <a href="#" class="btn btn-primary">View Products</a>
                        </div>

                        <div class="list-item">
                            <h4>Track My Order</h4>
                            <p>Check the latest shipping updates.</p>
                            <br>
                            <a href="#" class="btn btn-secondary">Track Now</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="grid secondary-grid">
                <div class="mini-card">
                    <h4>Recommended for You</h4>
                    <p>Try our best-selling Sukkari soft dates with natural sweetness and premium packaging.</p>
                </div>

                <div class="mini-card">
                    <h4>Security Note</h4>
                    <p>Access control is applied: only users with the user role can access this page.</p>
                </div>
            </section>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>
