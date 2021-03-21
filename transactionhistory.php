<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        table, th, td{
            border-collapse: collapse;
            color: #495464;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            border: 1px solid #495464;
            margin-left: auto;
            margin-right: auto;
        }
        td, th{
            padding: 10px;
        }

    
    </style>
</head>
<body style="margin: 10px 50px 10px 50px;">
<?php include 'header.php' ?>
    <h1>TRANSACTION HISTORY</h1>
    <div style="overflow-x:auto; padding: 30px 0 30px 0">
    <table>
        <tr>
            <th>SENDER</th>
            <th>RECEIVER</th>
            <th>AMOUNT TRANSFERRED</th>
        </tr>

        <?php 
            $server = "sql111.epizy.com";
            $username = "epiz_28196596";
            $password = "bQr1J1d5n45";
            $dbmane = "epiz_28196596_transactions";
            $port = "3306";
        
            $conn = mysqli_connect("sql111.epizy.com", "epiz_28196596", "bQr1J1d5n45", "epiz_28196596_transactions", "3306");
            if($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
            }

            $sql = "SELECT * FROM transaction";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr>
                    <td>".$row["SENDER"].
                    "</td><td>".$row["RECEIVER"].
                    "</td><td>".$row["BALANCE"].
                    "</td>
                    </tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }

            $conn-> close();
        ?>

    </table>
    </div>
    
</body>
</html>