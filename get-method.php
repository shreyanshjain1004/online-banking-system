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
		if ( isset( $_GET['submit'] ) ) 
		{ // retrieve the form data by using the element's name attributes value as key 
			$cust = $_GET['customer']; $amt = $_GET['amount']; 
			// display the results 
			echo '<h3>Transfer complete</h3>'; echo 'Transferring ' . $amt . ' to ' . $cust; exit;
		}


          
          mysqli_close($conn);

            
?>

</body>
</html>