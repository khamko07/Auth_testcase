<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php?page=login');
    exit;
}

// Get user information from session
$username = $_SESSION['username'];

// Handle logout
if (isset($_GET['logout'])) {
    // Clear all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header('Location: index.php?page=login');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #3a6073;
            --bg-color: #f9f9f9;
            --text-color: #333;
            --card-bg: #fff;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 5px 15px var(--shadow-color);
            margin-bottom: 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-name {
            font-weight: 500;
        }

        .logout-btn {
            padding: 0.5rem 1rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: var(--secondary-color);
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 10px 30px var(--shadow-color);
            padding: 2rem;
            margin-bottom: 2rem;
            animation: fadeIn 0.5s ease-out forwards;
        }

        h1, h2 {
            color: var(--primary-color);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">Authentication System</div>
            <div class="user-info">
                <span class="user-name">Welcome, <?php echo htmlspecialchars($username); ?>!</span>
                <a href="?logout=1" class="logout-btn">Logout</a>
            </div>
        </header>

        <div class="card">
            <h1>Dashboard</h1>
            <p>You have successfully logged in to your account.</p>
            <p>This is a protected page that only authenticated users can access.</p>
        </div>
    </div>
</body>
</html>