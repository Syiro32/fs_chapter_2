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
                    echo "Koperasi PKT<br>";

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
                    } echo "<br><br>";

                    $status = ($citizenship == "Malaysian" && $age >= 18) ? "Eligible to vote." : "Not eligible to vote.";
                    echo "Voting Status: <br>" . $status;

                    ?>
                </div>

            </div>
        </div>
    </div>

</body>

</html>