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
            color:#02c0ff;
            
        }
        

        header {
            background-color: #02d9ff;
            color: #fff;
            padding: 25px;
            text-align: center;
        }

        .GFG { 
             border:1px solid var(--cute);
             text-align: center; 
             display: inline-block; 
             font-size: 18px; 
            margin : 10px;
             cursor: pointer; 
         } 

         .dropbtn {
                 background-color:var(--cute);
                 color: #fff;
                 padding: 16px;
                 font-size: 16px;
                 border: none;
                 cursor: pointer;
                 border-radius: 22px;
 
  
}

.dropbtn:hover, .dropbtn:focus {
  background-color:#37dcf9;
  box-shadow: 0 0 30px #02d9ff;
}

.dropdown {
  position: relative;
  display: inline-block;
}
  
:root {
  --border-color: #02c0ff;;
  --fill-color: #6ae0f8;
  --cute :  #02d9ff;
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
    margin: 30px 0;
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
    margin: 5px;
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
        
        </style>
        </head>
        <body style = "background-color: #bceaf8;">

   
       

        <div class="header">
            <!--Content before waves-->
            <div class="inner-header flex">
              <!-- Removed logo SVG code -->
              <h1>NOURISMATE</h1>
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
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       Login 
    </button> 
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';">    
    Home
    </button> 
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       Log Food 
    </button> 
  
    <button class="GFG dropbtn" style = "box-shadow: 0 0 28px var(--cute);"
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       Log Water 
    </button> 
  
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       BMI Calcy 
    </button> 
  
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       Report
    </button> 

    
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
      Products
    </button> 
  
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'file:///D:/xampp/htdocs/Ncontact.html';"> 
       Contact 
    </button> 
  
    <button class="GFG dropbtn" 
    onclick="window.location.href = 'https://ide.geeksforgeeks.org';"> 
       About
    </button> 
    </div>

 
   
      <!-- Further code here --><h1>Drink Water</h1>
  <h3>Goal: 2 Liters</h3>
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