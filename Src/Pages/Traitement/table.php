<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Travels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php
    $connection = mysqli_connect('localhost','root','','book_db');
    $from = $_GET['from'];
    $to = $_GET['to'];
    $query = "SELECT place_from, place_to, date_dispo FROM fly WHERE place_from = '$from' and place_to = '$to'";
    $select = mysqli_query($connection, $query);
    if(mysqli_num_rows($select)) {
        echo '<table class="table table-dark">';
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Flying From</th>";
                    echo "<th>Flying To</th>";
                    echo "<th>Available Dates</th>";
                echo "</tr>";
            echo "</thead>";
        while ($row = mysqli_fetch_array($select)) {
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $row['place_from'] . "</td>";
                    echo "<td>" . $row['place_to'] . "</td>";
                    echo "<td>" . $row['date_dispo'] . "</td>";
                echo "</tr>";
        }
            echo "</tbody>";
    echo "</table>";
    }else{
        header('location:../error.php');
    }
?>
</body>
</html>