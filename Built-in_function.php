<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="card p-3 my-3 bg-light">
            
            <h2>Built-in Fucntion in PHP</h2>
            <hr>

            <h3>1. strlen($str)</h3>
            <?php
            $name = "MuhammaD SyahRUL NIezAM BIN ShaMSuL ANuaR ";
            echo strlen($name);
            echo "<br><br>";
            ?>

            <h3>2. strtoupper($str) , strtolower($str)</h3>
            <?php
            echo "$name <br><br>";
            echo "UPPERCASE: " . strtoupper($name)."<br>";
            echo "lowercase: " . strtolower($name)."<br><br>";
            ?>

            <h3>3. rand($min, $max)</h3>
            <?php
            $lucky = rand(1, 16);
            echo $lucky . "<br><br>";
            ?>

            <h3>4. date($format)</h3>
            <?php
            echo date("d-M-Y"). "<br>";
            echo "Copyright 2021 - " . date("Y") . "<br><br>";
            ?>

            <h3>5. count($array) and sort($array)</h3>
            <?php
            $colors = ['Red', 'Green', 'Blue'];
            echo count($colors) . "<br>";
            echo sort($colors) ."<br><br>";
            ?>

            <h3>6. number_format($num, 2)</h3>
            <?php
            $num = 1234.32121;
            echo $num . "<br>";
            echo "After: " .number_format($num, 2). "<br><br>";
            ?>

            <h3>7. trim($str)</h3>
            <?php
            echo "Text = " .$name;
            echo "<br>Size = " .strlen($name)."<br><br>";

            //remove whitespace 
            echo "Trim = " .trim($name);
            echo "<br>Size trim = " .strlen(trim($name))."<br><br>";
            ?>

            <h3>8. substr($string,$start,$length)</h3>
            <?php
            $institution = "Politeknik Kuala Terengganu";
            echo "Text = " . $institution . "<br>";

            echo substr($institution, 11,5 ) . "<br><br>"
            ?>
            <hr>
            <h3>Numeric Array</h3>
            <?php
            $colors = ["Red", "Green", "Blue"];

            echo $colors[1] ."<br>"; //output green
            echo $colors[2] ."<br><br>"; //output blue

            $colors[] = "Yellow";
            $colors[0] = "Cyan";
            //looping using for loop
            for ($i = 0; $i < count($colors); $i++){
                echo "Color: " .$colors[$i] ."<br>";
            } echo "<br>";
            ?>

            <h3>Associative Arrays</h3>
            <?php
            //Syntax: "key" => "value"
            $student_age = [
                "Syahrul" => 20,
                "Dome" => 19,
                "Fitri" => 20
            ];
            echo "Syahrul is " . $student_age["Syahrul"] ." years old.";
            echo "<br><br>";

            //looping using foreach loop
            foreach ($student_age as $name => $age) {
                echo "$name is $age years old.<br>";
            } echo "<br>"
            ?>

            <h3>Multidimensional Array</h3>
            <?php
            $student = [
                ["Syahrul", 20, "Malaysia"],
                ["Dome", 19, "Thailand"],
                ["Fitri", 20, "Malaysia"]
            ];
            //accessing: [Row][Column]
            echo $student[0][0] ."<br>";
            echo $student[0][2];
            //looping
            foreach ($student as $data) {
                echo "<br><br>Name: " .$data[0] ."<br>Age: " .$data[1] ."<br>Country: " .$data[2] . "<br><br>";
                echo "<hr>";
            }
            ?>
        </div>
    </div>
</div>