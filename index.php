<?php
session_start();
include('connect.php');
include("recommendation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven Akoko - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <h1>Steven Akoko</h1>
            <div class="menu-toggle" id="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#downloads">Downloads</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div class="card">
                <h2>Thanks for job consideration</h2>
                <img src="steven.jpg" alt="Steven Akoko">
            </div>
            <div class="card">
                <h2>About Me</h2>
                <p>Hello! I am Steven Akoko, a graduate from Mount Kenya University with a Bachelor of Science in Information Technology. I hold a certification in Fundamentals of IT Support Technician from Google Coursera and am currently enrolled in a three-month intense cybersecurity bootcamp. Additionally, I have completed Cisco's Introduction to Cybersecurity and am pursuing Intermediate Risk Management in Cybersecurity with Cisco. My technical skills include C++, PHP, JavaScript, and I am currently learning Python.</p>
            </div>
        </div>
    </section>

    <!-- Objective Section -->
    <section id="objective">
        <div class="container">
            <div class="card">
                <h2>Objective</h2>
                <p>Versatile IT graduate, ambitious, proactive, highly self-motivated who applies knowledge and expertise to contribute to the achievement of the organization. Apply knowledge of life skills and talent at the workplace for perfection. Being with high self-esteem. Being content with integrity in action and expectation of a positive outcome. Always work hard towards achieving the best, to cooperate with the members of the staff to promote the company and enable it to achieve its goals. Apply personalities such as self-motivation, innovation, creativity, time consciousness, and the ability to integrate with staff in an organization to achieve the organization’s objectives.</p>
            </div>
            <div class="card">
                <h2>Skills</h2>
                <ul>
                    <li>C++</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>Python (currently learning)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Downloads Section -->
    <section id="downloads">
        <div class="container">
            <h2>Downloads</h2>
            <ul>
                <li><a href="download.php?id=1" download>Download CV</a></li>
                <li><a href="download.php?id=2" download>Download Recommendation Letters</a></li>
                <li><a href="download.php?id=3" download>Download Letters</a></li>
            </ul>
            <h2>Submit a Recommendation</h2>
            <form id="recommendation-form" method="POST">
                <?php if (isset($name_error)) echo "<p class='error'>$name_error</p>"; ?>
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <?php if (isset($email_error)) echo "<p class='error'>$email_error</p>"; ?>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <?php if (isset($phone_error)) echo "<p class='error'>$phone_error</p>"; ?>
                <label for="phone">Your Phone Number:</label>
                <input type="tel" id="phone" name="phone">

                <label for="message">Recommendation:</label>
                <?php if (isset($message_error)) echo "<p class='error'>$message_error</p>"; ?>
                <textarea id="message" name="message" rows="4"></textarea>

                <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
                <button type="submit">Submit Recommendation</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-section">
                <h3>References</h3>
                <p>References available upon request.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: steven.akokosteven19@gmail.com</p>
                <p>Phone: +256791056320 / 011562895</p>
            </div>
            <div class="footer-section">
                <h3>Address</h3>
                <p>PO Box 86-40100, Kisumu, Kenya</p>
            </div>
            <div class="footer-section">
                <h3>Recommendations</h3>
               <p>See my <a href="https://github.com/steven-akoko" style="color: #FF9900; text-decoration: none; font-weight: bold;" target="_blank">LinkedIn</a> for recommendations and endorsements.</p>

            
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
