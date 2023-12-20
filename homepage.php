<!DOCTYPE html>
<html lang="en">
<head>
  <title>NourishMate</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            align-items: center;
        }
        

        header {
            background-color: #f3a846;
            color: #fff;
            padding: 60px;
            text-align: center;
        }

        nav {
            float: right;
            background-color: #f1f1f1;
            padding: 10px;
            width: 20%; /* Adjust the width as needed */
        }

        nav a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            text-align: center;
        }

        nav a:hover {
            background-color: #ddd;
        }

        section {
            padding: 20px;
        }
.dropbtn {
  background-color:#f3a846;
  color: #fff;
  padding: 18px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 22px;
  
 
  
}

.dropbtn:hover, .dropbtn:focus {
  background-color:#f0b76d;
  box-shadow: 0 0 30px #f0b76d;
  transition : 0.5s ease-in-out;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 10px 8px 1px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:left;
}

.dropdown-content a {
  color:#f3a846;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:left;
}

.dropdown a:hover {background-color: #f1cd9d;}

.show {display: block;}

.contdiv {
           
    display:flex;
    margin-left:200px;
    padding-right: 10px;
    padding-left : 40px;
    font-family: Manrope, sans-serif;
    color :rgb(34, 114, 18);
        }

        *{
            margin :0;
            padding : 0;
            box-sizing : border-box;
            font-family : sans-serif;
         }
        .box1 {
           
            margin: 20px;
            padding: 10px;
            margin-left : 30px;
           
            border: 1px solid #f1cd9d;
           background-color:#fffbf5;
          
            width : 290px;
            height : 250px;
            border-radius: 12px;
        }

        .container{
            position: relative;
            display :flex;
            justify-content: center;
            align-items: center;
            flex-wrap : wrap;
            gap : 160px 90px;
            padding : 10px 50px;

         }
         .container .card{
            position : relative;
            display : flex;
            justify-content:center;
            align-items : flex-start;
            width : 250px;
            height : 250px;
            background :#fffbf5;
            box-shadow : 0 35px 80px rgba(0, 0, 0, 0.15);
            transition : 0.5s;
            border-radius: 12px;
           
         }
         .container .card:hover{
            height : 300px;
            scale : 0.75;
            box-shadow: 0 15px 45px black;
         }
         .container .card .imgBx{
            position : absolute;
            top: 20px;
            border-radius : 12px;
            width : 200px;
            height : 170px;
            background : black;
            transition : 0.5s;
            overflow : hidden;
            
         }
         .container .card:hover .imgBx{
            top : -50px;

         }
         .container .card .imgBx img{
            position: absolute;
            top : 0;
            left : 0;
            width : 100%;
            height : 100%;
            object-fit : cover;
         }

         .container .card .content{
            position: absolute;
            width: 100%;
            top : 212px;
            padding : 0 30px;
            text-align : center;
            height: 30px;
            overflow : hidden;
           transition : 0.5s;
         }
         .container .card:hover .content{
            top : 150px;
            height : 250px;
         }
         .container .card .content h2{
            font-size: 1.5em;
            font-weight : 700;
            color : #e28914 ;
         }
         .container .card .content p{
            color : #f0b76d;
                }
         .container .card .content a{
            position: relative;
            top : 15px;
            display: inline-block;
            padding : 12px 25px;
            background : var(--clr);
            font-weight: 500;
            color:#f1f1f1;
            text-decoration : none;
                }
                .GFG { 
             border:1px solid #e28914;
             text-align: center; 
             display: inline-block; 
             font-size: 17px; 
            margin : 20px;
             cursor: pointer; 
             
         } 
    
        
    </style>
</head>
<body>

    <header>
        <h1 style = "font-family:League Spartan; font-size:100px;">NOURISHMATE</h1>
    </header>

    
<div style = "margin : 10px; padding-right:10px; padding-left : 10px">
<button class="GFG dropbtn" 
  onclick="window.location.href = 'signup.php';"> 
     SignUp 
  </button> 
  <button class="GFG dropbtn" 
  onclick="window.location.href = 'login.php';"> 
     Login 
  </button> 
  <button class="GFG dropbtn" style = "box-shadow: 0 0 20px #f0b76d;"
  onclick="window.location.href = 'homepage.php';">    
  Home
  </button> 
  <button class="GFG dropbtn" 
  onclick="window.location.href = 'foodcalorimeter.php';"> 
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
     Supplements
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'contact.php';"> 
     Contact 
  </button> 

  <button class="GFG dropbtn" 
  onclick="window.location.href = 'aboutus.php';"> 
     About
  </button> 


<!--
<div style = "margin : 10px; padding-right:50px;">
   
    <div class="dropdown" style="float:right;">
        <button onclick="myFunction()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content">
            <nav>
                <a href="#">Home</a>
                <a href="#">BMI Calculator</a>
                <a href="#">Log Food</a>
                <a href="#">Log Water</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
      </div>
    </div>  -->
    <br><br>
         
    <div style = "font-family: Manrope, sans-serif; color:#f3a846; text-align :center;  padding :10px;">
      <h1 style = "color:#e28914;">Healthy Recipes</h1><br>
      <h3>Try out these simple yet filling recipes to hit your nourishment target.<emp>Crave a smarter bite.</emp></h3>
        <br>
      </div>

   <div class = "container">
    <div class = "card" style = "--clr : #f3a846;">
    <div class = "imgBx">
      <img src = "NimgPalakSalad.jpg">
     </div>
    <div class = "content">
      <h2>Palak Salad</h2>
               <p>Recipe palak salad that is both healthy and filling 
                as well. Less in calories and high in vitamins, minerals and iron.
               </p>
               <a href = "https://pin.it/2DZEJBj">View Recipe</a>
    </div> 
   </div>

   <div class = "card" style = "--clr : #f3a846;">
    <div class = "imgBx">
      <img src = "Nimg11.jpg">
     </div>
    <div class = "content">
      <h2>Berry Salad</h2>
               <p>Specially prepared for sweet tooths, rich in macros and micros,
                definitely great for detoxing.</p>
               <a href = "https://pin.it/3Gl81mO">View Recipe</a>
    </div> 
   </div>

   <div class = "card" style = "--clr : #f3a846;">
    <div class = "imgBx">
      <img src = "WhatsApp Image 2023-12-18 at 11.11.46 AM (1).jpeg">
     </div>
    <div class = "content">
      <h2>Mango Smoothie</h2>
               <p>Mango Smoothie without additional sweeteners. Regulates sugar levels and 
                serve cool.
               </p>
               <a href = "https://joyfoodsunshine.com/mango-smoothie-video/">Watch Video</a>
    </div> 
   </div>



   </div>
   <br><br><br><br>



   <div style = "font-family: Manrope, sans-serif; color:#f3a846; text-align :center;  padding :10px;">
    <h1 style = "color:#e28914;">Widen Your Knowledge</h1><br>
    <h3>NourishMate helps you to learn mmore about healthy eating habits, recommending related articles to you. <emp>Craving a smarter bite</emp></h3>
      <br>
    </div>

 <div class = "container">
  <div class = "card" style = "--clr : #f3a846;">
  <div class = "imgBx">
    <img src = "Nrice.jpg">
   </div>
  <div class = "content">
    <h2>Effects of Rice</h2>
             <p>Learn how much impact can be created by not having white rice 
              for a month, consistency is key.
             </p>
             <a href = "https://indianexpress.com/article/lifestyle/health/giving-up-rice-completely-health-effects-8667272/">Read Article</a>
  </div> 
 </div>

 <div class = "card" style = "--clr : #f3a846;">
  <div class = "imgBx">
    <img src = "Nmuscle.jpg">
   </div>
  <div class = "content">
    <h2>Muscle Building</h2>
             <p>Protien is an essential element in building and maintaining muscles. 
              Learn more about protien rich foods.</p>
             <a href = "https://www.healthline.com/nutrition/high-protein-foods#turkey-breast">View Recipe</a>
  </div> 
 </div>

 <div class = "card" style = "--clr : #f3a846;">
  <div class = "imgBx">
    <img src = "Nhydration.jpg">
   </div>
  <div class = "content">
    <h2>Stay Hydrated</h2>
             <p>Read more to 
              learn the necessity of staying hydrated all day. Hydration is key. 
             </p>
             <a href = "https://www.medicalnewstoday.com/articles/290814">Read Article</a>
  </div> 
 </div>



 </div>

 <br><br><br><br>

   <div style = "font-family: Manrope, sans-serif; color:#f3a846; text-align :center; ">
    <h1 style = "color:#e28914;">Develop Healthy Eating Habit</h1><br>
    <h3>Count your calories, ensure you're meeting nutrient targets, and see your progress over time.</h3>
      <br>
    </div>
<br><br>
    <div class="contdiv">
     
        <div class="box1" >
            <h2 >Track Your Daily Calorie Intake</h2><br>
            <p>Log your meals and track all your macro and micronutrients.
               Set weight, macro and nutrient targets to meet your goals.</p>
        </div>

        <div class="box1">
            <h2>Set Water Intake Goals And Reach Them</h2><br>
            <p>Track your water intake and feel hydrated, get notified to be consistent.
              Set daily goals and and update your intake to get insights about your progress.
            </p>
        </div>

        <div class="box1">
            <h2>Generate Nourishment Reports</h2><br>
            <p>Know your path and progress. Get insights from your weekly reports and improve.
              Our reports are straight to the point and give you a vision about how your future 
              goals should be.
            </p>
        </div>
    </div>
    <br><br><br>
    <div style = "font-family: Manrope, sans-serif; color:#f3a846; text-align :center; ">
      <h1 style = "color:#e28914;">Discover Your Nutrition</h1>
      <br>
      <h3>NourishMate encourages you to not just count your calories but to focus on your nutrition as a whole.</h3>
        <br>
      </div>
<br>
<img src = "Nhome1.jpeg" style = "height : 400px; width : 650px; float : left; padding-left : 250px;">
      <div style = "margin-left : 890px; padding-right : 30px; padding-left: 25px; padding-top : 25px; width : 400px; height : 360px; border : 0px solid #e28914;">
        <h2 style = "text-align: left; color : rgb(28, 101, 13);">&#10173;     Accurate nutrition data</h2>
        <p style = "text-align: left; color : rgb(34, 114, 18);">Be confident that the food you log has the correct nutrition data. We verify every food submission for accuracy.</p>
<br>
        <h2 style = "text-align: left; color : rgb(28, 101, 13);">&#10173;     Data privacy & security</h2>
        <p style = "text-align: left; color : rgb(34, 114, 18);">We don't sell your account data to third parties and take the security of our users' accounts seriously.</p>
<br>
        <h2 style = "text-align: left; color : rgb(28, 101, 13);">&#10173;     Wide network & community</h2>
        <p style = "text-align: left; color : rgb(34, 114, 18);">Join the community to get tips and inspiration
          from other users on our forums and Facebook group.</p><br>

      </div>
      <br><br><br><br><br>


      <div style = "background-color:rgb(56, 145, 39); color:#f1f1f1; height :220px; width:1475px; margin :0px; padding : 30px;">
        <p style ="text-align : center; font-size : 30px;">Find out if you're getting the vitamins and minerals</p>
        <p style = "text-align : center; font-size : 30px;">you need with our food diary app.</p><br>
        <button class="GFG dropbtn" style = "justify-content: center; margin-left : 610px;  position : absolute; "
        onclick="window.location.href = 'signup.php';"> 
           Sign Up - It's Free 
        </button> 

      </div>

      
      

     <br><br><br><br>








   
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
        
</body>
</html>