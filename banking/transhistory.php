
<!DOCTYPE html>
<html lang="en">

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  color: white;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  
}

#customers tr:hover {background-color: #ddd;
                    color:black;
                    }

#customers th {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  background-color:#0077b3;

  
}
</style>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banking System</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
    <img src="logo1.jpg" alt="bank logo">
        <h1>Banking System</h1>

        <nav id="nav_bar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="view_all_customers.php">Customers</a>

        </nav>
    </header>
    <div class="container divStyle">
        <h2>Transaction Summary</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table roundedCorners  tabletext table-hover table-condensed table-dark" id="customers" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount Transferred</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transfers";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['fromuser']; ?></td>
            <td><?php echo $rows['touser']; ?></td>
            <td><?php echo $rows['transamount']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div><br>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


        <footer><br>
        &copy;<span>ashwinipendkar0@gmail.com</span>
        </footer>
</body>
</html>