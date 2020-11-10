<html>

<body>

    <?php

    //Credentials
    $servername = "testphpserver";
    $username = "root";
    $password = "";
    $dbname = "rating";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //Selection
    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM rating";
    $result = mysqli_query($con, $sql);

    $number = 0;

    //Display Data
    if ($result->num_rows > 0) {
        //Output data of each row
        while ($row = mysqli_fetch_array($result)) {
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
        }
    }


    //close connection
    $con->close();

    ?>

</body>

</html>