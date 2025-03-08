<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferrero Rocher</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Main container with liquid layout -->
    <div class="container">
        
        <!-- Header Section -->
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Flavors</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Content Section -->
        <main>
            <section class="hero">
                <h1>Ferrero Rocher: A Delightful Experience</h1>
                <p>Indulge in the golden luxury of Ferrero Rocher – the finest chocolate hazelnut treat.</p>
            </section>

            <section class="about">
                <h2>About Ferrero Rocher</h2>
                <p>Ferrero Rocher is a symbol of luxury, quality, and indulgence. From its golden foil wrapping to its perfect combination of chocolate and hazelnut, it's a treat that captivates the senses. Whether for a special occasion or a moment of self-indulgence, Ferrero Rocher is the ultimate chocolate experience.</p>
            </section>

            <section class="flavors">
                <h2>Explore the Flavors</h2>
                <div class="flavor-card">
                    <h3>Classic Ferrero Rocher</h3>
                    <p>The original, with a whole hazelnut in the center, covered in creamy chocolate and wrapped in a golden foil.</p>
                </div>
                <div class="flavor-card">
                    <h3>Ferrero Rocher Dark</h3>
                    <p>A sophisticated twist on the classic, with rich dark chocolate that enhances the hazelnut experience.</p>
                </div>
                <div class="flavor-card">
                    <h3>Ferrero Rocher White</h3>
                    <p>A creamy white chocolate version that delivers the same crunch and hazelnut delight.</p>
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <footer>
            <div class="footer-logo">
                <img src="logo.png" alt="Ferrero Rocher Logo">
            </div>
            <div class="company-info">
                <p>&copy; 2025 Ferrero Rocher. All rights reserved.</p>
                <p>Address: 123 Chocolate Avenue, Sweet City, Country</p>
            </div>
            <div class="contact-form">
                <h3>Contact Us</h3>
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                echo "<p>Thank you, $name. We have received your message!</p>";
            }
            ?>
        </footer>
        
    </div>

</body>
</html>
