<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Health Calculators</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Health Calculators</h1>

  <!-- BMR Calculator -->
  <section>
    <h2>BMR Calculator</h2>
    <form method="post" action="">
      <input type="number" name="weight" placeholder="Weight (kg)" required>
      <input type="number" name="height" placeholder="Height (cm)" required>
      <input type="number" name="age" placeholder="Age" required>
      <select name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <button type="submit" name="bmr_submit">Calculate BMR</button>
    </form>
    <?php
      if (isset($_POST['bmr_submit'])) {
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        if ($gender == "male") {
          $bmr = 88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age);
        } else {
          $bmr = 447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age);
        }
        echo "<p>Your BMR is " . round($bmr, 2) . " kcal/day</p>";
      }
    ?>
  </section>

  <!-- Ideal Weight Calculator -->
  <section>
    <h2>Ideal Weight Calculator</h2>
    <form method="post" action="">
      <input type="number" name="height2" placeholder="Height (cm)" required>
      <select name="gender2" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <button type="submit" name="ideal_submit">Calculate Ideal Weight</button>
    </form>
    <?php
      if (isset($_POST['ideal_submit'])) {
        $height = $_POST['height2'];
        $gender = $_POST['gender2'];
        if ($gender == "male") {
          $ideal = $height - 100 - (($height - 150) / 4);
        } else {
          $ideal = $height - 100 - (($height - 150) / 2.5);
        }
        echo "<p>Your ideal weight is " . round($ideal, 2) . " kg</p>";
      }
    ?>
  </section>

  <!-- Steps to Calories -->
  <section>
    <h2>Steps to Calories Converter</h2>
    <form method="post" action="">
      <input type="number" name="steps" placeholder="Steps walked" required>
      <input type="number" name="weight3" placeholder="Weight (kg)" required>
      <button type="submit" name="steps_submit">Convert</button>
    </form>
    <?php
      if (isset($_POST['steps_submit'])) {
        $steps = $_POST['steps'];
        $weight = $_POST['weight3'];
        $calories = $steps * 0.04 * ($weight / 70);
        echo "<p>You burned approximately " . round($calories, 2) . " calories.</p>";
      }
    ?>
  </section>

  <!-- Body Fat Percentage -->
  <section>
    <h2>Body Fat Percentage Estimator</h2>
    <form method="post" action="">
      <input type="number" name="waist" placeholder="Waist (cm)" required>
      <input type="number" name="neck" placeholder="Neck (cm)" required>
      <input type="number" name="height3" placeholder="Height (cm)" required>
      <select name="gender3" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <button type="submit" name="bodyfat_submit">Estimate</button>
    </form>
    <?php
      if (isset($_POST['bodyfat_submit'])) {
        $waist = $_POST['waist'];
        $neck = $_POST['neck'];
        $height = $_POST['height3'];
        $gender = $_POST['gender3'];

        if ($gender == "male") {
          $bodyFat = 495 / (1.0324 - 0.19077 * log10($waist - $neck) + 0.15456 * log10($height)) - 450;
        } else {
          $bodyFat = 495 / (1.29579 - 0.35004 * log10($waist + 0 - $neck) + 0.22100 * log10($height)) - 450;
        }
        echo "<p>Your estimated body fat percentage is " . round($bodyFat, 2) . "%</p>";
      }
    ?>
  </section>

  <!-- TDEE Calculator -->
  <section>
    <h2>TDEE Calculator</h2>
    <form method="post" action="">
      <input type="number" name="weight4" placeholder="Weight (kg)" required>
      <input type="number" name="height4" placeholder="Height (cm)" required>
      <input type="number" name="age4" placeholder="Age" required>
      <select name="gender4" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <select name="activity" required>
        <option value="">Select Activity Level</option>
        <option value="1.2">Sedentary</option>
        <option value="1.375">Lightly Active</option>
        <option value="1.55">Moderately Active</option>
        <option value="1.725">Very Active</option>
        <option value="1.9">Extra Active</option>
      </select>
      <button type="submit" name="tdee_submit">Calculate TDEE</button>
    </form>
    <?php
      if (isset($_POST['tdee_submit'])) {
        $weight = $_POST['weight4'];
        $height = $_POST['height4'];
        $age = $_POST['age4'];
        $gender = $_POST['gender4'];
        $activity = $_POST['activity'];

        if ($gender == "male") {
          $bmr = 88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age);
        } else {
          $bmr = 447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age);
        }

        $tdee = $bmr * $activity;
        echo "<p>Your TDEE is approximately " . round($tdee, 2) . " kcal/day</p>";
      }
    ?>
  </section>

</body>
</html>
