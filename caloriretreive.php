<link rel="stylesheet" type="text/css" href="foodret.css">

<br><hr><br>
<div class="container">

<?php
include('connectiondb.php');

$food1=$_POST['food1'];
$food2=$_POST['food2'];
// Select data from the table
$query = "select * from nutri where fname ilike '$food1' or fname ilike '$food2' ";
$result = pg_query($conn, $query);

// Check for errors in the query
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Display data in the front end
echo "<table>";
echo "<tr><th>ID</th><th>FoodItem</th><th>Calories</th><th>Carbs</th><th>Protein</th><th>Fat</th><th>Fibre</th></tr>";


while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['fid']}</td>";
    echo "<td>{$row['fname']}</td>";
    echo "<td>{$row['calories']}</td>";
    echo "<td>{$row['carb']}</td>";
    echo "<td>{$row['protien']}</td>";
    echo "<td>{$row['fat']}</td>";
    echo "<td>{$row['fibre']}</td>";
    
}

echo "</table>";

// Update column value from one table to another
$idToUpdate = $_POST['userid'];  // Replace with the actual ID you want to update

// Select the value from table1
$querySelect = "SELECT calories,carb,protien,fat,fibre FROM nutri WHERE fname ilike $1 or fname ilike $2";
$paramsSelect = array($food1,$food2);

$resultSelect = pg_query_params($conn, $querySelect, $paramsSelect);

// Check for errors in the query
if (!$resultSelect) {
    die("Select query failed: " . pg_last_error());
}

while($row = pg_fetch_assoc($resultSelect)){

    $calory = $row['calories'];
    $carbs=$row['carb'];
    $pro=$row['protien'];
    $fats=$row['fat'];
    $fibre=$row['fibre'];

    // Update the value in table2
    $queryUpdate = "UPDATE customerfoodentry SET calories=calories+ $1, carb=carb+$2, protien=protien+$3, fat=fat+$4, fibre=fibre+$5 WHERE userid = $6";
    $paramsUpdate = array($calory,$carbs,$pro,$fats,$fibre,$idToUpdate);

    $resultUpdate = pg_query_params($conn, $queryUpdate, $paramsUpdate);

    // Check for errors in the query
    if (!$resultUpdate) {
        die("Update query failed: " . pg_last_error());
    }
}




// Close the database connection
pg_close($conn);
?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
    background-color: #fff;
    margin: 0;
    overflow: hidden;
}

#drawing_canvas {
    position: absolute;
    margin: auto;
    width: 512px;
    height: 350px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
  </style>
</head>
<body>
    
    <canvas id="drawing_canvas"></canvas>
    <script>
        const TWO_PI = Math.PI * 2;
const HALF_PI = Math.PI * 0.5;

// canvas settings
var viewWidth = 512,
    viewHeight = 350,
    drawingCanvas = document.getElementById("drawing_canvas"),
    ctx,
    timeStep = (1/60);

Point = function(x, y) {
    this.x = x || 0;
    this.y = y || 0;
};

Particle = function(p0, p1, p2, p3) {
    this.p0 = p0;
    this.p1 = p1;
    this.p2 = p2;
    this.p3 = p3;

    this.time = 0;
    this.duration = 3 + Math.random() * 2;
    this.color =  '#' + Math.floor((Math.random() * 0xffffff)).toString(16);

    this.w = 8;
    this.h = 6;

    this.complete = false;
};

Particle.prototype = {
    update:function() {
        this.time = Math.min(this.duration, this.time + timeStep);

        var f = Ease.outCubic(this.time, 0, 1, this.duration);
        var p = cubeBezier(this.p0, this.p1, this.p2, this.p3, f);

        var dx = p.x - this.x;
        var dy = p.y - this.y;

        this.r =  Math.atan2(dy, dx) + HALF_PI;
        this.sy = Math.sin(Math.PI * f * 10);
        this.x = p.x;
        this.y = p.y;

        this.complete = this.time === this.duration;
    },
    draw:function() {
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.rotate(this.r);
        ctx.scale(1, this.sy);

        ctx.fillStyle = this.color;
        ctx.fillRect(-this.w * 0.5, -this.h * 0.5, this.w, this.h);

        ctx.restore();
    }
};

Loader = function(x, y) {
    this.x = x;
    this.y = y;

    this.r = 24;
    this._progress = 0;

    this.complete = false;
};

Loader.prototype = {
    reset:function() {
        this._progress = 0;
        this.complete = false;
    },
    set progress(p) {
        this._progress = p < 0 ? 0 : (p > 1 ? 1 : p);

        this.complete = this._progress === 1;
    },
    get progress() {
        return this._progress;
    },
    draw:function() {
        ctx.fillStyle = '#000';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, -HALF_PI, TWO_PI * this._progress - HALF_PI);
        ctx.lineTo(this.x, this.y);
        ctx.closePath();
        ctx.fill();
    }
};

// pun intended
Exploader = function(x, y) {
    this.x = x;
    this.y = y;

    this.startRadius = 24;

    this.time = 0;
    this.duration = 0.4;
    this.progress = 0;

    this.complete = false;
};

Exploader.prototype = {
    reset:function() {
        this.time = 0;
        this.progress = 0;
        this.complete = false;
    },
    update:function() {
        this.time = Math.min(this.duration, this.time + timeStep);
        this.progress = Ease.inBack(this.time, 0, 1, this.duration);

        this.complete = this.time === this.duration;
    },
    draw:function() {
        ctx.fillStyle = '#000';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.startRadius * (1 - this.progress), 0, TWO_PI);
        ctx.fill();
    }
};

var particles = [],
    loader,
    exploader,
    phase = 0;

function initDrawingCanvas() {
    drawingCanvas.width = viewWidth;
    drawingCanvas.height = viewHeight;
    ctx = drawingCanvas.getContext('2d');

    createLoader();
    createExploader();
    createParticles();
}

function createLoader() {
    loader = new Loader(viewWidth * 0.5, viewHeight * 0.5);
}

function createExploader() {
    exploader = new Exploader(viewWidth * 0.5, viewHeight * 0.5);
}

function createParticles() {
    for (var i = 0; i < 128; i++) {
        var p0 = new Point(viewWidth * 0.5, viewHeight * 0.5);
        var p1 = new Point(Math.random() * viewWidth, Math.random() * viewHeight);
        var p2 = new Point(Math.random() * viewWidth, Math.random() * viewHeight);
        var p3 = new Point(Math.random() * viewWidth, viewHeight + 64);

        particles.push(new Particle(p0, p1, p2, p3));
    }
}

function update() {

    switch (phase) {
        case 0:
            loader.progress += (1/45);
            break;
        case 1:
            exploader.update();
            break;
        case 2:
            particles.forEach(function(p) {
                p.update();
            });
            break;
    }
}

function draw() {
    ctx.clearRect(0, 0, viewWidth, viewHeight);

    switch (phase) {
        case 0:
            loader.draw();
            break;
        case 1:
            exploader.draw();
            break;
        case 2:
            particles.forEach(function(p) {
                p.draw();
            });
        break;
    }
}

window.onload = function() {
    initDrawingCanvas();
    requestAnimationFrame(loop);
};

function loop() {
    update();
    draw();

    if (phase === 0 && loader.complete) {
        phase = 1;
    }
    else if (phase === 1 && exploader.complete) {
        phase = 2;
    }
    else if (phase === 2 && checkParticlesComplete()) {
        // reset
        phase = 0;
        loader.reset();
        exploader.reset();
        particles.length = 0;
        createParticles();
    }

    requestAnimationFrame(loop);
}

function checkParticlesComplete() {
    for (var i = 0; i < particles.length; i++) {
        if (particles[i].complete === false) return false;
    }
    return true;
}

// math and stuff

/**
 * easing equations from http://gizma.com/easing/
 * t = current time
 * b = start value
 * c = delta value
 * d = duration
 */
var Ease = {
    inCubic:function (t, b, c, d) {
        t /= d;
        return c*t*t*t + b;
    },
    outCubic:function(t, b, c, d) {
        t /= d;
        t--;
        return c*(t*t*t + 1) + b;
    },
    inOutCubic:function(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t*t + b;
        t -= 2;
        return c/2*(t*t*t + 2) + b;
    },
    inBack: function (t, b, c, d, s) {
        s = s || 1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
    }
};

function cubeBezier(p0, c0, c1, p1, t) {
    var p = new Point();
    var nt = (1 - t);

    p.x = nt * nt * nt * p0.x + 3 * nt * nt * t * c0.x + 3 * nt * t * t * c1.x + t * t * t * p1.x;
    p.y = nt * nt * nt * p0.y + 3 * nt * nt * t * c0.y + 3 * nt * t * t * c1.y + t * t * t * p1.y;

    return p;
}
    </script>
</body>
</html>
  

