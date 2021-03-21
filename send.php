<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        h2,h3{
            text-align: center;
            color: #495464;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 50px; 
            font-size: 2vw;
        }

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
    </style>
</head>

<body>
    <?php 
        session_start();

        $server = "sql111.epizy.com";
        $username = "epiz_28196596";
        $password = "bQr1J1d5n45";
        $dbmane = "epiz_28196596_transactions";
        $port = "3306";
        
        $conn = mysqli_connect("sql111.epizy.com", "epiz_28196596", "bQr1J1d5n45", "epiz_28196596_transactions", "3306");
        
        $id = $_GET['CUSTOMER_ID'];

        $sql1 = "SELECT * FROM customers where CUSTOMER_ID = $id"; 
        $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result1) > 0) {
            
            while($row1 = mysqli_fetch_assoc($result1)) {
                echo "<h2><b>";
                echo "Your Account Details:<br>";
                echo "</h2></b>";
                echo "<h3>";
                echo "CUSTOMER_ID : {$row1['CUSTOMER_ID']} <br>".
                "CUSTOMER_NAME : {$row1['CUSTOMER_NAME']} <br>".
                "EMAIL : {$row1['EMAIL']} <br>". 
                "MOBILE : {$row1['MOBILE']} <br>".
                "CURRENT_BALANCE : {$row1['CURRENT_BALANCE']} <br>"; 
                echo "</h3>";
                
            }
          } else {
            echo "0 results";
          }


          $sql2 = "SELECT * FROM customers where CUSTOMER_ID != $id";
          $result2 = mysqli_query($conn, $sql2);

          echo "<table>
                <tr>
                    <th>CUSTOMER_ID</th>
                    <th>CUSTOMER_NAME</th>
                    <th>EMAIL</th>
                    <th>MOBILE</th>
                    <th>CURRENT_BALANCE</th>
                </tr>";

          if(mysqli_num_rows($result2) > 0){

            while($row2 = mysqli_fetch_assoc($result2)){
                echo "<tr>
                    <td>".$row2["CUSTOMER_ID"].
                    "</td><td>".$row2["CUSTOMER_NAME"].
                    "</td><td>".$row2["EMAIL"].
                    "</td><td>".$row2["MOBILE"].
                    "</td><td>".$row2["CURRENT_BALANCE"];
                    ?>

                    </td><td><a href="transfer.php?CUSTOMER_ID2=<?php echo $row2['CUSTOMER_ID'];?>&CUSTOMER_ID1=<?php echo $id;?>"<button type="submit" class="btn btn-info btn-lg">Transfer</button></a>

<!-- Modal 
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">-->
  
    <!-- Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transfer</h4>
      </div>
      <div class="modal-body">  
		
        <form action="get-method.php?CUSTOMER_ID=$id" method="get"> 
			<input type="text" class="form-control" name="customer" placeholder="Customer ID" /> 
			<br>
			<input type="text" class="form-control" name="amount" placeholder="Amount" /> 
			<br>
			<input type="submit" class="btn btn-success btn-block" name="submit" /> 
		</form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>-->
                    </td></tr>

            <?php }
                echo "</table>";
            }

          
          mysqli_close($conn);

            
?>

</body>
</html>