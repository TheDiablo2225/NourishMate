<?php
session_start();
include('connectiondb.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
else{
// Update column value from one table to another
    $idToUpdate = $_SESSION['user_id'];  // Replace with the actual ID you want to update


    // Update the value in table2
    $queryUpdate = "UPDATE watertracker SET glasscount=glasscount+1 where userid=$1";
    $params=array($idToUpdate);
    $resultUpdate = pg_query_params($conn, $queryUpdate,$params);

    // Check for errors in the query
    if (!$resultUpdate) {
        die("Update query failed: " . pg_last_error());
    }else{
        //header("Location: watertracker.php");
    }
}

// Close the database connection
pg_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-image: linear-gradient(to bottom right, #ffc905, #fff);
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden; /* Added overflow: hidden to prevent scrollbar */
    }

    .centered-div {
      width: 300px; /* Adjust the width as needed */
      height: 200px; /* Adjust the height as needed */
      background-color: #ffffff; /* White background for the div */
      border: 1px solid #ffc905; /* Black border for the div */
      text-align: center;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    h1 {
      position: absolute;
      margin-top: 10vh;
      width: 100%;
      text-align: center;
      font-size: 333%;
      font-family: sans-serif;
      color: rgb(255, 255, 255);
      opacity: 0.9;
    }
    h2 {
      position: absolute;
      margin-top: 40vh;
      width: 100%;
      text-align: center;
      font-size: 333%;
      font-family: sans-serif;
      color: grey;
      opacity: 0.5;
    }

    canvas {
      overflow-y: hidden;
      overflow-x: hidden;
      width: 100%;
      margin: 0;
    }



  </style>
  <title>Centered White Background Div</title>
</head>
<body style>
 
  
  <h1>Congratulations!</h1>
  <br><br><br>
  <h2>Move Forward towards your goal</h2>
<canvas id="canvas"></canvas>

 
  <script>
    let W = window.innerWidth;
let H = window.innerHeight;
const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");
const maxConfettis = 100;
const particles = [];

const possibleColors = [
  "DodgerBlue",
  "OliveDrab",
  "Gold",
  "Pink",
  "SlateBlue",
  "LightBlue",
  "Gold",
  "Violet",
  "PaleGreen",
  "SteelBlue",
  "SandyBrown",
  "Chocolate",
  "Crimson"
];

function randomFromTo(from, to) {
  return Math.floor(Math.random() * (to - from + 1) + from);
}

function confettiParticle() {
  this.x = Math.random() * W; // x
  this.y = Math.random() * H - H; // y
  this.r = randomFromTo(11, 33); // radius
  this.d = Math.random() * maxConfettis + 11;
  this.color =
    possibleColors[Math.floor(Math.random() * possibleColors.length)];
  this.tilt = Math.floor(Math.random() * 33) - 11;
  this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
  this.tiltAngle = 0;

  this.draw = function() {
    context.beginPath();
    context.lineWidth = this.r / 2;
    context.strokeStyle = this.color;
    context.moveTo(this.x + this.tilt + this.r / 3, this.y);
    context.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 5);
    return context.stroke();
  };
}

function Draw() {
  const results = [];

  // Magical recursive functional love
  requestAnimationFrame(Draw);

  context.clearRect(0, 0, W, window.innerHeight);

  for (var i = 0; i < maxConfettis; i++) {
    results.push(particles[i].draw());
  }

  let particle = {};
  let remainingFlakes = 0;
  for (var i = 0; i < maxConfettis; i++) {
    particle = particles[i];

    particle.tiltAngle += particle.tiltAngleIncremental;
    particle.y += (Math.cos(particle.d) + 3 + particle.r / 2) / 2;
    particle.tilt = Math.sin(particle.tiltAngle - i / 3) * 15;

    if (particle.y <= H) remainingFlakes++;

    // If a confetti has fluttered out of view,
    // bring it back to above the viewport and let if re-fall.
    if (particle.x > W + 30 || particle.x < -30 || particle.y > H) {
      particle.x = Math.random() * W;
      particle.y = -30;
      particle.tilt = Math.floor(Math.random() * 10) - 20;
    }
  }

  return results;
}

window.addEventListener(
  "resize",
  function() {
    W = window.innerWidth;
    H = window.innerHeight;
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  },
  false
);

// Push new confetti objects to `particles[]`
for (var i = 0; i < maxConfettis; i++) {
  particles.push(new confettiParticle());
}

// Initialize
canvas.width = W;
canvas.height = H;
Draw();

  </script>
</body>
</html>