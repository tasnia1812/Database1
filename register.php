<?php 
if (file_exists('server.php')) {
    include('server.php'); 
}

$username = isset($username) ? $username : '';
$email = isset($email) ? $email : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Georgia', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('img/bg3.jpg') no-repeat left/cover;

            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .header {
            background:rgba(171, 80, 151, 0.69);
            color: white;
            width: 100%;

            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            margin-top: 20px;
            width: 100%;
            background: transparent;
            padding: 20px;
            border-radius: 10px;
        }

        .input-group {
            margin: 15px 0;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color:rgb(60, 51, 60);
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            background: white;
            box-shadow: 0 0 8px rgba(52, 47, 50, 0.6);
        }

        .btn {
            width: 100%;
            background:rgba(171, 80, 151, 0.69);
            color: rgb(255, 255, 255);
            padding: 12px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

  

        .btn:hover {
            background:rgb(104, 21, 93);
            transform: scale(1.05);
        }

        p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color:rgb(104, 21, 93);
        }

        p a {
            color:rgb(81, 68, 80);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        p a:hover {
            color:rgb(62, 49, 61);
            font-weight: bold;

            text-decoration: underline;
        }

       
        
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <?php if (file_exists('errors.php')) include('errors.php'); ?>
            
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="input-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1" id="password_1" required>
            </div>
            <div class="input-group">
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" id="password_2" required>
            </div>
            <button type="submit" class="btn" name="reg_user">Register</button>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</body>
</html>
