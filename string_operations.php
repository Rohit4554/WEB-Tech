<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>
    <h2>String Operations</h2>
    <form action="process_string.php" method="POST">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required><br><br>

        <label>Select an operation:</label><br>
        <input type="radio" id="length" name="operation" value="length" required>
        <label for="length">Find Length</label><br>

        <input type="radio" id="vowels" name="operation" value="vowels">
        <label for="vowels">Count Vowels</label><br>

        <input type="radio" id="tolowercase" name="operation" value="tolowercase">
        <label for="tolowercase">Convert to Lowercase and Title Case</label><br>

        <input type="radio" id="pad" name="operation" value="pad">
        <label for="pad">Pad with *</label><br>

        <input type="radio" id="trim" name="operation" value="trim">
        <label for="trim">Remove Leading Whitespaces</label><br>

        <input type="radio" id="reverse" name="operation" value="reverse">
        <label for="reverse">Reverse String</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
