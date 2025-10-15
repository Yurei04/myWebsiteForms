<?php
// 1. Introduce Yourself
$name = "James Yuri R. Avila";
$age = 20;
$favColor = "blue";
$intro = "Hi, I’m $name, I am $age years old, and my favorite color is $favColor.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Activity with Forms</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <h1>PHP Activity (Form Version)</h1>

  <!-- 1. Introduce Yourself -->
  <section>
    <h2>1. Introduce Yourself</h2>
    <p><?php echo $intro; ?></p>
  </section>

  <!-- 2. Simple Math -->
  <section>
    <h2>2. Simple Math</h2>
    <form method="post">
      <input type="number" name="a" placeholder="Enter number A" required>
      <input type="number" name="b" placeholder="Enter number B" required>
      <button type="submit" name="math_submit">Calculate</button>
    </form>
    <?php
      if (isset($_POST['math_submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        echo "<ul>
          <li>Sum: " . ($a + $b) . "</li>
          <li>Difference: " . ($a - $b) . "</li>
          <li>Product: " . ($a * $b) . "</li>
          <li>Quotient: " . ($b != 0 ? $a / $b : 'Cannot divide by zero') . "</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 3. Area and Perimeter of Rectangle -->
  <section>
    <h2>3. Area and Perimeter of Rectangle</h2>
    <form method="post">
      <input type="number" name="length" placeholder="Length" required>
      <input type="number" name="width" placeholder="Width" required>
      <button type="submit" name="rect_submit">Calculate</button>
    </form>
    <?php
      if (isset($_POST['rect_submit'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        echo "<ul>
          <li>Area: $area</li>
          <li>Perimeter: $perimeter</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 4. Temperature Converter -->
  <section>
    <h2>4. Temperature Converter (Celsius → Fahrenheit)</h2>
    <form method="post">
      <input type="number" name="celsius" placeholder="Celsius" required>
      <button type="submit" name="temp_submit">Convert</button>
    </form>
    <?php
      if (isset($_POST['temp_submit'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9 / 5) + 32;
        echo "<p>$celsius °C = $fahrenheit °F</p>";
      }
    ?>
  </section>

  <!-- 5. Swapping Variables -->
  <section>
    <h2>5. Swapping Variables</h2>
    <form method="post">
      <input type="number" name="x" placeholder="Value of X" required>
      <input type="number" name="y" placeholder="Value of Y" required>
      <button type="submit" name="swap_submit">Swap</button>
    </form>
    <?php
      if (isset($_POST['swap_submit'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "<ul>
          <li>After Swap - X: $x</li>
          <li>After Swap - Y: $y</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 6. Salary Calculator -->
  <section>
    <h2>6. Salary Calculator</h2>
    <form method="post">
      <input type="number" name="basic" placeholder="Basic Salary" required>
      <input type="number" name="allowance" placeholder="Allowance" required>
      <input type="number" name="deduction" placeholder="Deduction" required>
      <button type="submit" name="salary_submit">Calculate Net Salary</button>
    </form>
    <?php
      if (isset($_POST['salary_submit'])) {
        $basic = $_POST['basic'];
        $allowance = $_POST['allowance'];
        $deduction = $_POST['deduction'];
        $net = $basic + $allowance - $deduction;
        echo "<p>Net Salary: ₱" . number_format($net, 2) . "</p>";
      }
    ?>
  </section>

  <!-- 7. BMI Calculator -->
  <section>
    <h2>7. BMI Calculator</h2>
    <form method="post">
      <input type="number" step="0.1" name="weight" placeholder="Weight (kg)" required>
      <input type="number" step="0.01" name="height" placeholder="Height (m)" required>
      <button type="submit" name="bmi_submit">Calculate</button>
    </form>
    <?php
      if (isset($_POST['bmi_submit'])) {
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi = $weight / ($height * $height);
        echo "<p>Your BMI is " . round($bmi, 2) . "</p>";
      }
    ?>
  </section>

  <!-- 8. String Manipulation -->
  <section>
    <h2>8. String Manipulation</h2>
    <form method="post">
      <input type="text" name="sentence" placeholder="Enter a sentence" required>
      <button type="submit" name="string_submit">Analyze</button>
    </form>
    <?php
      if (isset($_POST['string_submit'])) {
        $sentence = $_POST['sentence'];
        $charCount = strlen($sentence);
        $wordCount = str_word_count($sentence);
        $upper = strtoupper($sentence);
        $lower = strtolower($sentence);
        echo "<ul>
          <li>Characters: $charCount</li>
          <li>Words: $wordCount</li>
          <li>Uppercase: $upper</li>
          <li>Lowercase: $lower</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 9. Bank Account Simulation -->
  <section>
    <h2>9. Bank Account Simulation</h2>
    <form method="post">
      <input type="number" name="balance" placeholder="Current Balance" required>
      <input type="number" name="deposit" placeholder="Deposit" required>
      <input type="number" name="withdraw" placeholder="Withdraw" required>
      <button type="submit" name="bank_submit">Compute</button>
    </form>
    <?php
      if (isset($_POST['bank_submit'])) {
        $balance = $_POST['balance'];
        $deposit = $_POST['deposit'];
        $withdraw = $_POST['withdraw'];
        $new_balance = $balance + $deposit - $withdraw;
        echo "<p>New Balance: ₱" . number_format($new_balance, 2) . "</p>";
      }
    ?>
  </section>

  <!-- 10. Simple Grading System -->
  <section>
    <h2>10. Simple Grading System</h2>
    <form method="post">
      <input type="number" name="math" placeholder="Math Grade" required>
      <input type="number" name="english" placeholder="English Grade" required>
      <input type="number" name="science" placeholder="Science Grade" required>
      <button type="submit" name="grade_submit">Calculate</button>
    </form>
    <?php
      if (isset($_POST['grade_submit'])) {
        $math = $_POST['math'];
        $english = $_POST['english'];
        $science = $_POST['science'];
        $average = ($math + $english + $science) / 3;
        if ($average >= 90) $grade = "A";
        elseif ($average >= 80) $grade = "B";
        elseif ($average >= 70) $grade = "C";
        else $grade = "F";
        echo "<ul>
          <li>Average: " . number_format($average, 2) . "</li>
          <li>Grade: $grade</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 11. Currency Converter -->
  <section>
    <h2>11. Currency Converter (PHP → USD, EUR, JPY)</h2>
    <form method="post">
      <input type="number" name="phpAmount" placeholder="Amount in PHP" required>
      <button type="submit" name="currency_submit">Convert</button>
    </form>
    <?php
      if (isset($_POST['currency_submit'])) {
        $phpAmount = $_POST['phpAmount'];
        $usd = $phpAmount * 0.018;
        $eur = $phpAmount * 0.016;
        $jpy = $phpAmount * 2.66;
        echo "<ul>
          <li>₱$phpAmount = $" . number_format($usd, 2) . " USD</li>
          <li>₱$phpAmount = €" . number_format($eur, 2) . " EUR</li>
          <li>₱$phpAmount = ¥" . number_format($jpy, 2) . " JPY</li>
        </ul>";
      }
    ?>
  </section>

  <!-- 12. Travel Cost Estimator -->
  <section>
    <h2>12. Travel Cost Estimator</h2>
    <form method="post">
      <input type="number" name="distance" placeholder="Distance (km)" required>
      <input type="number" step="0.1" name="fuel" placeholder="Fuel Efficiency (km/l)" required>
      <input type="number" step="0.1" name="price" placeholder="Fuel Price (₱/L)" required>
      <button type="submit" name="travel_submit">Estimate Cost</button>
    </form>
    <?php
      if (isset($_POST['travel_submit'])) {
        $distance = $_POST['distance'];
        $fuel = $_POST['fuel'];
        $price = $_POST['price'];
        $cost = ($distance / $fuel) * $price;
        echo "<p>Estimated Travel Cost: ₱" . number_format($cost, 2) . "</p>";
      }
    ?>
  </section>

</body>
</html>
