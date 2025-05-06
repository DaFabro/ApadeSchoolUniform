<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apade Uniform Management System</title>
    <link rel="icon" href="logo-APADE.2x.png" type="x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    --primary-color: #3a6ea5;
    --secondary-color: #004e98;
    --accent-color: #ff9f1c;
    --light-color: #f7f9fb;
    --dark-color: #2b2d42;
    --gray-color: #e5e5e5;
    --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: var(--dark-color);
    background-color: var(--light-color);
    background: linear-gradient(
        rgba(0, 0, 0, 0.4),
        rgba(0, 0, 0, 0.4)
    ), url('high-school-boys-and-girls-free-vector.jpg');
}
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 0;
}
h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}
h1 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 1rem;
}
h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: var(--accent-color);
    border-radius: 2px;
}

h2 {
    font-size: 2rem;
}

h3 {
    font-size: 1.5rem;
    color: var(--primary-color);
}

p {
    margin-bottom: 1rem;
}

/* Header */
header {
    background-color: var(--primary-color);
    box-shadow: var(--box-shadow);
    position: sticky;
    top: 0;
    z-index: 100;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
}
.logo {
    display: flex;
    align-items: center;
}
.logo img {
    height: 50px;
    margin-right: 1rem;
}
.logo h2 {
    color: white;
    font-size: 1.5rem;
    margin-bottom: 0;
}
nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 2rem;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 1rem;
    transition: all 0.3s ease;
    padding: 0.5rem 0;
    position: relative;
}
nav ul li a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: var(--accent-color);
    transition: width 0.3s ease;
}
nav ul li a:hover::after,
nav ul li a.active::after {
    width: 100%;
}
.hero-section {
    background: linear-gradient(rgba(58, 110, 165, 0.8), rgba(0, 78, 152, 0.9));
    background-size: cover;
    background-position: center;
    color: white;
    border-radius: 10px;
    padding: 4rem 2rem;
    margin-bottom: 3rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}
.hero-text h2 {
    color: white;
    font-size: 2.2rem;
    margin-bottom: 1rem;
}

.hero-text p {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto;
    opacity: 0.9;
}

/* Features */
.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.feature {
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    transition: transform 0.3s ease;
}

.feature:hover {
    transform: translateY(-5px);
}

.feature h3 {
    position: relative;
    padding-bottom: 0.75rem;
    margin-bottom: 1.5rem;
}

.feature h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--accent-color);
    border-radius: 2px;
}

.feature ul {
    list-style-position: inside;
    padding-left: 1rem;
}

.feature ul li {
    margin-bottom: 0.75rem;
    position: relative;
    padding-left: 1rem;
    list-style-type: none;
}

.feature ul li::before {
    content: '→';
    color: var(--accent-color);
    position: absolute;
    left: 0;
}

/* Footer */
footer {
    background-color: var(--secondary-color);
    color: white;
    text-align: center;
    padding: 2rem 0;
    margin-top: 4rem;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-logo {
    margin-bottom: 1rem;
}

.footer-logo img {
    height: 40px;
}

.footer-links {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 1rem 0;
}

.footer-links a {
    color: white;
    margin: 0 1rem;
    text-decoration: none;
    font-size: 0.9rem;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.footer-links a:hover {
    opacity: 1;
}

.footer-text {
    font-size: 0.9rem;
    opacity: 0.7;
}

 
@media (max-width: 768px) {
    h1 {
        font-size: 2rem;
    }
    
    h2 {
        font-size: 1.7rem;
    }
    
    .header-container {
        flex-direction: column;
        text-align: center;
    }
    
    .logo {
        margin-bottom: 1rem;
        justify-content: center;
    }
    
    nav ul {
        flex-direction: column;
        align-items: center;
    }
    
    nav ul li {
        margin: 0.5rem 0;
    }
    
    .hero-section {
        padding: 3rem 1.5rem;
    }
    
    .hero-text h2 {
        font-size: 1.8rem;
    }
    
    .hero-text p {
        font-size: 1rem;
    }
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    border-radius: 30px;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: var(--accent-color);
    color: white;
}

.btn-primary:hover {
    background-color: #e88e0c;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 159, 28, 0.4);
}

.btn-secondary {
    background-color: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-secondary:hover {
    background-color: var(--primary-color);
    color: white;
}

    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Welcome to Apade Uniform Management System</h1>
        
        <div class="hero-section">
            <div class="hero-text">
                <h2>Streamlining uniform orders and payments</h2>
                <p>For students, parents, and school tailors</p>
            </div>
        </div>
        <div class="features">
            <div class="feature">
                <h3>For Students</h3>
                <ul>
                    <li>Register uniform orders</li>
                    <li>Track order status</li>
                    <li>Digital payment receipts</li>
                </ul>
            </div>
            <div class="feature">
                <h3>For Tailors</h3>
                <ul>
                    <li>Manage all orders</li>
                    <li>Update payment status</li>
                    <li>Generate reports</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>