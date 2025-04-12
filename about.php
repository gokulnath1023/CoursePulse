<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CoursPulse</title>
</head>
<body>
    <nav class="navbar">
        <img src="images/logo.png" alt="" onclick="home();">
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user" style="color:white;"></i></li>
        </ul>
    </nav>
    <div class="continer1">
        <h1 >About Us</h1>
        <p>Learning is a treasure that will follow its owner everywhere</p>
        <button>Learn More</button>
    </div>
    <div class="ab_continer2">
        <div class="ab_continer21">
            <h3>providing professional courses</h3>
            <p>Professional Courses mean providing students with industry-specific skills. <br> A professional course provides students with practical skills. <br>Students become job-ready after the course. In comparison, the goal <br> of a degree course is to provide them with a strong academic foundation and expertise in a particular subject</p>
        </div>
        <div class="ab_continer22">
            <img src="images/BA-Courses.png" alt="">
        </div>
    </div>
    <div class="ab_continer3">
        
        <div class="ab_continer31">
            <img src="images/BA-Courses.png" alt="">
        </div>
        <div class="ab_continer32">
            <h3>providing professional courses</h3>
            <p>Professional Courses mean providing students with industry-specific skills. <br> A professional course provides students with practical skills. <br>Students become job-ready after the course. In comparison, the goal <br> of a degree course is to provide them with a strong academic foundation and expertise in a particular subject</p>
        </div>
    </div>
    <div class="row ab_continer4">
        <div class="row">
            <center><h1>Meet Some of Our Teaching Experts</h1></center><br>
        </div>
        <div class="col">
            <img src="images/emt1.jpg" alt="">
            <h3></h3>
        </div>
        <div class="col">
            <img src="images/emt2.jpg" alt="">
            <h3></h3>
            
        </div>
        <div class="col">
            <img src="images/emt1.jpg" alt="">
            <h3></h3>
            
        </div>
        <div class="col">
            <img src="images/emt2.jpg" alt="">
            <h3></h3>
            
        </div>
        
    </div>
    
    <footer class="footer1">
        <div class="fo_div1">
        <ul class="fo_menu">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
        </ul>
        </div>
        <address class="fo_addr">
            <h3>Address</h3>
            12, North Street,<br>
            Ellappanpettai,<br>
            kurinjipadi,<br>
            cuddalore,<br>
            607302
        </address>
        <div class="fo_div2">
            <h3>Community</h3>
            <li>Learners</li>
            <li>Teachers</li>
            <li>Partners</li>
            <li>Placement</li>
        </div>
    </footer>
    <footer class="footer2">
        <p>&copy; <span id="cyear"></span> CoursPulse All rights powered by Members</p>
    </footer>



    <script src="script.js">

    </script>
</body>
</html>