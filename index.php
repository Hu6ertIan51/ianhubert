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
        <a href="index.php" class="logo">Ian Hubert.</a>
        <nav class="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="aboutme.php">About Me</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section class="home">
        <div class="home-content">
            <h1><span id="typed-text"></span></h1>
            <h3><span id="typed-text2"></span></h3>
            <h3><span id="typed-text3"></span></h3>
            <p style="font-size: 25px;"><span id="typed-text4"></span></p>
            <div class="btn-box" id="contact-button" style="display: none;">
                <a href="IAN OGONJO - CV.pdf">Download CV</a>
                <a href="contact.html">Contact Me</a>
            </div>
        </div>
        <div class="social-media">
            <a href="https://github.com/Hu6ertIan51/" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/ian-hubert-6a6b5a307/"target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ianhubertomondi@gmail.com&su=HEY%20,TALK%20TO%20ME&body=" target="_blank"><i class="fa-solid fa-envelope"></i></a>

        </div>
    </section>
    <footer>
        
    </footer>
    <script>
        const text1 = "Hello, I'm Ian Hubert!"; 
        const text2 = "Welcome to my Online Portfolio.";
        const text3 = "Web Developer & Data Analyst.";
        const text4 = "Junior web developer and data analyst adept at crafting user-friendly websites. \
            Skilled in HTML, CSS, JavaScript, and data analysis tools. Committed to delivering quality solutions and driving insights for business success.";
        const delay = 30; 

        let index1 = 0;
        let index2 = 0;
        let index3 = 0;
        let index4 = 0;

        function typeWriter1() {
            const typedTextElement = document.getElementById("typed-text");
            if (index1 < text1.length) {
                typedTextElement.innerHTML += text1.charAt(index1);
                index1++;
                setTimeout(typeWriter1, delay);
            }
        }

        function typeWriter2() {
            const typedTextElement = document.getElementById("typed-text2");
            if (index2 < text2.length) {
                typedTextElement.innerHTML += text2.charAt(index2);
                index2++;
                setTimeout(typeWriter2, delay);
            }
        }

        function typeWriter3() {
            const typedTextElement = document.getElementById("typed-text3");
            if (index3 < text3.length) {
                typedTextElement.innerHTML += text3.charAt(index3);
                index3++;
                setTimeout(typeWriter3, delay);
            }
        }

        function typeWriter4() {
            const typedTextElement = document.getElementById("typed-text4");
            if (index4 < text4.length) {
                typedTextElement.innerHTML += text4.charAt(index4);
                index4++;
                setTimeout(typeWriter4, delay);
            } else {
                const contactButton = document.getElementById("contact-button");
                contactButton.style.display = "flex";
                contactButton.style.animation = "fadein 1s";
                setTimeout(() => {
                    const contactButton = document.getElementById("contact-button");
                    contactButton.style.display = "flex";
                    contactButton.style.animation = "fadein 1s";
                }, 5000);
            }
        }

        typeWriter1();
        setTimeout(typeWriter2, text1.length * delay); // Start the second typewriter after the first one finishes
        setTimeout(typeWriter3, (text1.length + text2.length) * delay); // Start the third typewriter after the second one finishes
        setTimeout(typeWriter4, (text1.length + text2.length + text3.length) * delay); // Start the fourth typewriter after the third one finishes
    </script>
</body>
</html>
