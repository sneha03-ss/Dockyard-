

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch the Sender Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    
</head>
<body style="margin: 50px;">        
    <h1>Fetch the Sender Data</h1>     
    <a class="btn btn-primary" href="create.php" role="button">New Client</a>
    <br>
    <table class="table">
       <thead>
            <tr>
                <th> Sender ID</th>
                <th> Business Name</th>
                <th> Consignment No</th>
                <th> Product ID</th>
                <th> Arrival Date </th>

            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dcc";
            $conn="";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if ($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "Select * from sender";
            $result = $conn->query($sql);
            echo "Connected successfully"."<br>";

            while($row = $result->fetch_assoc()) {

            


            echo "<tr>
                    <td>". $row["SenderID"]. "</td>
                    <td> ". $row["BusinessName"]. " </td>
                    <td> ". $row["ConsignmentNo"]. "</td>
                    <td>". $row["ProductID"]. "</td>
                    <td>". $row["ArrivalDate"]. "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id=$row[SenderID]'>EDIT</a>
                    </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>



    
</body>
</html>
