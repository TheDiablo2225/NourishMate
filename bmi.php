<IDOCTYPE html>
    <html>
        <head>
            <title>BMI Tracker</title>
            <style>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login Form</title>
                <style>
                    body {
                    margin: 0;
                    padding:0;
                    font-family:Arial, sans-serif;
                    background-color:rgb(234, 200, 154);
                    color:#fff;
                    
                }
    
                .container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                
                .bmi-form {
                    background-image: linear-gradient(to bottom right, #0d9516, #a7ff9b);
                    color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    width: 300px;
                    box-shadow:  0 0 20px grey;
                }
    
                .login-form h2 {
                    text-align: center;
                }
                
                .form-group {
                    margin-bottom: 15px;
                }
                
                .form-group label {
                    display: block;
                    font-size: 14px;
                }
                
                .form-group input {
                    width: 100%;
                    padding: 10px;
                    font-size: 16px;
                    border: none;
                    border-bottom: 1px solid #fff;
                    background-color: transparent;
                    color: #fff;
                }
                
                .form-group input:focus {
                    outline: none;
                    border-bottom: 1px solid #fff; 
                }
    
                .button {
                    width: 100%;
                    padding: 10px;
                    font-size: 16px;
                    border: none;
                    border-radius: 5px;
                    background-color: #fff;
                    color:black;
                    cursor: pointer;
                    transition: background-color 0.3s ease, color 0.3s ease;
                }
                
                .button:hover {
                    background-color:;
                    color: #227f16; 
                }
                
            </style>

        </head>
    <body style = "background-color:#f3e5c7;">
        <div class="container">

            <form class="bmi-form">
                <br>

                <h2 style="text-align:center; font-family:Verdana, Geneva, Tahoma, sans-serif">BMI Calculator</h2><br><br>

                <div class="form-group">
                <label for='weight'>Enter your weight (in kg):</label>
                </div>

                <div class="form-group">
                <input type='number' id='weight' name='weight' required>
                <br><br>
                </div>

                <div class="form-group">
                <label for="height">Enter your height (in cm):</label>
                <input type="number" id="height" name="height" required>
                <br><br>
                </div>

                <input type="button" value="Calculatebmi" onclick="calculatebmi()" class="button"><br>
                <p id="bmi"> </p>
                
                <a href="home.php">
                    
                </a>

            </form> 
        </div> 
            <script>
                function calculatebmi(){
                    var weight=document.getElementById("weight").value;
                    var height=document.getElementById("height").value;
                    if(weight>0 && height>0){
                        var bmi=weight/((height/100)*(height/100));
                        document.getElementById("bmi").innerHTML="Body Mass Index: "+ bmi.toFixed(2);
                    }
                    else{
                        document.getElementById("bmi").innerHTML="Invalid input";
                    }
                }
            </script>
    </body>
</html>
       

        