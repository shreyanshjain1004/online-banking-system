<?php
    include 'config.php';
    session_start();
    
    $server = "sql111.epizy.com";
	$username = "epiz_28196596";
	$password = "bQr1J1d5n45";
	$dbmane = "epiz_28196596_transactions";
	$port = "3306";
        
    $conn = mysqli_connect("sql111.epizy.com", "epiz_28196596", "bQr1J1d5n45", "epiz_28196596_transactions", "3306");
    if(isset($_POST['submit'])){

        

        $from = $_GET['CUSTOMER_ID1'];
        $to = $_GET['CUSTOMER_ID2'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from customers where CUSTOMER_ID=$from";
        $query = mysqli_query($conn,$sql);
        $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

        $sql = "SELECT * from customers where CUSTOMER_ID=$to";
        $query = mysqli_query($conn,$sql);
        $sql2 = mysqli_fetch_array($query);

        if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
	
	// constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['CURRENT_BALANCE']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['CURRENT_BALANCE'] - $amount;
                $sql = "UPDATE customers set CURRENT_BALANCE=$newbalance where CUSTOMER_ID=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['CURRENT_BALANCE'] + $amount;
                $sql = "UPDATE customers set CURRENT_BALANCE=$newbalance where CUSTOMER_ID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['CUSTOMER_NAME'];
                $receiver = $sql2['CUSTOMER_NAME'];
                $sql = "INSERT INTO transaction(`SENDER`, `RECEIVER`, `BALANCE`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        form{
            border: 1px solid #ccc;
            margin: auto;
            width: 700px;
            height: 400px;
            background-color: white;
            text-align: center;
            padding: 30px 30px 5px 30px;
        }
        .container{
            margin: auto;
            text-align: center;
            padding: 30px 30px 40px 30px;
            color: #495464;
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>





<body>
<?php include 'header.php' ?>

<div class="container">
  <div class="row">
    <div class="col-6">
    <h3><b>SENDER:</b></h3><br>
    <?php 
        
    $id = $_GET['CUSTOMER_ID1'];

    $sql1 = "SELECT * FROM customers where CUSTOMER_ID = $id"; 
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        
        while($row1 = mysqli_fetch_assoc($result1)) {
            
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
?>
    </div>

    <div class="col-6">
    <h3><b>RECEIVER:</b></h3><br>
    <?php
    $id2 = $_GET['CUSTOMER_ID2'];

    $sql2 = "SELECT * FROM customers where CUSTOMER_ID = $id2"; 
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        
        while($row2 = mysqli_fetch_assoc($result2)) {
            
            echo "<h3>";
            echo "CUSTOMER_ID : {$row2['CUSTOMER_ID']} <br>".
            "CUSTOMER_NAME : {$row2['CUSTOMER_NAME']} <br>".
            "EMAIL : {$row2['EMAIL']} <br>". 
            "MOBILE : {$row2['MOBILE']} <br>".
            "CURRENT_BALANCE : {$row2['CURRENT_BALANCE']} <br>"; 
            echo "</h3>";
            
        }
      } else {
        echo "0 results";
      }
?>
    </div>
  </div>
</div>




<form method="POST">
  <div class="form-group" style="padding: 20px;">
    <label for="exampleInputEmail1" style="font-family: 'Roboto Condensed', sans-serif; font-size: 30px; color: #495464">Enter Amount</label>
    <input type="number" class="form-control form-control-lg" name="amount" placeholder="Enter amount">
  </div>
  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
    
</body>
</html>