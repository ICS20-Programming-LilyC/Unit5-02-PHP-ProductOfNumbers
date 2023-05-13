<?php

  // Initializing product variable.
  $product = 0;

  // Getting numbers from user.
  $firstNumber = isset($_POST['first-number']) ? $_POST['first-number'] : "";
  $secondNumber = isset($_POST['second-number']) ? $_POST['second-number'] : "";


  // If statement to give an error message if nothing nothing is entered or if numbers are invalid.
  if ((!is_numeric($firstNumber) || !is_numeric($secondNumber)) || ($firstNumber == "" || $secondNumber == "")) {
    echo "Please enter valid numbers.";
  }

  // Else (for if numbers are entered)
  else {

    // For loop to execute repeated addition that will result in the product.
    for ($counter = 1; $counter <= abs($secondNumber); $counter++) {
      $product = $product + abs($firstNumber);
    }

    // If statement to make sure that if one of the numbers is negative, the product will be negative.
    if (($firstNumber < 0 && $secondNumber > 0) || ($firstNumber > 0 && $secondNumber < 0)) {
      $product = $product * -1;
    }

    // Displaying the product to the user.
    echo "The product of your two selected integers (" . $firstNumber . " x " . $secondNumber . ") = " . $product . ".";
  }
?>