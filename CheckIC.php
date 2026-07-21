<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="card p-3 my-3 bg-light">
            <h2>Check IC</h2>
            <hr>
            <?php
            function extractIC($nrIC)
            {
                // Validate user input 12 character ic
                if (strlen($nrIC) != 12) {
                    return "Invalid IC Format. Please enter 12 character only.";
                }

                //extract data
                $year = substr($nrIC, 0, 2);
                $month = substr($nrIC, 2, 2);
                $day = substr($nrIC, 4, 2);

                //check gender
                $lastDigit = substr($nrIC, -1);
                $gender = ($lastDigit % 2 != 0) ? "Male" : "Female";

                //convert year
                $dob_year = ($year > 26) ? "19" . $year : "20" . $year;
                $currentYear = date("Y");
                $age = $currentYear - $dob_year;

                //place of birth
                $stateCode = substr($nrIC, 6, 2);
                if (in_array($stateCode, ['01', '21', '22', '23', '24'])) {
                    $state = "Johor";
                } elseif (in_array($stateCode, ['02', '25', '26', '27'])) {
                    $state = "Kedah";
                } elseif (in_array($stateCode, ['03', '28', '29'])) {
                    $state = "Kelantan";
                } elseif (in_array($stateCode, ['11', '45', '46'])) {
                    $state = "Terengganu";
                }

                return "
                <div>
                <strong>IC Number: </strong> $nrIC <br>
                <strong>Date of Birth: </strong> $day - $month - $dob_year <br>
                <strong>Gender: </strong> $gender <br>
                <strong>Age: </strong> $age <br>
                <strong>Place of Birth: </strong> $state <br>
                </div>
                ";
            }
            echo extractIC("060414110299");
            ?>
        </div>
    </div>
</div>