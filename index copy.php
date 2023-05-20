<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?php
        // Check if a specific page is requested
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // Include the requested page
            if (file_exists($page . '.php')) {
                include($page . '.php');
            } else {
                echo "Page not found!";
            }
        } else {
            // Default page (home)
            include('home.php');
        }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </footer>
</body>
</html>
