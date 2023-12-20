<!DOCTYPE html>
<html lang="en">
<head>
  <title>NourishMate</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>

header {
            background-color: #02d9ff;
            color: #fff;
            padding: 25px;
            text-align: center;
        }

        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}
h1{
    font-family:League Spartan; 
    font-size:90px;
    margin-bottom: 0px; /* Remove margin bottom */

}

p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.header {
  position:relative;
  text-align:center;
  background: #02c4ff;
  color:white;
   
}


.inner-header {
       /* Adjusted height */
      width: 100%;
      margin: 0;
      padding: 0;
    }

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:50vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  
  text-align:center;
  background-color: rgb(135, 206, 235, 0.2);
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;

  }
  .content {
    height:40vh;
  }
  
  h1 {
    font-size:60px;
    color : #fff
  }
}

body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            align-items: center;
            background-color :#d5f3f9;
            color:#fcfeff;
            
        }
        

        header {
            background-color: #0256ff;
            color: #fff;
            padding: 25px;
            text-align: center;
        }

        .GFG { 
             border:1px solid var(--cute);
             text-align: center; 
             display: inline-block; 
             font-size: 25px; 
            margin : 15px;
             cursor: pointer; 
         } 

         .dropbtn {
                 background-color:rgb(192, 208, 239);
                 color: #1756f7;
                 padding: 16px;
                 font-size: 16px;
                 border: none;
                 cursor: pointer;
                 border-radius: 22px;
 
  
}

.dropbtn:hover, .dropbtn:focus {
  background-color:#f5fcfd;
  color :#144fc6;
  transition : 0.4s ease;
  box-shadow: 0 0 30px #90bdfc;
}

.dropdown {
  position: relative;
  display: inline-block;
}
  
:root {
  --border-color: #378df5;;
  --fill-color: #6ab8f8;
  --cute :  #02c4ff;
}

* {
  box-sizing: border-box;
}

   
h3 {
    font-weight: 400;
    margin: 10px 0;
  }
  
  .cup {
    background-color: #fff;
    border: 4px solid var(--border-color);
    color: var(--border-color);
    border-radius: 0 0 40px 40px;
    height: 330px;
    width: 150px;
    margin: 60px 0;
    margin-left : 230px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }
  
  .cup.cup-small {
    height: 95px;
    width: 50px;
    border-radius: 0 0 15px 15px;
    background-color: rgba(255, 255, 255, 0.9);
    cursor: pointer;
    font-size: 14px;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin: 10px;
    transition: 0.3s ease;
  }
  
  .cup.cup-small.full {
    background-color: var(--fill-color);
    color: #fff;
  }
  
  .cups {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 280px;
    margin-left : 220px;
  }
  
  .remained {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex: 1;
    transition: 0.3s ease;
  }
  
  .remained span {
    font-size: 20px;
    font-weight: bold;
  }
  
  .remained small {
    font-size: 12px;
  }
  
  .percentage {
    background-color: var(--fill-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 30px;
    height: 0;
    transition: 0.3s ease;
  }
  
  .text {
    text-align: center;
    margin: 0 0 5px;
  }
  .cupbtn {
    background-color :#fff;
    border : 0px;
    color :#144fc6;
    font-weight: 30;
    cursor : pointer;

  }

  p{
    font-family :'Comic Sans MS';
    font-size : 20px;
    text-align : center;
    color : #dddddd;
  }
p.bfaw{
    font-size: 18px;
}
  .cutess{
    font-size: 100px;
  }
  .cutess:hover{
    font-size : 110px;
    
    transition: 0.5s ease-in-out;
  }
  img{
    border-radius: 12px;
    width :200px;
    height : 200px;
  }

  
.contdiv {
           
           display:flex;
           margin-left:20px;
           padding-right: 10px;
           padding-left : 40px;
          
           color :rgb(255, 255, 255);
               }

               .box1 {
           
           margin: 30px;
           margin-left : 120px;
           padding: 10px;
          
           border: 1px solid #f1cd9d;
         
         
           width : 270px;
           height : 270px;
           border-radius: 22px;
       }

       .box1:hover{
        box-shadow: 0 0 30px #fff;
        transition: 0.5s ease-in-out;
       }

       .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #fff 0%,
    #5cb9e8f1 29%,
    #fffbfc 67%,
    #00c8ffca 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 5s linear infinite;
  display: inline-block;
      font-size : 130px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
        
        </style>
        </head>
        <body style = "background-image: linear-gradient(to bottom, #0256ff, #4e7dff);">

            
   
       

        <div class="header" style = "background-color: #0256ff;">
            <!--Content before waves-->
            <div class="inner-header flex">
              <!-- Removed logo SVG code -->
              <h1 class = "animate-charcter">NOURISMATE</h1>
            </div>
            <!--Waves Container-->
            <div>
              <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs> 
                <g class="parallax">
                  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgb(135, 206, 235,0.7)"; />
                  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                  <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(135, 206, 235, 0.2)" />
                </g>
              </svg>
            </div>
            <!--Waves end-->
          </div>
          <!--Header ends-->
          
          <!--Content starts-->
          <div class="content flex">
            <!-- Your content here -->
          </div>
          <!--Content ends-->

               <br><br> 
<div style = "margin : 10px; padding-right:50px;">
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'login.php';"> 
       Login 
    </button> 
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'homepage.php';">    
    Home
    </button> 
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'foodcalorimeter.php';"> 
       Log Food 
    </button> 
  
    <button class="GFG dropbtn" style = "box-shadow: 0 0 28px #d2d9e3; background-color: #fff;"
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
    </div>

 
   
      <!-- Further code here --><h1 class = "cutess" style = "font-family: Candara;">Drink Water</h1>
  <p>Reach your daily goals</p>
  <br><br>

  <div style = "margin-left : 80px; margin-right : 80px; align-items : center; border : 1px solid #02d9ff; padding-top: 20px; padding-bottom:30px;">
  <div style = "padding-left : 385px; ">
  <div class="cup">
      <div class="remained" id="remained">
          <span id="liters"></span>
          <small>Remained</small>
      </div>
  
      <div class="percentage" id="percentage"></div>
  </div>
  </div>
  <p class="text" style = "text-align : center;">Select how many glasses of water that you have drank</p>
  <div style = "padding-left : 320px; ">
  <div class="cups">
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 1</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()" >Glass 2</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 3</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 4</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 5</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 6</button></div>
    <div class="cup cup-small"><button class = "cupbtn" onclick="redirectToPhpScript()">Glass 7</button></div>
      </div>
  </div>
  </div>
<br><br>
<h1 class = "cutess" style = "font-family: Candara;">Staying Hydrated</h1>
  <p>Your New Favourite Life Hack</p>

  <div class = "contdiv">
        <div class = "box1">
            <img src = "N20.jpg">
            <p class = "bfaw">Better focus at work</p>

        </div>

        <div class = "box1">
            <img src = "N21.jpg">
            <p class = "bfaw">Happier Mood</p>

        </div>

        <div class = "box1">
            <img src = "N22.jpg">
            <p class = "bfaw">Fresher start to the day</p>
        </div>
</div>
<div class = "contdiv">
        <div class = "box1">
            <img src = "N23.jpg">
            <p class = "bfaw">Younger looking skin</p>
        </div>

        <div class = "box1">
            <img src = "N24.jpg">
            <p class = "bfaw">Detoxed body</p>
        </div>

        <div class = "box1">
            <img src = "N25.jpg">
            <p class = "bfaw">Fall asleep early</p>
        </div>

       
  </div>
      <script >
  
  const smallCups = document.querySelectorAll('.cup-small')
  const liters = document.getElementById('liters')
  const percentage = document.getElementById('percentage')
  const remained = document.getElementById('remained')
  
  updateBigCup()
  
  smallCups.forEach((cup, idx) => {
      cup.addEventListener('click', () => highlightCups(idx))
  })
  
  function highlightCups(idx) {
      if (idx === 7 && smallCups[idx].classList.contains("full")) idx--;
      else if (smallCups[idx].classList.contains('full') && !smallCups[idx].nextElementSibling.classList.contains('full')) {
          idx--
      }
  
      smallCups.forEach((cup, idx2) => {
          if (idx2 <= idx) {
              cup.classList.add('full')
          } else {
              cup.classList.remove('full')
          }
      })
  
      updateBigCup()
  }
  
  function updateBigCup() {
      const fullCups = document.querySelectorAll('.cup-small.full').length
      const totalCups = smallCups.length
  
      if (fullCups === 0) {
          percentage.style.visibility = 'hidden'
          percentage.style.height = 0
      } else {
          percentage.style.visibility = 'visible'
          percentage.style.height = `${fullCups / totalCups * 330}px`
          percentage.innerText = `${fullCups / totalCups * 100}%`
      }
  
      if (fullCups === totalCups) {
          remained.style.visibility = 'hidden'
          remained.style.height = 0
      } else {
          remained.style.visibility = 'visible'
          liters.innerText = `${2 - (250 * fullCups / 1000)}L`
      }
  }
       function redirectToPhpScript() {
            // Redirect to your PHP script
            window.location.href = 'waterdb.php';
        }
      </script>


          
          </body>
          </html>