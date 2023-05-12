<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Product of numbers webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />

    <!--Title-->
    <title>Product of Numbers Webpage with PHP</title>
  </head>
  <body>

    <!--Header-->
    <?php echo "<h1>Product of Numbers Webpage with Javascript</h1>"; ?>

    <!--Text-->
    <center>
    <?php echo "<p>Welcome to my prodcut of numbers webpage. On my webpage you can input 2 numbers and I will calculate the product of these numbers using multiplication.</p>"; ?>
    </center>"

    <!--Image-->
    <br>
    <center>
      <img src = "./images/multiplicationChart.png" alt="Muliplication chart" width="400" length="400">
    </center>

    <!--Text-->
    <?php echo"<h3>Please enter your input below:</h3>"; ?>

    <!--Form for user input-->
    <form action="javascript:integersSent()">
      <label for="first number">Enter a positive integer:</label>
      <input type="number" step="1" id="first-number" placeholder="Your first integer">
      <br>
      <br>
      <label for="second number">Enter another positive integer:</label>
      <input type="number" step="1" id="second-number" placeholder="Your second integer">
      <br>
      <br>

    <!--Adding id to submit button to style button-->
      <input type="submit" id="calculate" value="Calculate!" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    </form>
    <br>
    
    <!--Iframe to display results-->
    <iframe id="results" name="results"></iframe>
    <br>
    <br>
  </body>
</html>