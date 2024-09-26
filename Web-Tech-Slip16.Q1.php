<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjects = $_POST['subject'];
    $marks = $_POST['marks'];

    // Calculate total marks and percentage
    $totalMarks = 0;
    for ($i = 0; $i < 5; $i++) {
        $totalMarks += $marks[$i];
    }
    $percentage = $totalMarks / 5;  // As each subject is out of 100

    // Calculate grade based on percentage
    if ($percentage >= 90) {
        $grade = 'A';
    } elseif ($percentage >= 80) {
        $grade = 'B';
    } elseif ($percentage >= 70) {
        $grade = 'C';
    } elseif ($percentage >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // Display results in a simple table
    echo "<h2>Student Result</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Subject</th><th>Marks</th></tr>";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr><td>" . htmlspecialchars($subjects[$i]) . "</td><td>" . htmlspecialchars($marks[$i]) . "</td></tr>";
    }
    echo "<tr><td>Total Marks</td><td>$totalMarks</td></tr>";
    echo "<tr><td>Percentage</td><td>$percentage%</td></tr>";
    echo "<tr><td>Grade</td><td>$grade</td></tr>";
    echo "</table>";
} else {
?>

<h2>Enter Marks for 5 Subjects</h2>
<form method="post" action="">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        Subject <?= $i ?>: <input type="text" name="subject[]" placeholder="Subject Name" required>
        Marks: <input type="number" name="marks[]" max="100" min="0" required><br><br>
    <?php } ?>
    <input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>
