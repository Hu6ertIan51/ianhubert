<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian Ogonjo Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/aa11ee7bbf.js" crossorigin="anonymous"></script>
    <style>
        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    
<header class="header">
    <a href="index.html" class="logo">Ian Hubert.</a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="aboutme.php">About Me</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="form">
    <div class="form-content">
        <form action="form.php" method="POST" name="contact">
            <h1>CONTACT M 🙂</h1>
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Your Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <div class="btn-form">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="social-media">
        <a href="https://github.com/Hu6ertIan51/"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/ian-hubert-6a6b5a307/"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ianhubertomondi@gmail.com&su=HEY%20,TALK%20TO%20ME&body="><i class="fa-solid fa-envelope"></i></a>
    </div>
</section>
<footer>
    
</footer>

</body>
</html>
