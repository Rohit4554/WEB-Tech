<?php
session_start(); // Start the session

// Initialize stack and queue if they don't already exist in session
if (!isset($_SESSION['stack'])) 
{
    $_SESSION['stack'] = [];
}
if (!isset($_SESSION['queue'])) 
{
    $_SESSION['queue'] = [];
}

$stack = &$_SESSION['stack']; // Reference session stack
$queue = &$_SESSION['queue']; // Reference session queue

function displayMenu() 
{
    echo "<h3>Menu</h3>";
    echo "1. Insert an element in stack<br>";
    echo "2. Delete an element from stack<br>";
    echo "3. Display the contents of stack<br>";
    echo "4. Insert an element in queue<br>";
    echo "5. Delete an element from queue<br>";
    echo "6. Display the contents of queue<br>";
    echo "7. Exit<br>";
}

// Insert element into stack
if (isset($_POST['insert_stack'])) 
{
    $element = $_POST['element_stack'];
    array_push($stack, $element);
    echo "Element '$element' inserted into stack.<br>";
}

// Delete element from stack
if (isset($_POST['delete_stack'])) 
{
    if (!empty($stack)) 
    {
        $deleted = array_pop($stack);
        echo "Element '$deleted' deleted from stack.<br>";
    } 
    else 
    {
        echo "Stack is empty. Cannot delete.<br>";
    }
}

// Display contents of stack
if (isset($_POST['display_stack'])) 
{
    if (!empty($stack)) 
    {
        echo "Stack contents: " . implode(", ", $stack) . "<br>";
    } 
    else 
    {
        echo "Stack is empty.<br>";
    }
}

// Insert element into queue
if (isset($_POST['insert_queue'])) 
{
    $element = $_POST['element_queue'];
    array_push($queue, $element);
    echo "Element '$element' inserted into queue.<br>";
}

// Delete element from queue
if (isset($_POST['delete_queue'])) 
{
    if (!empty($queue)) 
    {
        $deleted = array_shift($queue);
        echo "Element '$deleted' deleted from queue.<br>";
    } 
    else 
    {
        echo "Queue is empty. Cannot delete.<br>";
    }
}

// Display contents of queue
if (isset($_POST['display_queue'])) 
{
    if (!empty($queue)) 
    {
        echo "Queue contents: " . implode(", ", $queue) . "<br>";
    } 
    else 
    {
        echo "Queue is empty.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stack and Queue Operations</title>
</head>
<body>
    <?php displayMenu(); ?>

    <form method="post">
        <h4>Stack Operations</h4>
        1. Insert element in stack: <input type="text" name="element_stack">
        <input type="submit" name="insert_stack" value="Insert">
        <br><br>
        2. <input type="submit" name="delete_stack" value="Delete from Stack">
        <br><br>
        3. <input type="submit" name="display_stack" value="Display Stack">
        <br><br>

        <h4>Queue Operations</h4>
        4. Insert element in queue: <input type="text" name="element_queue">
        <input type="submit" name="insert_queue" value="Insert">
        <br><br>
        5. <input type="submit" name="delete_queue" value="Delete from Queue">
        <br><br>
        6. <input type="submit" name="display_queue" value="Display Queue">
        <br><br>
    </form>
</body>
</html>
