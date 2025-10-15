<?php
// 1. Introduce Yourself
$name = "James Yuri R. Avila";
$age = 20;
$favColor = "blue";
$intro = "Hi, I’m $name, I am $age years old, and my favorite color is $favColor.";

// 2. Simple Math
$a = 8;
$b = 4;
$sum = $a + $b;
$diff = $a - $b;
$prod = $a * $b;
$quot = $a / $b;

// 3. Area and Perimeter of a Rectangle
$length = 5;
$width = 7;
$area = $length * $width;
$perimeter = 2 * ($length + $width);

// 4. Temperature Converter (Celsius → Fahrenheit)
$celsius = 30;
$fahrenheit = ($celsius * 9 / 5) + 32;

// 5. Swapping Variables
$x = 10;
$y = 20;
$temp = $x;
$x = $y;
$y = $temp;

// 6. Salary Calculator
$basic_salary = 15000;
$allowance = 2000;
$deduction = 1000;
$net_salary = $basic_salary + $allowance - $deduction;

// 7. BMI Calculator
$weight = 60; // kg
$height = 1.65; // m
$bmi = $weight / ($height * $height);

// 8. String Manipulation
$sentence = "Learning PHP is fun and powerful!";
$charCount = strlen($sentence);
$wordCount = str_word_count($sentence);
$upper = strtoupper($sentence);
$lower = strtolower($sentence);

// 9. Bank Account Simulation
$balance = 10000;
$deposit = 3000;
$withdraw = 2500;
$new_balance = $balance + $deposit - $withdraw;

// 10. Simple Grading System
$math = 88;
$english = 92;
$science = 85;
$average = ($math + $english + $science) / 3;
if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} else {
    $grade = "F";
}

// 11. Currency Converter (PHP → USD, EUR, JPY)
$phpAmount = 1000;
$rateUSD = 0.018;
$rateEUR = 0.016;
$rateJPY = 2.66;
$usd = $phpAmount * $rateUSD;
$eur = $phpAmount * $rateEUR;
$jpy = $phpAmount * $rateJPY;

// 12. Travel Cost Estimator
$distance = 250; // km
$fuel_consumption = 10; // km per liter
$fuel_price = 65; // per liter
$travel_cost = ($distance / $fuel_consumption) * $fuel_price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Exercises</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <h1>PHP Activity Outputs</h1>

  <section>
    <h2>1. Introduce Yourself</h2>
    <p><?php echo $intro; ?></p>
  </section>

  <section>
    <h2>2. Simple Math</h2>
    <ul>
      <li>Sum: <?php echo $sum; ?></li>
      <li>Difference: <?php echo $diff; ?></li>
      <li>Product: <?php echo $prod; ?></li>
      <li>Quotient: <?php echo $quot; ?></li>
    </ul>
  </section>

  <section>
    <h2>3. Area and Perimeter of Rectangle</h2>
    <ul>
      <li>Area: <?php echo $area; ?></li>
      <li>Perimeter: <?php echo $perimeter; ?></li>
    </ul>
  </section>

  <section>
    <h2>4. Temperature Converter</h2>
    <p><?php echo "$celsius °C = $fahrenheit °F"; ?></p>
  </section>

  <section>
    <h2>5. Swapping Variables</h2>
    <ul>
      <li>X: <?php echo $x; ?></li>
      <li>Y: <?php echo $y; ?></li>
    </ul>
  </section>

  <section>
    <h2>6. Salary Calculator</h2>
    <p>Net Salary: ₱<?php echo number_format($net_salary, 2); ?></p>
  </section>

  <section>
    <h2>7. BMI Calculator</h2>
    <p>Your BMI is: <?php echo number_format($bmi, 2); ?></p>
  </section>

  <section>
    <h2>8. String Manipulation</h2>
    <ul>
      <li>Sentence: "<?php echo $sentence; ?>"</li>
      <li>Characters: <?php echo $charCount; ?></li>
      <li>Words: <?php echo $wordCount; ?></li>
      <li>Uppercase: <?php echo $upper; ?></li>
      <li>Lowercase: <?php echo $lower; ?></li>
    </ul>
  </section>

  <section>
    <h2>9. Bank Account Simulation</h2>
    <p>New Balance: ₱<?php echo number_format($new_balance, 2); ?></p>
  </section>

  <section>
    <h2>10. Simple Grading System</h2>
    <ul>
      <li>Average: <?php echo number_format($average, 2); ?></li>
      <li>Grade: <?php echo $grade; ?></li>
    </ul>
  </section>

  <section>
    <h2>11. Currency Converter</h2>
    <ul>
      <li>₱<?php echo $phpAmount; ?> = $<?php echo number_format($usd, 2); ?> USD</li>
      <li>₱<?php echo $phpAmount; ?> = €<?php echo number_format($eur, 2); ?> EUR</li>
      <li>₱<?php echo $phpAmount; ?> = ¥<?php echo number_format($jpy, 2); ?> JPY</li>
    </ul>
  </section>

  <section>
    <h2>12. Travel Cost Estimator</h2>
    <p>Estimated Travel Cost: ₱<?php echo number_format($travel_cost, 2); ?></p>
  </section>

</body>
</html>
