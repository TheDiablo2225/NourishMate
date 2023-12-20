<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Nutrition Tracker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        
        header {
            background-color: #f3a846;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        @keyframes wateryBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        p {
            margin-top: 10px;
            font-size: 1.2em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px #db9b34;
            border-radius: 8px;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #208125;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
            
        }

        input:hover,
        textarea:hover {
            border-color:#f7b662;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #f7b662;
            color: #fff;
            padding: 14px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #f7b662;
            box-shadow :0 0 30px #e9ac5e;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icon {
            font-size: 32px;
            margin-right: 20px;
            color: #db9b34;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .social-icon:hover {
            color: #e6b66a;
        }

        /* Updated styles for Contact Details section */
       section#contact-details {
        margin-top: 40px;
        background-color: #f9f9f9; /* Light gray background */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    ul.contact-list {
        list-style-type: none;
        padding: 0;
        margin-bottom: 20px;
    }

    ul.contact-list li {
        margin-bottom: 10px;
        font-size: 16px;
        color: #555; /* Dark gray text color */
        transition: color 0.3s ease-in-out;
    }

    ul.contact-list li:hover {
        color:  #e6b66a; /* Highlight color on hover */
    }

    .slideshow-container {
        max-width: 300px;
        position: relative;
        overflow: hidden;
    }

    .mySlides {
        display: none;
    }

    .address-slide {
        animation: slide 2s infinite;
        color: #333; /* Darken text color */
        font-size: 18px;
    }

    @keyframes slide {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-30px);
        }
    }
    .center-button {
            text-align: center;
        }

        .center-button button {
            padding: 10px 20px;
            font-size: 16px;
            
        }

    .col{
        color :#db9b34;
    }

    .GFG { 
             border:1px solid #e28914;
             text-align: center; 
             display: inline-block; 
             font-size: 180px; 
            margin : 20px;
             cursor: pointer; 
           
         } 
         .dropbtn {
  background-color:#f3a846;
  color: #fff;
  padding: 16px;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-radius: 22px;
 
  
}

.dropbtn:hover, .dropbtn:focus {
  background-color:#f0b76d;
  box-shadow: 0 0 30px #f0b76d;
}

header {
            background-color: #f3a846;
            color: #fff;
            padding: 30px;
            text-align: center;
        }
                
                
    </style>
    </style>
</head>
<body>
    <header>
        <h1 style = "font-family:League Spartan; font-size:70px;">NOURISHMATE</h1>
    </header>

   <div style = "margin-left : 90px;"> 
<div style = "margin : 10px; padding-right:10px; padding-left : 10px">
  <button class="GFG dropbtn" 
  onclick="window.location.href = 'login.php';"> 
     Login 
  </button> 
  <button class="GFG dropbtn" style = "box-shadow: 0 0 20px #f0b76d;"
  onclick="window.location.href = 'homepage.php';">    
  Home
  </button> 
  <button class="GFG dropbtn" 
  onclick="window.location.href = 'foodecaloriemeter.php';"> 
     Log Food 
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'watertracker1.php';"> 
     Log Water 
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'bmi.php';"> 
     BMI Calcy 
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'foodrecord.php';"> 
     Report
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'supplements.php';"> 
     Products
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'contact.php';"> 
     Contact 
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'aboutus.php';"> 
     About
  </button> 
  </div>
    </div>
  <br><br>
    <section  class = "col">
        <h2 style = "color :#bf8424">Contact Information</h2>
        <p>Have questions or suggestions? Feel free to reach out to us.</p>

        <form>
            <label for="name" class = "col">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email" class = "col">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message" class = "col">Your Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <div class="center-button">
            <button type="submit" style = "margin-left : 350px;" >Send</button></div>
        </form>

        
    </section>

    <!-- Updated Section for Contact Details -->
    <section class="slideshow-container" id="contact-details" >
        <div class="mySlides address-slide"><h2>Contact Details</h2>
        <p>If you prefer to contact us directly, you can reach us via:</p>

        <ul class="contact-list">
            <li >Email: <a href="mailto:info@yournutritiontracker.com" style = "color :rgb(58, 55, 55); text-decoration : none;">info@yournutritiontracker.com</a></li>
            <li>Phone: <a href="tel:+15551234567" style = "color :rgb(58, 55, 55); text-decoration : none;">+1 (555) 123-4567</a></li>
        </ul>

        <div >
            <div>
                <p>Address: 123 Nutrition Street, Cityville, USA</p>
            </div>
            <div class="social-icons">
            <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
        </div>
        </div>
    </section>

    <!-- ... (existing scripts) ... -->

    <script>
        let slideIndexAddress = 0;

        function showSlidesAddress() {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndexAddress++;

            if (slideIndexAddress > slides.length) {
                slideIndexAddress = 1;
            }

            slides[slideIndexAddress - 1].style.display = "block";
            setTimeout(showSlidesAddress, 2000); // Change slide every 2 seconds
        }

        // Start the slideshow
        showSlidesAddress();
    </script>
</body>
</html>