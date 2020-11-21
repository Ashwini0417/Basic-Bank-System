
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
            <a href="view_all_customers.php" class="active">Customers</a>

        </nav>
    </header>
<div>
<?php
    require 'config.php';
    $query = "SELECT * FROM customers";
    $result = mysqli_query($conn,$query);
?>

    <div class="container divStyle">
        <h2>Select a Customer to transfer amount</h2>
        <br>

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm" style="text-align:center;" >
                    <table class="table roundedCorners tabletext table-sm 
                    table-condensed table-bordered table-dark" id="customers">
                        <thead><b>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Current Balance</th>
                            <th scope="col"></th>

                            </tr>
                        </b></thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['amount']?></td>
                        <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>">
                         <button type="button" class="button">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div><br>

</div>
                

        <footer>
        &copy;<span>ashwinipendkar0@gmail.com</span>
        </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>
