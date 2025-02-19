<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  	exit();
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  	exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* Apply styles to the entire page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background:url('img/bg3.webp') no-repeat center/cover;
            width: 100%;
            padding: 20px;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 400px;
        }


        /* Header Styling */
        .header {
            background:#006078;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
            border-radius: 10px 10px 0 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Content Box */
        .content {
            background: white;
            padding: 25px;
            width: 100%;
            border-radius: 0 0 10px 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Welcome Text */
        .welcome-text {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        /* User Info */
        .user-info {
            font-size: 20px;
            font-weight: bold;
            color:rgb(86, 128, 136);
            margin: 10px 0;
        }

        /* Success Message */
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        /* Logout Button */
        .logout-btn {
            display: inline-block;
            background: #E37C78;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #d42f44;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                width: 90%;
            }

            .logout-btn {
                width: 100%;
            }
        }

    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">
        <p class="welcome-text">Welcome to my project page!</p>

        <!-- Notification Message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success-message">
                <h3><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3>
            </div>
        <?php endif ?>

        <!-- Logged-in User Information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p class="user-info">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
            <a href="index.php?logout=1" class="logout-btn">Logout</a>
        <?php endif ?>
    </div>
</div>

</body>
</html>
