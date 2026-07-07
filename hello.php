<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
    /*  DFP40443: FULL STACK WEB DEVELOPMENT
        Activity: My First PHP Script
        Name: Syahrul Niezam
    */   

    $Name = "MUHAMMAD SYAHRUL NIEZAM BIN SHAMSUL ANUAR";
    
    //This line prints a message to the browser
    echo "<h1>Hello World!<h1>";

    #You can also include HTML tags inside echo
    echo "<hr>Welcome to PHP Programming.This is my first time learning PHP Programing</h1>";
    echo "<hr>My Name is $Name</h1>";
    

    echo "<hr><h3>Double Quote vs Single Quote</h3>";
    $Institution = "Politeknik Kuala Tearengganu";

    echo "Institution : $Institution";
    echo "<br>";
    echo 'Institution : $Institution';
    echo "<br>";

    echo "<hr><h3>Constant</h3>";

    //Defining contstant
    define("SITE_URL","https://pkt.mypolycc.edu.my");

    //Using constant
    echo 'Thank you for visiting - ' . SITE_URL;

    echo "<hr><h3>Variable vs Constant</h3>";

    //1. Defining a Constant (Fixed value)
    define("TAX_RATE", 0.08); // 8% Sales Tax

    //2. Declaring Variables (can change)
    $itemName = "Laptop";
    $price = 2500;

    $itemName = "Mouse";
    $price = 30;

    //3. Calculation 
    $totalTax = $price * TAX_RATE;
    $totalPrice = $price + $totalTax;

    //4. Output
    echo "Item:" . $itemName . "<br>";
    echo "Base Price: RM " . $price . "<br>";
    echo "Total with Tax: RM " . $totalPrice;
?>