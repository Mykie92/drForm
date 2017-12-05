<?php

require_once ('authorize.php');

//connect to Database
require_once('vars.php');
$dbconnection = mysqli_connect(HOST,USERNAME,PASSWORD,DB_NAME) or die ('connection failed');


//Build the query
$query = "SELECT * FROM patients ORDER BY name ASC";


//Now talk to database
$result = mysqli_query($dbconnection, $query) or die ('query failed');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Dr. Doug Chung DDS</title>

    <!-- Normalize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="style/styling.css" rel="stylesheet" type="text/css">


</head>
<body>
<header>
    <h1>DR. DOUG CHUNG DDS <br>ADMIN PAGE</h1>

    <div class="nav">
        <!--Hello-->
        <div class="nav-line"></div>
        <a></a>
        <a href="index.html">BACK TO MAIN PAGE</a>
        <a></a>
        <div class="nav-line"></div>
    </div>

</header>


<main style="background: #eee; margin-bottom: 40px;">




<h2 style="padding: 10px;">Patients</h2>

<?php

//Display data
while($row = mysqli_fetch_array($result)) {


    echo '<div class="person" style="margin-top: 20px;">';
    echo '<h3 style="margin: 10px;">'. $row['patient1'] .'</h3>';

    echo '<div style="float: left; width: 25%"><h4>Birthdate:</h4><p>'.$row['birthdate'].'</p></div>';
    echo '<div style="float: left; width: 25%"><h4>Address:</h4><p>'. $row['address'] .'</p></div>';
    echo '<div style="float: left; width: 25%"><h4>Phone:</h4><p>'. $row['phone'] .'</p></div>';
    echo '<div style="float: left; width: 25%"><a class="button" href="detail.php?id='.$row['id'].'">View Patient Form</a></div>';
    echo '<div style="clear: both"></div>';
    echo '</div>';
};//end while


//Close Connection
mysqli_close($dbconnection);

?>



</main>
</body>
</html>