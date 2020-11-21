<?php
    include_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

   
    <header>
        <img src="logo1.jpg" alt="bank logo">
        <h1>Banking System</h1>

        <nav id="nav_bar">
            <a href="index.php" class="active">Home</a>
            <a href="about.html">About</a>
            <a href="view_all_customers.php">Customers</a>
        </nav>
    </header>
    <section><br>
        <div>
            <h1>Welcome To The Bank</h1>
            <h3>Transfer Money From AnyWhere to Anyone in one click</h3>
            <button><a href="view_all_customers.php">View All Customers</a></button>
            <button><a href="transhistory.php">View All Transactions</a></button>
        </div>
        <br>
    </section>
   
    
    <footer>
        &copy;<span>ashwinipendkar0@gmail.com</span>
    </footer>
</body>

</html>