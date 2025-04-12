<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <style>
        /* Basic resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Header styles */
        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
        }

        header .logo h1 {
            margin-left: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Main container for layout */
        .container {
            display: flex;
            padding: 20px;
        }

        /* Sidebar styles */
        .sidebar {
            width: 25%;
            padding: 20px;
            background-color: #fff;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #4CAF50;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        /* Video content styles */
        .video-content {
            width: 75%;
        }

        .video-section {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .video-section h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .video-section video {
            width: 100%;
            max-height: 400px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .video-section p {
            font-size: 1rem;
        }

        /* Footer styles */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }

    </style>
    <nav class="navbar">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user"></i></li>
            <li></li>
        </ul>
    </nav>
    <!-- Header Section -->


    <div class="container">
        <!-- Sidebar with Modules -->
        <aside class="sidebar">
            <h3>Course Modules</h3>
            <ul>
                <li><a href="#module1">Module 1: Introduction to HTML</a></li>
                <li><a href="#module2">Module 2: Styling with CSS</a></li>
                <li><a href="#module3">Module 3: JavaScript Basics</a></li>
                <li><a href="#module4">Module 4: Building a Simple Website</a></li>
            </ul>
        </aside>

        <!-- Main Content Area for Videos -->
        <main class="video-content">
            <!-- Module 1 Video -->
            <section id="module1" class="video-section">
                <h2>Module 1: Introduction to HTML</h2>
                <video controls>
                    <source src="videos/html_intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p>This video introduces the basics of HTML, covering tags, structure, and simple page building.</p>
            </section>

            <!-- Module 2 Video -->
            <section id="module2" class="video-section">
                <h2>Module 2: Styling with CSS</h2>
                <video controls>
                    <source src="videos/css_styling.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p>In this video, we go through the fundamentals of CSS for styling HTML pages, covering properties, selectors, and layout techniques.</p>
            </section>

            <!-- Module 3 Video -->
            <section id="module3" class="video-section">
                <h2>Module 3: JavaScript Basics</h2>
                <video controls>
                    <source src="videos/javascript_basics.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p>This module explains JavaScript basics, including variables, functions, and events, to add interactivity to web pages.</p>
            </section>

            <!-- Module 4 Video -->
            <section id="module4" class="video-section">
                <h2>Module 4: Building a Simple Website</h2>
                <video controls>
                    <source src="videos/website_build.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p>In the final module, we put it all together and build a simple website using HTML, CSS, and JavaScript.</p>
            </section>
        </main>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Course Website. All rights reserved.</p>
    </footer>

</body>
</html>