<?php
session_start();

/*
VULNERABLE VERSION:
No access control is applied here.
Any user can access by
http://localhost/security_project/Unsafe-version/dashboard_admin.php
*/
// Get logged-in username from session
$username = $_SESSION['username'] ?? "Guest";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Date Harvest</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="dashboard">

        <aside class="sidebar">
            <div>
                <div class="brand">
                    <h2>Date Harvest</h2>
                    <p>Admin Control Panel</p>
                </div>

                <nav class="nav-links">
                    <a href="dashboard_admin.php" class="active">Dashboard</a>
                    <a href="#">Manage Products</a>
                    <a href="#">Orders</a>
                    <a href="#">Users</a>
                    <a href="#">Reports</a>
                    <a href="#">Settings</a>
                    <a href="homepage/index.php">Home</a>
                    <a href="logout.php" class="logout-link">Logout</a>
                </nav>
            </div>

            <div class="sidebar-footer">
                Logged in as: <strong><?php echo $username; ?></strong>
            </div>
        </aside>

        <main class="main-content">

            <div class="topbar">
                <div>
                    <h1>Admin Dashboard</h1>
                    <p>Monitor products, orders, users, and overall store performance.</p>
                </div>

                <div class="topbar-actions">
                    <input type="text" class="search-box" placeholder="Search products or users..." />
                    <button id="themeToggle" class="btn btn-light">🌙</button>
                    <a href="index.php" class="profile-chip">Home</a>
                    <a href="logout.php" class="profile-chip logout-top">Logout</a>
                    <div class="profile-chip"><?php echo $username; ?></div>
                </div>
            </div>

            <section class="grid stats-grid">
                <div class="card stat-card">
                    <h3>Total Products</h3>
                    <div class="value">36</div>
                    <div class="hint">6 added this week</div>
                </div>

                <div class="card stat-card">
                    <h3>Total Orders</h3>
                    <div class="value">124</div>
                    <div class="hint">18 pending orders</div>
                </div>

                <div class="card stat-card">
                    <h3>Registered Users</h3>
                    <div class="value">89</div>
                    <div class="hint">+10 new users</div>
                </div>

                <div class="card stat-card">
                    <h3>Revenue</h3>
                    <div class="value">$2,430</div>
                    <div class="hint">Monthly summary</div>
                </div>
            </section>

            <section class="grid content-grid">

                <div class="card">
                    <h3 class="section-title">Latest Orders</h3>

                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#DH1049</td>
                                    <td>Reem</td>
                                    <td>Ajwa Gift Box</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#DH1048</td>
                                    <td>Faisal</td>
                                    <td>Safawi Premium</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>#DH1047</td>
                                    <td>Huda</td>
                                    <td>Khudri Box</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                </tr>
                                <tr>
                                    <td>#DH1046</td>
                                    <td>Nora</td>
                                    <td>Sukkari Family Pack</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <h3 class="section-title">Quick Actions</h3>

                    <div class="list">
                        <div class="list-item">
                            <h4>Add New Product</h4>
                            <p>Create a new date product listing with price and stock.</p>
                            <br>
                            <a href="#" class="btn btn-primary">Add Product</a>
                        </div>

                        <div class="list-item">
                            <h4>Manage Users</h4>
                            <p>View, update, or restrict user accounts.</p>
                            <br>
                            <a href="#" class="btn btn-secondary">Manage Users</a>
                        </div>

                        <div class="list-item">
                            <h4>Generate Reports</h4>
                            <p>Check sales, orders, and product performance.</p>
                            <br>
                            <a href="#" class="btn btn-light">View Reports</a>
                        </div>
                    </div>
                </div>

            </section>

            <section class="grid secondary-grid">
                <div class="mini-card">
                    <h4>Low Stock Alert</h4>
                    <p>Ajwa Small Box stock is running low.</p>
                </div>

                <div class="mini-card">
                    <h4>Security Note</h4>
                    <p>Vulnerable version: this page does not check whether the user is an admin.</p>
                </div>
            </section>

        </main>
    </div>

    <script src="script.js"></script>
</body>

</html>
