<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orange Sign Up</title>
  <style>
    body {
      background-color: #f8f8f8;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150vh;
    }

    .signup-container {
      background-image: linear-gradient(to bottom left, #ff8c00 , #fdb051);
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px;
      text-align: center;
    }

    h1 {
      color: #fff;
    }

    label {
      display: block;
      margin: 10px 0;
      color: #fff;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #fff;
      color: #ff8c00;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 30%;
      font-size: 16px;
      font-weight: bold;
    }

    button:hover {
      background-color: #e0e0e0;
    }

    .gender-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #fff;
      color: #ff8c00;
      border: 1px solid #fff;
      border-radius: 4px;
      padding: 8px;
      cursor: pointer;
      text-align: center;
      font-weight: 25px;
      transition: background-color 0.3s;
      box-shadow: 0 0 1px black;
    }
   

    /* Hover effect for the select element */
    select:hover {
      background-color: #ffcd8f; /* Darker shade of orange on hover */
    }
    

    /* Style options inside the select element */
    select option {
      background-color:#fff;
      color:  #ff8c00;
    }


  </style>
</head>
<body>

  <div class="signup-container">
    <h1>Log In</h1>
    <form action="logindb.php" method="post">
      <label for="userid">Userid:</label>
      <input type="text" id="userid" name="userid" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      
        <br><br>

      <button type="submit">Login</button>
    </form>
  </div>
</body>