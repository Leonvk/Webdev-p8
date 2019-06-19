<?php
function selectYachts()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coralyachts";

// Create connection
    $mysqli = new mysqli("localhost", "root", "", "coralyachts");

// Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

// Select yachts
    $sql = "SELECT * FROM yachts";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // alle gegevens van table yachts
//            echo $row["yachtID"] . $row["Yachttypes_yachtTypeID"] . $row["Ports_portID"] . $row["status"] . $row["name"] . $row["code"];
            echo '
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="r-best-offer-single">
                                <div class="r-best-offer-in">
                                    <div class="r-offer-img">
                                        <a class="d-inline-block" href="#"><img src="assets/images/yacht1.jpeg" class="img-fluid d-block m-auto" alt=""></a>
                                    </div>
                                    <div class="r-best-offer-content">
                                        <a href="#"><b>' . $row["name"] . '</b></a>
                                        <p>Start at <b>45.00 USD</b> per day</p>
                                        <ul class="pl-0 mb-0">
                                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
';
        }
    } else {
        echo "geen yachten gevonden FOUT!";
    }


    $mysqli->close();
}

?>