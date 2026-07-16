<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="">Homework</h1>
                <div class="card p-3 my-3 bg-light">
                    <?php
                    $name = "Abu";
                    $mark = 75;

                    $name2 = "Raj";
                    $mark2 = 85;

                    if ($mark >= 80 && $martk <= 100) {
                        $grade = "A";
                    } elseif ($mark >= 70 && $mark < 79) {
                        $grade = "B";
                    } elseif ($mark >= 60 && $mark < 69) {
                        $grade = "C";
                    } elseif ($mark >= 50 && $mark < 59) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }

                    echo "Name: " . $name . "<br>";
                    echo "Mark: " . $mark . "<br>";
                    echo "Grade: " . $grade . "<br><br>";
                    
                    switch ($mark2) {
                        case $mark2 >= 80 && $mark2 <= 100:
                            $grade2 = "A";
                            break;
                        case $maek2 >= 70 && $mark2 < 79:
                            $grade2 = "B";
                            break;
                        case $mark2 >= 60 && $mark2 < 69:
                            $grade2 = "C";
                            break;
                        case $mark2 >= 50 && $mark2 < 59:
                            $grade2 = "D";
                            break;
                        default:
                            $grade2 = "E";
                            break;
                    }

                    echo "Name: " . $name2 . "<br>";
                    echo "Mark: " . $mark2 . "<br>";
                    echo "Grade: " . $grade2;
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>