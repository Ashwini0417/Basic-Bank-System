<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the credits are to be transferred.

    $sql = "SELECT * from customers where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  //if amount that we are gonna deduct from any user is
  // greater than the current credits available then print insufficient balance.
 if($amnt > $sql1['amount'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

     else if($amnt == 0){
         echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
    </script>";
     }
    else {

        //if not then deduct the credits from the user's account that we selected.
        $newCredit = $sql1['amount'] - $amnt;
        $sql = "UPDATE customers set amount=$newCredit where id=$from";
        mysqli_query($conn,$sql);



        $newCredit = $sql2['amount'] + $amnt;
        $sql = "UPDATE customers set amount=$newCredit where id=$toUser";
        mysqli_query($conn,$sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transfers(`fromuser`, `touser`, `transamount`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
           echo "<script type='text/javascript'>
                    alert('Transaction Successful. Please check your transactions in the transactions table');
                    window.location='transhistory.php';
                </script>";
        }
        $newCredit= 0;
        $amnt =0;
    }

}
?>



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

        <h1> Banking System</h1>

        <nav id="nav_bar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="view_all_customers.php">Customers</a>

        </nav>
    </header>


    <div class="container divStyle" id="customers">
        <h2 style="text-align:right">Transaction here</h2>
        <!-- <form method="post" name="tcredit" class="tabletext"><br/> -->
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_array($query);
            ?>
            <form method="post" name="tamount" class="tabletext" ><br/>
        <label> From: </label><br/>
        <div>
            <table class="table roundedCorners  tabletext table-hover table-dark 
             table-striped table-condensed" border=1 >
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount Transferred</th>
                </tr>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['amount'] ?></td>
                </tr>
            </table>
        </div>
        <br/><br/><br/>
        <label>To:</label>
        <select class=" form-control"   name="to" style="margin-bottom:5%; " required>
            <option value="" disabled selected> </option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped table-dark" value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?>
                    <!--(Credits:
                    <?php echo $rows['amount'] ;?> )-->

                </option>
            <?php
                }
            ?>
        </select> <br/><br/><br/>
            <label>Amount:</label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required  />  <br/><br/>
                <div class="text-center btn3" >
            <button class="button" name="submit" type="submit" id="myBtn">Proceed</button>
            </div>
        </form>
    </div>



        <footer>
        &copy;<span>ashwinipendkar0@gmail.com</span>
        </footer>
    <script src="script.js"></script>
</body>

</html>
