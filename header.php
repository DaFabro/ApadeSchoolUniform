<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Apade Uniform Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href=" style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
            <img src="logo-APADE.2x.webp" alt="APADE Logo" style="height: 60px; margin-right: 75px; ">
                <h1><a href="index.php">Apade School Uniform System</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" <?= ($current_page == 'index.php') ? 'class="active"' : '' ?>><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="orders.php" <?= ($current_page == 'orders.php') ? 'class="active"' : '' ?>> <i class="fas fa-user"></i> 
                    Add Student</a></li>
                    <li><a href="search.php" <?= ($current_page == 'search.php') ? 'class="active"' : '' ?>><i class="fas fa-search"> Search  Student </i>
                    </a></li>
                
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        
