<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //Crate connection
    $con = mysqli_connect('localhost', 'root', '', 'rating');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    //Selection
    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM rating";
    $result = mysqli_query($con, $sql);

    $number = 0;

    //Display Data
    if ($result->num_rows > 0) {
        //Output data of each row
        while ($row = mysqli_fetch_array($result)) {
            if ($number % 2 == 0) {
                echo
                    "<!--TESTIMONIAL-->
                <div class='testimonial float-left'>
                    <span>";

                $ystars = $row["Rating"];
                while ($ystars > 0) {
                    echo
                        "<img src='/images/svg/full_star.svg'>";
                    $ystars--;
                }
                $bstars = $row["Rating"];
                while ($bstars < 5) {
                    echo
                        "<img src='/images/svg/empty_star.svg'>";
                    $bstars++;
                }
                echo
                    "<p>" . $row["Details"] . "</p>
                        <h4>- " . $row["Name"] . "</h4>
                    </span>
                </div>";
                $number++;
            } else {
                echo
                    "<!--TESTIMONIAL-->
                <div class='testimonial float-right'>
                    <span>";

                $ystars = $row["Rating"];
                while ($ystars > 0) {
                    echo
                        "<img src='/images/svg/full_star.svg'>";
                    $ystars--;
                }
                $bstars = $row["Rating"];
                while ($bstars < 5) {
                    echo
                        "<img src='/images/svg/empty_star.svg'>";
                    $bstars++;
                }
                echo
                    "<p>" . $row["Details"] . "</p>
                        <h4>- " . $row["Name"] . "</h4>
                    </span>
                </div>";
                $number++;
            }
        }
    }

    ?>

</body>

</html>