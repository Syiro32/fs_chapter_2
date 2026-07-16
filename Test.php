<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container py-2">
        <div class="row">
            <div class="col-md-12 col-lg-12">

                <div class="card p-3 my-3 bg-light">
                    <?php
                    echo "<h2>Koperasi PKT</h2><br>";

                    $name = "Ali";
                    $price = 4.00;
                    $quantity = 5;

                    $total = $quantity * $price;
                    $afterDiscount = $total - 2;
                    $sst = $afterDiscount * 0.06;

                    $finalPrice = $afterDiscount + $sst;

                    echo "Name: " . $name . "<br>";
                    echo "Quantity: " . $quantity . "<br>";
                    echo "Total: RM" . $total . "<br>";
                    echo "Price After Discount: RM" . $afterDiscount . "<br>";
                    echo "Final Total: RM" . $finalPrice;
                    echo "<br><br>";
                    ?>

                    <?php

                    echo "Value x=90 <br> Value y=90 <br><br>";
                    $x = 90;
                    $y = "90";

                    if ($x === $y) {
                        echo "True";
                    } else {
                        echo "False";
                    }

                    echo "<br><br>";

                    ?>
                </div>


                <div class="card p-3 my-3 bg-light">
                    <?php

                    $age = 20;
                    $haslicense = true;

                    //Comparison: ($age >= 18))
                    //Logical: &&
                    
                    if ($age >= 18 && $haslicense == true) {
                        echo "You are allowed to drive.";
                    } else {
                        echo "You are not allowed to drive.";
                    }

                    switch ($age) {
                        case 18:
                            echo "<br>You are 18 years old.";
                            break;
                        case 20:
                            echo "<br>You are 20 years old.";
                            break;
                        default:
                            echo "<br>Age not specified.";
                    }

                    ?>

                </div>

                <div class="card p-3 my-3  bg-light">
                    <?php
                    echo "<h3>If elseif Statement</h3>";

                    $language = "ru";
                    $name = "Syahrul";
                    $name2 = "Syiro";

                    if ($language == "en") {
                        echo "Hi, Good Morning. " . $name2;
                    } elseif ($language == "ru") {
                        echo "Здравствуйте, доброе утро, Сяхрул. " . $name;
                    } else {
                        echo "Hey";
                    }

                    ?>
                </div>

                <div class="card p-3 my-3 bg-light">
                    <?php
                    echo "<h3>If else and Ternary statement</h3><br>";

                    echo "Condition: <br>";
                    $citizenship = "Malaysian";
                    $age >= 18;

                    echo "1. They must be " . $citizenship . "<br>";
                    echo "2. They must be at least 18 years old.<br><br>";

                    echo "Candidate: <br>";
                    $name = "Minah";
                    $citizenship = "Malaysian";
                    $age = 19;

                    echo "Name: " . $name . "<br>";
                    echo "Citizenship: " . $citizenship . "<br>";
                    echo "Age: " . $age . "<br><br>";

                    echo "Result: <br>";

                    if ($citizenship == "Malaysian" && $age >= 18) {
                        echo "Eligle to vote.";
                    } else {
                        echo "Not eligible to vote.";
                    }
                    echo "<br><br>";

                    $status = ($citizenship == "Malaysian" && $age >= 18) ? "Eligible to vote." : "Not eligible to vote.";
                    echo "Voting Status: <br>" . $status;

                    ?>
                </div>

                <div class="card p-3 my-3">
                    <?php
                    echo "<h3>Switch Statement</h3><br>";
                    $favcolor = "purple";

                    switch ($favcolor) {
                        case "red":
                            echo "Your favourite color is red!";
                            break; //stop the execution of the code block
                        case "blue":
                            echo "Your favourite color is blue!";
                            break;
                        case "purple":
                            echo "Your favourite color is purple!";
                            break;
                        default:
                            echo "Your favourite color is neither red, purple or blue!";
                    }

                    $item = "Tea";

                    switch ($item) {
                        case "Coffee":
                            echo "<br><br>Name of Item is Coffee";
                            echo "<br>Price of Coffee is RM 1.00";
                            echo "<br>Final Price is RM " . ($price = 1.00 * 15);
                            break;
                        case "Tea":
                            echo "<br><br>Name of Item is Tea";
                            echo "<br>Price of Tea is RM 0.80";
                            echo "<br>Final Price is RM " . ($price = 0.80 * 15);
                            break;
                        case "Cappuccino":
                            echo "<br><br>Name of Item is Cappuccino";
                            echo "<br>Price of Cappuccino is RM 5.00";
                            echo "<br>Final Price is RM " . ($price = 5.00 * 15);
                            break;
                        case "Orange":
                            echo "<br><br>Name of Item is Orange";
                            echo "<br>Price of Orange is RM 2.50";
                            echo "<br>Final Price is Rm " . ($price = 2.50 * 15);
                            break;
                        default:
                            echo "<br><br>Item not found!";
                    }
                    ?>
                </div>

                <div class="card p-3 my-3">
                    <?php
                    echo "<h3>For loop</h3><br>";

                    for ($x = 0; $x <= 15; $x += 2) {
                        echo "Even number: $x <br>";
                    }

                    echo "<br><h3>While and Do while loop</h3><br>";

                    $i = 1;
                    echo "While: <br>";
                    while ($i < 5) {
                        echo "The number is: $i <br>";
                        $i++;
                    }
                    echo "<br>";
                    $b = 1;
                    echo "Do While: <br>";
                    do {
                        echo "The number is: $b <br>";
                        $b++;
                    } while ($b <= 5);

                    echo "<br><h3>Foreach loop</h3><br>";
                    
                    $students = ["Abu", "Raj", "Nilam"];

                    foreach ($students as $name) {
                        echo "Student Name: $name <br>"; 
                    }
                    ?>

                    <?php
                    echo "<br>Multiplication Table for 5";
                    for ($x = 1; $x <= 12; $x++) {
                        $result = 5 * $x;
                        echo "<br>$x x 5 = $result";
                    }
                    ?>
                </div>

                <div class="card p-3 my-3">
                    <?php
                    echo "<h3>Function</h3><br>";

                    function greetStudent($name) {
                        echo "Hello $name, Welcome to Full Stack Class!<br><br>";
                    }
                    greetStudent("Syahrul");

                    function calculateTotal ($price, $quantity){
                        $total = $price * $quantity;
                        return $total;
                    }
                    $bill = calculateTotal(10, 5);
                    echo "Total Bill: " . $bill;
                    ?>

            </div>
        </div>
    </div>

</body>

</html>