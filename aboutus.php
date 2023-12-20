<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- HTML code for social media icons -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Nutrition Tracker</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.0;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            text-align: center;
            padding: 50px 0;
            background-color: #f3a846;
            color: #fff;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 30px #d9a45f;
            border-radius: 8px;
        }

        h1, h2 {
            color: #f3a846;
        }

        p {
            margin-bottom: 20px;
            line-height: 1.5;
            position: relative;
            display: inline-block;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        p::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: #f3a846;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-in-out;
        }

        p:hover {
            color: #f3a846;
        }

        p:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
        }

        .mySlides {
            display: none;
        }

        img {
            width: 100%;
            border-radius: 8px;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: #dd830c;
        }

        .team-member {
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .team-member:hover {
            transform: scale(1.1);
        }
        
header {
            background-color: #f3a846;
            color: #fff;
            padding: 30px;
            text-align: center;
        }
        .social-icon{
            color:#dd830c;
        }

        .pad{
            padding: -40px;
        }
    </style>
</head>
<body>
    <header>
        <h1 style = "font-family:League Spartan; font-size:70px; color : #fff;">NOURISHMATE</h1>
        <h3>Empowering you to achieve a healthier lifestyle through personalized nutrition tracking.</h3>
    </header>
<br><br>
    

    <section>
        <h2>Our Mission</h2>
        <p>At Your Nutrition Tracker, we are on a mission to make nutrition tracking easy, accessible, and personalized for everyone. We believe that understanding and managing your nutrition is a key element in achieving a healthy and balanced lifestyle.</p>

        <h2>Our Team</h2>
        <p class = "pad">Abinaya K</p><br><p class = "pad" >Prasitaa K</p><br> <p class = "pad">Yaamini T</p>

        <div class="slideshow-container">
            <div class="mySlides">
                <img src="team-member1.jpg" alt="Team Member 1">
                <div class="team-member" onclick="showDescription('John Doe', 'Nutritionist')">John Doe</div>
            </div>

            <div class="mySlides">
                <img src="team-member2.jpg" alt="Team Member 2">
                <div class="team-member" onclick="showDescription('Jane Smith', 'Developer')">Jane Smith</div>
            </div>

            <!-- Add more team members as needed -->

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div id="team-description"></div>

        <h2>Why Choose Us?</h2>
        <p>With years of experience in both nutrition and technology, we have crafted a platform that combines scientific accuracy with a user-friendly interface. We are committed to staying up-to-date with the latest nutritional research to ensure that you receive the most accurate and relevant information.</p>

        <h2>Connect With Us</h2>
        <p>We love hearing from our users! If you have any questions, suggestions, or just want to say hello, feel free to reach out to us on social media or through our contact form.</p>

        <div>
    <a href="#" target="_blank" style="text-decoration: none" class="social-icon"><i class="fab fa-facebook-f"></i>Facebook</a><br><br>
    <a href="#" target="_blank" style="text-decoration: none" class="social-icon"><i class="fab fa-twitter"></i>Twitter</a><br><br>
    <a href="#" target="_blank" style="text-decoration: none" class="social-icon"><i class="fab fa-instagram"></i>Instagram</a>
</div>
    </section>

    <script>
        let slideIndex = 1;

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showDescription(name, role) {
            document.getElementById('team-description').innerHTML = <p>${name} - ${role}</p>;
        }

        showSlides(slideIndex);
    </script>
</body>
</html>