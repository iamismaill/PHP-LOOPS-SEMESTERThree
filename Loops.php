<!DOCTYPE html>
<html>
<head>
    <title>LOOPS IN PHP SEMESTER THREE</title>
    <style>
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }
        
 
        h1 {
            text-align: center;
        }
        h2 {
            color: #333;
            text-decoration: underline;
        }
        h3 {
            color: #555;
        }
    </style>
</head>
<body>

<h1>PHP Loops - Semester Three</h1>

 
<div class="container">
    <h2>For Loop Examples</h2>

    <?php

    // For LOOP Syntax 

    // for (condtion) {
    //     // Code to be excuted
    // }

    // Example One: For Loop Counting Up
    echo "<h3>Example One: Counting from 1 to 5</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo "The number is " . $i . "<br>";
    }

    echo "<br>";

    // Example Two: For Loop Counting Down
    echo "<h3>Example Two: Counting Down from 5 to 1</h3>";
    for ($i = 5; $i >= 1; $i--) {
        echo "Counting down from " . $i . "<br>";
    }

    echo "<br>";

    // Example Three: Displaying Even Numbers from 2 to 10
    echo "<h3>Example Three: Displaying Even Numbers from 2 to 10</h3>";
    for ($i = 2; $i <= 10; $i += 2) {
        echo $i . "<br>";
    }
    
    echo "<br><br>";

    echo "<h3>While Loop Examples</h3>";
    // While Loop: Counting from 1 to 5
    echo "<h3>While Loop: Counting from 1 to 5</h3>";
    $j = 1;
    while ($j <= 5) {
        echo "The number is " . $j . "<br>";
        $j++;
    }
    
    echo "<br><br>";

    echo "<h3>DoWhile Loop Examples</h3>";
    // Example One: Counting from 1 to 5
    echo "<h3>Do...While Loop: Counting from 1 to 5</h3>";
    $k = 1;
    do {
        echo "The number is " . $k . "<br>";
        $k++;
    } while ($k <= 5);
    citycot@779
    echo "<br>";

    // Example Two: Displaying Even Numbers from 2 to 10
    echo "<h3>Do...While Loop: Displaying Even Numbers from 2 to 10</h3>";
    $num = 2;
    do {
        echo $num . "<br>";
        $num += 2;
    } while ($num <= 10);
    
    echo "<br><br>";

    // Foreach Loop Examples
    echo "<h3>Foreach Loop Examples</h3>";

    // Example One: Printing Fruits from an Array
    echo "<h3>Example One: Printing Fruits from an Array</h3>";
    $fruits = array("Apple", "Banana", "Cherry");
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    echo "<br>";

    // Example Two: Printing East African Countries
    echo "<h3>Example Two: Printing East African Countries</h3>";
    $east_african_countries = array(
        "Kenya", "Uganda", "Tanzania", "Somalia", "Ethiopia", 
        "Rwanda", "Burundi", "South Sudan", "Sudan", "Djibouti"
    );
    foreach ($east_african_countries as $country) {
        echo $country . "<br>";
    }


    echo "<br>";

    $colors = array("Red", "Green","blue");
    foreach ($colors as $color) {
        echo "The items of this array are " . $color . "<br>";
    }
    
    ?>
</div>

</body>
</html>
