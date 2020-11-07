<!DOCTYPE html>
<html>

<body>

    <?php

    //Crate connection
    $con = mysqli_connect('localhost', 'heliotvi_root', '8EsgYVPdPVftnpQ', 'heliotvi_cesars_plumbing');
    if (!$con) {
        die('Could not connect BH-DB: ' . mysqli_error($con));
    }

    //Selection
    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM ratings";
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

                $ystars = $row["rating"];
                while ($ystars > 0) {
                    echo
                        "<img src='/images/svg/full_star.svg'>";
                    $ystars--;
                }
                $bstars = $row["rating"];
                while ($bstars < 5) {
                    echo
                        "<img src='/images/svg/empty_star.svg'>";
                    $bstars++;
                }
                echo
                    "<p>" . $row["details"] . "</p>
                        <h4>- " . $row["cname"] . "</h4>
                    </span>
                </div>";
                $number++;
            } else {
                echo
                    "<!--TESTIMONIAL-->
                <div class='testimonial float-right'>
                    <span>";

                $ystars = $row["rating"];
                while ($ystars > 0) {
                    echo
                        "<img src='/images/svg/full_star.svg'>";
                    $ystars--;
                }
                $bstars = $row["rating"];
                while ($bstars < 5) {
                    echo
                        "<img src='/images/svg/empty_star.svg'>";
                    $bstars++;
                }
                echo
                    "<p>" . $row["details"] . "</p>
                        <h4>- " . $row["cname"] . "</h4>
                    </span>
                </div>";
                $number++;
            }
        }
    }

    ?>

</body>

</html>